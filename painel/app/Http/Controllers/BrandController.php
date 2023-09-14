<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;


class BrandController extends Controller
{
    public $base_url;
    public $connection;
    public $client;
    public $user;
    public $url_image;

    public function __construct()
    {
        $this->base_url = 'http://api.multihplic.com.br/api/';
        $this->url_image = '//painel.multihplic.com.br/images/brands/';
        $this->middleware(function ($request, $next) {
            $this->user = Session::get('user');
            return $next($request);
        });
    }

    public function list() {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.$this->user->type.'/product/brand/list/'.$this->user->id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $brands = (array) json_decode($result->getBody());

        if(isset($brands['status']) && $brands['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['brands'] = $brands;
        $data['title'] = 'Atributos e variações';
        return View::make($this->user->type.'.marcas-lista', $data);
    }

    public function add() {
        $data['title'] = 'Atributos e variações';
        return View::make($this->user->type.'.marcas-cadastro', $data);
    }

    public function store(Request $request) {

        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/brands'), $imageName);

        $body = $request->all();
        $body['image'] = $this->url_image.$imageName;

        unset($body['_token']);

        $this->client = new Client();
        $result = $this->client->request('POST', $this->base_url.$this->user->type.'/product/brand/add/'.$this->user->id, [
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
            $data['return'] = ['status' => 'error', 'msg' => 'Erro ao tentar cadastrar categorias.'];
        }

        return redirect('/'.$this->user->type.'/product/brand-add');
    }

    public function delete($id) {

        $this->client = new Client();
        $result = $this->client->request('DELETE', $this->base_url.$this->user->type.'/product/brand/delete/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        return redirect('/'.$this->user->type.'/product/brand-list');
    }
}
