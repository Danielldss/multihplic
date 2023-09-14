<?php

namespace App\Http\Controllers;

use App\ShopUser;
use App\Category;
use App\ShopProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class Shop_CategoryController extends Controller
{
    public $model;

    public function __construct(Category $model) {
        $this->model = $model;
    }

    public function list($id) {
        try {

            $shop = ShopUser::where('user_id', '=', $id)->first();
            $company = ShopProvider::where('shop_id', '=', $shop->shop_id)->first();
            $data = $this->model->with('departament')->where('company_id', '=', $company->company_id)->get();
            $data->return = 'success';

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function store(Request $request, $id) {
        try {

            $input = $request->all();

            $input['slug'] = $this->model->slugify($input['name']);

            $company = ShopUser::where('user_id', '=', $id)->first();
            $input['shop_id'] = $company->shop_id;

            $data = $this->model->create($input);

            $data->return = 'success';
            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function destroy($id) {
        try {
            $atribute = Category::destroy($id);

            return $atribute;
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }
}
