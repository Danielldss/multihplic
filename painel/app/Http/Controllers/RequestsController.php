<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;

class RequestsController extends Controller
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
        $result = $this->client->request('GET', $this->base_url.'requests', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $requests = (array) json_decode($result->getBody());

        if(isset($requests['status']) && $requests['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['requests'] = $requests;
        $data['title'] = 'Pedidos';
        return View::make($this->user->type.'.pedidos', $data);
    }

    public function search(Request $request) {

        $body = $request->all();
        $this->client = new Client();

        $result = $this->client->request('POST', $this->base_url.'requests', [
            'form_params' => $body,
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $requests = (array) json_decode($result->getBody());

        if(isset($requests['status']) && $requests['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['requests'] = $requests;
        $data['title'] = 'Pedidos';
        return View::make($this->user->type.'.pedidos', $data);
    }

}
