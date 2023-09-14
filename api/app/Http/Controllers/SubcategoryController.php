<?php

namespace App\Http\Controllers;

use App\ProviderUser;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
    public $model;

    public function __construct(Subcategory $model) {
        $this->model = $model;
    }

    public function list($id) {
        try {

            $company = ProviderUser::where('user_id', '=', $id)->first();
            $data = $this->model->where('company_id', '=', $company->company_id)->with('departament', 'category')->get();
            //$this->model->where('company_id', '=', $company->company_id)->get();
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

            $data = $this->model->create($input);

            $data->return = 'success';
            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function destroy($id) {
        try {
            $atribute = Subcategory::destroy($id);

            return $atribute;
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }
}
