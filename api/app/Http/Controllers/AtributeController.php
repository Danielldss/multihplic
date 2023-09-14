<?php

namespace App\Http\Controllers;

use App\ProviderUser;
use App\Atribute;
use App\ShopProvider;
use App\ShopUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AtributeController extends Controller
{
    public $model;

    public function __construct(Atribute $model) {
        $this->model = $model;
    }

    public function list($id, $type = null) {
        try {

            if($type != null && $type == 'shop') {
                $shop = ShopUser::where('user_id', '=', $id)->first();
                $company = ShopProvider::where('shop_id', '=', $shop->shop_id)->first();
                $data = $this->model->with('variation')->where('company_id', '=', $company->provider_id)->get();
            } else {
                $company = ProviderUser::where('user_id', '=', $id)->first();
                $data = $this->model->with('variation')->where('company_id', '=', $company->company_id)->get();
            }

            $data->return = 'success';

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function store(Request $request, $id) {
        try {

            $input = $request->all();
            $company = ProviderUser::where('user_id', '=', $id)->first();
            $input['company_id'] = $company->company_id;

            $data = $this->model->create($input);

            $data->return = 'success';
            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function destroy($id) {
        try {
            $atribute = Atribute::destroy($id);

            return $atribute;
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

}