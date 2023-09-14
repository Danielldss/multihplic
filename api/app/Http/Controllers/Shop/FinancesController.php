<?php

namespace App\Http\Controllers;

use App\Finances;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Shop_FinancesController extends Controller
{
    public $model;

    public function __construct(Finances $model) {
        $this->model = $model;
    }

    public function extract() {
        try {

            $data = $this->model->get();
            $data->return = 'success';

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function rescue() {
        try {

            $data = $this->model->get();
            $data->return = 'success';

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }
}
