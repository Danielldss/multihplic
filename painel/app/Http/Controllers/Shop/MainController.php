<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;

class Shop_MainController extends Controller
{

    public $base_url;
    public $connection;
    public $client;
    public $user;

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
        $result = $this->client->request('GET', $this->base_url.'shop/provider/list/'.$segment.'/'.$this->user->id, [
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
        return View::make($this->user->type.'.lojista-lista', $data);
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
        return View::make($this->user->type.'.lojista-ver', $data);
    }

    public function add() {
        $data['title'] = 'Cadastro de lojistas';
        return View::make('provider.lojista-cadastro', $data);
    }

    public function store(Request $request) {

        $body = $request->all();
        unset($body['_token']);
        $body['provider_id'] = $this->user->id;

        $this->client = new Client();
        $result = $this->client->request('POST', $this->base_url.'shop/add', [
            'form_params' => $body,
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $response = json_decode($result->getBody()->getContents());

        if(isset($response->status) && $response->status == 'Token is Expired') {
            return redirect('/logout');
        }

        if(isset($response->socialName)) {
            $data['return'] = ['status' => 'success', 'msg' => 'Cadastro efetuado com sucesso!'];
        } else {
            $data['return'] = ['status' => 'error', 'msg' => 'Erro ao tentar cadastrar lojista.'];
        }

        $data['title'] = 'Cadastro de lojistas';
        return View::make('provider.lojista-cadastro', $data);
    }

}
