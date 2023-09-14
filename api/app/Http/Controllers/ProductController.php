<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProviderUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public $model;

    public function __construct(Product $model) {
        $this->model = $model;
    }

    public function list($id) {
        try {

            $company = ProviderUser::where('user_id', '=', $id)->first();
            $data = $this->model->with(['images', 'departament', 'departament.category', 'departament.category.subcategory'])
                ->where('company_id', '=', $company->company_id)
                ->get();

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
            $company = ProviderUser::where('user_id', '=', $id)->first();
            $input['company_id'] = $company->company_id;

            $input['value'] = $this->model->numerico($input['value']);
            $input['promotion_value'] = $this->model->numerico($input['promotion_value']);
            $input['discount'] = $this->model->numerico($input['discount']);

            $input['weight'] = $this->model->numerico($input['weight']);
            $input['height'] = $this->model->numerico($input['height']);
            $input['width'] = $this->model->numerico($input['width']);
            $input['length'] = $this->model->numerico($input['length']);

            $data = $this->model->create($input);

            $data->return = 'success';
            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function destroy($id) {
        try {
            $atribute = Product::destroy($id);

            return $atribute;
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

}
