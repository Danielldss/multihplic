<?php

namespace App\Http\Controllers;

use App\Provider;
use App\ProviderUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{
    public $model;

    public function __construct(Provider $model) {
        $this->model = $model;
    }

    public function show($id) {
        try {

            $data = Provider::with('user.user')->where('id', '=', $id)->first();
            $data->return = 'success';

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function store(Request $request) {
        try {

            $input = $request->all();
            $password = $input['password'];
            unset($input['password']);
            unset($input['password_confirmation']);
            unset($input['email']);
            unset($input['type']);

            // CRIA O USUÁRIO PARA ACESSAR COM O FORNECEDOR
            $user = new UserController();
            $user->register($request);
            $data = $this->model->create($input);

            $email = 'info@multihplic.com.br';
            $namemail = 'Novo cadastro Multihplic';

            $dataMail = [
                'socialName' => $request->get('socialName'),
                'name'          => $request->get('name'),
                'email'         => $request->get('email'),
                'password'      => $password,
            ];

            //RELACIONA O FORNECEDOR AO USUÁRIO
            $requestUser = User::where('email', '=', $request->get('email'))->first();
            $dataRel = ['user_id' => $requestUser->id, 'company_id' => $data->id];
            ProviderUser::create($dataRel);

            Mail::send('emails.provider.account', ['data' => $dataMail], function ($mensage) use ($email, $namemail, $request) {
                $mensage->from('info@multihplic.com.br', 'Multihplic - Suas vendas, seus ganhos');
                $mensage->to($request->get('email'), $namemail)->subject('Novo cadastro Multihplic');
            });

            $data->return = 'success';
            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function update(Request $request, $id) {
        try {

            $provider = $this->model->where('id', '=', $id)->first();
            $input = $request->all();
            $provider->update($input);
            $data = Provider::with('user.user')->where('id', '=', $id)->first();
            $data->return = 'success';
            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function destroy($id) {
        try {
            $provider = Provider::destroy($id);
            if ($provider) {
                $data = $this->successfulMessage(200, 'Successfully deleted', true,0, $provider);
            } else {
                $data = $this->notFoundMessage();
            }
            $data->return = 'success';
            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function list($situation, $status = null){

        try {
            if($situation == 'all') {
                $data = $this->model->where('situation', '<>', 'pending')->get();
            } else if ($situation != 'all' && $status != null) {
                $data = $this->model->where('situation', '=', $situation)->where('status' , '=', $status)->get();
            } else {
                $data = $this->model->where('situation', '=', $situation)->get();
            }

            $data->return = 'success';
            return response()->json($data);

        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function requestProducts($id){

        try {

            $data = [];
            // PEGA O ID DO FORNECEDOR
            $provider = ProviderUser::where('user_id', '=', $id)->first();

            $query = DB::table('provider_request_products AS prp')
                ->select('prp.amount', 'pp.*', 'sp.socialName', 'sp.url')
                ->selectRaw('(select url from image_products WHERE product_id = pp.id LIMIT 1) AS image')
                ->join('provider_products AS pp', 'prp.product_id', 'pp.id')
                ->join('shop_company AS sp', 'prp.shop_id', 'sp.id')
                ->where('prp.provider_id', '=', $provider->company_id)
                ->get();

            $data = (object) $data;
            $data->products = $query;
            $data->return = 'success';
            return response()->json($data);

        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

}
