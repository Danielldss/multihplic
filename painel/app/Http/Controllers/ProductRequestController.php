<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;

class ProductRequestController extends Controller
{

    public $base_url;
    public $connection;
    public $client;
    public $user;
    public $url_image;

    public function __construct()
    {
        $this->base_url = 'http://api.multihplic.com.br/api/';
        $this->url_image = '//painel.multihplic.com.br/images/products/';
        $this->middleware(function ($request, $next) {
            $this->user = Session::get('user');
            return $next($request);
        });
    }

    public function list() {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'shop/product/list/'.$this->user->id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $resultDepartaments = $this->client->request('GET', $this->base_url.'provider/product/departament/list/'.$this->user->id.'/shop', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $resultBrands = $this->client->request('GET', $this->base_url.'provider/product/brand/list/'.$this->user->id.'/shop', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $resultAtribute = $this->client->request('GET', $this->base_url.'provider/product/atribute/list/'.$this->user->id.'/shop', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $atributes = (array) json_decode($resultAtribute->getBody());
        $brands = (array) json_decode($resultBrands->getBody());
        $departaments = (array) json_decode($resultDepartaments->getBody());
        $products = (array) json_decode($result->getBody());

        $data['products'] = $products;
        $data['departaments'] = $departaments;
        $data['atributes'] = $atributes;
        $data['brands'] = $brands;
        $data['title'] = 'Lista de produtos';
        return View::make($this->user->type.'.produtos-lista', $data);
    }

    public function requestList() {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'shop/product/list/'.$this->user->id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $resultDepartaments = $this->client->request('GET', $this->base_url.'provider/product/departament/list/'.$this->user->id.'/shop', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $resultBrands = $this->client->request('GET', $this->base_url.'provider/product/brand/list/'.$this->user->id.'/shop', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $resultAtribute = $this->client->request('GET', $this->base_url.'provider/product/atribute/list/'.$this->user->id.'/shop', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $atributes = (array) json_decode($resultAtribute->getBody());
        $brands = (array) json_decode($resultBrands->getBody());
        $departaments = (array) json_decode($resultDepartaments->getBody());
        $products = (array) json_decode($result->getBody());

        $data['products'] = $products;
        $data['departaments'] = $departaments;
        $data['atributes'] = $atributes;
        $data['brands'] = $brands;
        $data['title'] = 'Solicitação de produtos';
        return View::make($this->user->type.'.solicitacao-produtos', $data);
    }

    public function request() {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'shop/product/list/'.$this->user->id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $resultDepartaments = $this->client->request('GET', $this->base_url.'provider/product/departament/list/'.$this->user->id.'/shop', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $resultBrands = $this->client->request('GET', $this->base_url.'provider/product/brand/list/'.$this->user->id.'/shop', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $resultAtribute = $this->client->request('GET', $this->base_url.'provider/product/atribute/list/'.$this->user->id.'/shop', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $atributes = (array) json_decode($resultAtribute->getBody());
        $brands = (array) json_decode($resultBrands->getBody());
        $departaments = (array) json_decode($resultDepartaments->getBody());
        $products = (array) json_decode($result->getBody());

        $data['products'] = $products;
        $data['departaments'] = $departaments;
        $data['atributes'] = $atributes;
        $data['brands'] = $brands;
        $data['title'] = 'Solicitação de produtos';
        return View::make($this->user->type.'.solicitacao-produtos', $data);
    }
}
