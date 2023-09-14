<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;

class ConfigurationsController extends Controller
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

    public function themeAdd() {
        $data['title'] = 'Cadastro de temas';
        return View::make($this->user->type.'.temas-cadastro', $data);
    }

    public function themeList() {
        $data['title'] = 'Lista de temas';
        return View::make($this->user->type.'.temas-lista', $data);
    }
}
