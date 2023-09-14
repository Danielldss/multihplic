<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception;
use GuzzleHttp\Client;

class UsersController extends Controller
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

    public function add() {
        $data['title'] = 'Cadastro de usuários';
        return View::make($this->user->type.'.usuario-cadastro', $data);
    }

    public function store(Request $request) {

        $body = $request->all();
        unset($body['_token']);

        $this->client = new Client();
        $result = $this->client->request('POST', $this->base_url.'user/register', [
            'form_params' => $body,
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $response = json_decode($result->getBody()->getContents());

        if(isset($response->status) && $response->status == 'Token is Expired') {
            return redirect('/logout');
        }

        if(isset($response->user->name)) {
            $data['return'] = ['status' => 'success', 'msg' => 'Cadastro efetuado com sucesso!'];
        } else {
            $response = json_decode($response);
            foreach ($response as $res){

                if(isset($res[0]) && $res[0] == 'The email has already been taken.'){
                    $data['return'] = ['status' => 'error', 'msg' => 'O email já foi cadastrado!'];
                }

                if(isset($res[0]) && $res[0] == 'The password confirmation does not match.'){
                    $data['return'] = ['status' => 'error', 'msg' => 'A confirmação da senha não corresponde.'];
                }

                if(isset($res[0]) && $res[0] == 'The password must be at least 6 characters.'){
                    $data['return'] = ['status' => 'error', 'msg' => 'A senha deve ter pelo menos 6 caracteres.'];
                }


            }
        }

        $data['title'] = 'Cadastro de usuários';
        return View::make($this->user->type.'.usuario-cadastro', $data);
    }

    public function profile() {

        $id = Session::get('user')->id;

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'user/me/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $user = (array) json_decode($result->getBody());

        if(isset($user['status']) && $user['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['user'] = $user;
        $data['title'] = 'Minha conta';
        return View::make($this->user->type.'.usuario-perfil', $data);
    }

    public function update(Request  $request) {

        $id = Session::get('user')->id;
        $input = $request->all();

        $this->client = new Client();
        $result = $this->client->request('POST', $this->base_url.'user/update/'.$id, [
            'form_params' => $input,
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $user = (array) json_decode($result->getBody());

        if(isset($user['status']) && $user['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        return redirect('/'.$this->user->type.'/perfil');
    }

    public function list() {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'user/'.$this->user->type, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $users = (array) json_decode($result->getBody());

        if(isset($users['status']) && $users['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        $data['users'] = $users;
        $data['title'] = 'Lista de usuários';
        return View::make($this->user->type.'.usuario-lista', $data);
    }

    public function delete($id) {

        $this->client = new Client();
        $result = $this->client->request('GET', $this->base_url.'user/delete' . $id, [
            'headers' => [
                'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
            ]
        ]);

        $users = (array) json_decode($result->getBody());

        if(isset($users['status']) && $users['status'] == 'Token is Expired') {
            return redirect('/logout');
        }

        return redirect('/'.$this->user->type.'/usuarios');
    }
}
