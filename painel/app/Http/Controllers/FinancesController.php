<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;

class FinancesController extends Controller
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

    public function extract() {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'finances/extract', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $finances = (array) json_decode($result->getBody());

        if(isset($finances['status']) && $finances['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['finances'] = $finances;
        $data['title'] = 'Extrato';
        return View::make($this->user->type.'.financeiro-extrato', $data);
    }

    public function rescue() {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'finances/rescue', [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $finances = (array) json_decode($result->getBody());

        if(isset($finances['status']) && $finances['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['finances'] = $finances;

        $data['title'] = 'Resgates';
        return View::make($this->user->type.'.financeiro-resgate', $data);
    }

    public function reports() {
        $data['title'] = 'Relatórios';
        return View::make($this->user->type.'.financeiro-relatorios', $data);
    }

}
