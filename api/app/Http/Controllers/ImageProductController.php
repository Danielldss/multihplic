<?php

namespace App\Http\Controllers;

use App\ProviderUser;
use App\ImageProducts;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ImageProductController extends Controller
{
    public $model;

    public function __construct(ImageProducts $model) {
        $this->model = $model;
    }

    public function list($product_id) {
        try {

            $data = $this->model->where('product_id', '=', $product_id)->get();
            $data->return = 'success';

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function store(Request $request, $product_id) {
        try {

            $input = $request->all();

            foreach ($input['image'] as $key => $image) {
                $data = $this->model->create(['url' => $image, 'product_id' => $product_id]);
            }

            $data->return = 'success';
            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }
}
