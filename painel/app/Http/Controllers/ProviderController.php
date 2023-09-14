<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;

class ProviderController extends Controller
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

    /**
     * @param  - Rota para a view
     * @return \Illuminate\Contracts\View\View
     */
    public function solicitation() {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'provider/list/pending/inactive', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $provider = (array) json_decode($result->getBody());

        if(isset($provider['status']) && $provider['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['providers'] = $provider;
        $data['title'] = 'Fornecedores';
        return View::make('admin.fornecedor-lista-solicitacao', $data);
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function add() {
        $data['return'] = '';
        $data['title'] = 'Cadastro de Fornecedores';
        return View::make('admin.fornecedor-cadastro', $data);
    }

    /**
     * @param Request $request - dados de cadastro [post]
     * @return \Illuminate\Contracts\View\View
     */
    public function store(Request $request) {

        $body = $request->all();
        unset($body['_token']);

        $this->client = new Client();
        $result = $this->client->request('POST', $this->base_url.'provider/add', [
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
            $data['return'] = ['status' => 'error', 'msg' => 'Erro ao tentar cadastrar fornecedor.'];
        }

        $data['title'] = 'Cadastro de Fornecedores';
        return View::make('admin.fornecedor-cadastro', $data);
    }

    /**
     * @param  - Rota para a view
     * @return \Illuminate\Contracts\View\View
     */
    public function list() {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'provider/list/all', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $provider = (array) json_decode($result->getBody());

        if(isset($provider['status']) && $provider['status'] == 'Token is Expired') {
            return redirect('/logout');
        }
        $data['providers'] = $provider;

        $data['title'] = 'Fornecedores';
        return View::make('admin.fornecedor-lista', $data);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws Exception\GuzzleException
     */
    public function show($id) {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'provider/show/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $provider = (array) json_decode($result->getBody());

        if(isset($provider['status']) && $provider['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['provider'] = $provider;
        $data['title'] = 'Dados do fornecedor';
        return View::make('admin.fornecedor-ver', $data);
    }

    /**
     * @param  - Rota para a view
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id) {
        $this->client = new Client();

        $result = $this->client->request('GET', $this->base_url.'provider/show/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $provider = (array) json_decode($result->getBody());
        if(isset($provider['status']) && $provider['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['provider'] = $provider;
        $data['title'] = 'Editar Fornecedor';
        return View::make('admin.fornecedor-editar', $data);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\View
     * @throws Exception\GuzzleException
     */
    public function update(Request $request, $id) {

        $body = $request->all();
        $this->client = new Client();
        $result = $this->client->request('POST', $this->base_url.'provider/update/'.$id, [
            'form_params' => $body,
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $provider = (array) json_decode($result->getBody());

        if(isset($provider['status']) && $provider['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['provider'] = $provider;
        $data['title'] = 'Editar Fornecedor';
        return View::make('admin.fornecedor-editar', $data);
    }

    /**
     * @param $id - ID DO FORNECEDOR
     */
    public function destroy($id) {

    }

    public function requestProduct() {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'provider/requestProducts/'.$this->user->id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $products = json_decode($result->getBody(), true);

        if(isset($products['status']) && $products['status'] == 'Token is Expired') {
            return redirect('/logout');
        }
        $data['products'] = $products['products'];
        $data['title'] = 'Cadastro de lojistas';
        return View::make('provider.solicitacao-produtos', $data);
    }
}
