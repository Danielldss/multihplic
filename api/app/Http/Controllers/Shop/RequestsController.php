<?php

namespace App\Http\Controllers;

use App\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class Shop_RequestsController extends Controller
{

    public $model;

    public function __construct(Requests $model) {
        $this->model = $model;
    }

    public function show($id) {
        try {

            $data = Requests::where('id', '=', $id)->first();
            $data->return = 'success';

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function list(){

        try {

            $data = $this->model->get();
            $data->return = 'success';
            return response()->json($data);

        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function search(Request $request) {
        try {

            $data = $this->model->get();
            $data->return = 'success';
            return response()->json($data);

        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

}
