<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;

class RepostsController extends Controller
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

        switch ($type) {
            case 'sales':
                $page = 'vendas';
                break;
            case 'customers':
                $page = 'clientes';
                break;
            case 'products':
                $page = 'produtos';
                break;
        }

        $data['title'] = 'Relatórios';
        return View::make($this->user->type.'.relatorios-'.$page, $data);
    }


}
