<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;

class VariationController extends Controller
{
    public $base_url;
    public $connection;
    public $client;

    public function __construct()
    {
        $this->base_url = 'http://api.multihplic.com.br/api/';
        $this->middleware(function ($request, $next) {
            $this->user = Session::get('user');
            return $next($request);
        });
    }

    public function list($product_id) {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'provider/product/variation/list/'.$this->user->id.'/'.$product_id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $variations = (array) json_decode($result->getBody());

        if(isset($variations['status']) && $variations['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['variations'] = $variations;
        $data['product_id'] = $product_id;
        $data['title'] = 'Atributos e variações';
        return View::make($this->user->type.'.variacoes-lista', $data);
    }

    public function add($product_id) {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.$this->user->type.'/product/atribute/list/'.$this->user->id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $atributes = (array) json_decode($result->getBody());

        if(isset($atributes['status']) && $atributes['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['atributes'] = $atributes;
        $data['product_id'] = $product_id;
        $data['title'] = 'Atributos e variações';
        return View::make($this->user->type.'.variacoes-cadastro', $data);
    }

    public function store(Request $request, $product_id) {

        $body = $request->all();
        unset($body['_token']);

        $this->client = new Client();
        $result = $this->client->request('POST', $this->base_url.$this->user->type.'/product/variation/add/'.$this->user->id.'/'.$product_id, [
            'form_params' => $body,
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $response = json_decode($result->getBody()->getContents());

        if(isset($response->status) && $response->status == 'Token is Expired') {
            return redirect('/logout');
        }

        if(isset($response->name)) {
            $data['return'] = ['status' => 'success', 'msg' => 'Cadastro efetuado com sucesso!'];
        } else {
            $data['return'] = ['status' => 'error', 'msg' => 'Erro ao tentar cadastrar atributo.'];
        }

        return redirect('/'.$this->user->type.'/product/variation-add/'.$product_id);
    }

    public function delete($id, $product_id) {

        $this->client = new Client();
        $result = $this->client->request('DELETE', $this->base_url.$this->user->type.'/product/variation/delete/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        return redirect('/'.$this->user->type.'/product/variation-list/'.$product_id);
    }

}
