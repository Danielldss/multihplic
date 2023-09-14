<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;

class Shop_ShopController extends Controller
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

    public function list($type) {

        $segment = ($type == 'individuais')? 'individual' : 'representative';

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'shop/list/'.$segment, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $shops = (array) json_decode($result->getBody());

        if(isset($shops['status']) && $shops['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['shops'] = $shops;
        $data['title'] = 'Lojistas '. $type;
        return View::make(Session::get('type').'.lojista-lista', $data);
    }

    public function show($id) {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'shop/show/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $shop = (array) json_decode($result->getBody());

        if(isset($shop['status']) && $shop['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['shops'] = $shop;
        $data['title'] = 'Dados do fornecedor';
        return View::make(Session::get('type').'.fornecedor-ver', $data);
    }


}
