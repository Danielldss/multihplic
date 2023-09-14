<?php

namespace App\Http\Controllers;

use App\ProviderUser;
use App\Atribute;
use App\Variation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class VariationController extends Controller
{
    public $model;

    public function __construct(Variation $model) {
        $this->model = $model;
    }

    public function list($id, $product_id) {
        try {

            $company = ProviderUser::where('user_id', '=', $id)->first();
            $data = $this->model->where('company_id', '=', $company->company_id)
                ->where('product_id', '=', $product_id)
                ->get();
            $data->return = 'success';

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function store(Request $request, $id, $product_id) {
        try {

            $input = $request->all();

            $input['value'] = $this->model->numerico($input['value']);
            $input['height'] = $this->model->numerico($input['height']);
            $input['width'] = $this->model->numerico($input['width']);
            $input['length'] = $this->model->numerico($input['length']);
            $input['weight'] = $this->model->numerico($input['weight']);
            $input['stock'] = $this->model->numerico($input['stock']);

            $company = ProviderUser::where('user_id', '=', $id)->first();
            $input['company_id'] = $company->company_id;
            $input['product_id'] = $product_id;

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
