<?php

namespace App\Http\Controllers;

use App\Brand;
use App\ShopUser;
use App\ShopProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class Shop_BrandController extends Controller
{
    public $model;

    public function __construct(Brand $model) {
        $this->model = $model;
    }

    public function list($id) {
        try {

            $shop = ShopUser::where('user_id', '=', $id)->first();
            $company = ShopProvider::where('shop_id', '=', $shop->shop_id)->first();
            $data = $this->model->where('company_id', '=', $company->provider_id)->get();
            $data->return = 'success';

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

}
