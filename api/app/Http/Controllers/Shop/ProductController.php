<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProviderUser;
use App\ShopUser;
use App\ShopProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class Shop_ProductController extends Controller
{

    public $model;

    public function __construct(Product $model) {
        $this->model = $model;
    }

    public function list($id){

        try {

            $shop = ShopUser::where('user_id', '=', $id)->first();
            $company = ShopProvider::where('shop_id', '=', $shop->shop_id)->first();
            $data = $this->model->with(['images', 'departament', 'departament.category', 'departament.category.subcategory'])
                ->where('company_id', '=', $company->company_id)
                ->get();

            $data->return = 'success';
            return response()->json($data);

        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function request($id){

        try {

            $data = $this->model->get();
            $data->return = 'success';
            return response()->json($data);

        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }


}
