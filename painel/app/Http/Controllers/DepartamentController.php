<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;

class DepartamentController extends Controller
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

    public function list() {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.$this->user->type.'/product/departament/list/'.$this->user->id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $departaments = (array) json_decode($result->getBody());

        if(isset($departaments['status']) && $departaments['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['departaments'] = $departaments;
        $data['title'] = 'Departamentos de produtos';
        return View::make($this->user->type.'.departamento-lista', $data);
    }

    public function add() {
        $data['title'] = 'Departamentos de produtos';
        return View::make($this->user->type.'.departamento-cadastro', $data);
    }

    public function store(Request $request) {

        $body = $request->all();
        unset($body['_token']);

        $this->client = new Client();
        $result = $this->client->request('POST', $this->base_url.$this->user->type.'/product/departament/add/'.$this->user->id, [
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
            $data['return'] = ['status' => 'error', 'msg' => 'Erro ao tentar cadastrar departamento.'];
        }

        return redirect('/'.$this->user->type.'/product/departament-add');
    }

    public function delete($id) {

        $this->client = new Client();
        $result = $this->client->request('DELETE', $this->base_url.$this->user->type.'/product/departament/delete/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        return redirect('/'.$this->user->type.'/product/departament-list');
    }


}
