<?php

namespace App\Http\Controllers;

use App\Shop;
use App\ShopUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\ProviderUser;
use App\ShopProvider;

class ShopController extends Controller
{

    public $model;

    public function __construct(Shop $model) {
        $this->model = $model;
    }

    public function show($id) {
        try {

            $data = Shop::with('user.user')->where('id', '=', $id)->first();
            $data->return = 'success';

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function list($segment){

        try {

            $data = $this->model->where('segment', '=', $segment)->get();
            $data->return = 'success';
            return response()->json($data);

        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function listShopProvider($segment, $providerId){

        try {

            if($segment == 'individual') {
                $data = DB::table('shop_company AS sc')->select('sc.*')
                    ->join('shop_rel_provider AS srp', 'sc.id', '=', 'srp.shop_id')
                    ->join('provider_user_company AS puc', 'srp.provider_id', 'puc.company_id')
                    ->where('sc.category', '=', 'individual')
                    ->where('puc.user_id', '=', $providerId)
                    ->get();
            } else {
                $data = DB::table('shop_company AS sc')->select('sc.*')
                    ->join('shop_rel_provider AS srp', 'sc.id', '=', 'srp.shop_id')
                    ->join('provider_user_company AS puc', 'srp.provider_id', 'puc.company_id')
                    ->where('sc.category', '=', 'representative')
                    ->where('puc.user_id', '=', $providerId)
                    ->get();
            }

            $data->return = 'success';
            return response()->json($data);

        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function store(Request $request) {
        try {

            $input = $request->all();

            $provider = ProviderUser::where('user_id', '=', $input['provider_id'])->first();

            $password = $input['password'];
            unset($input['password']);
            unset($input['password_confirmation']);
            unset($input['type']);
            unset($input['provider_id']);

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
            $dataRel = ['user_id' => $requestUser->id, 'shop_id' => $data->id];
            ShopUser::create($dataRel);
            ShopProvider::create(['shop_id' => $data->id, 'provider_id' => $provider->company_id]);

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


}
