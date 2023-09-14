<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;

class AuthController extends Controller
{

    public $base_url;
    public $connection;
    public $client;

    public function __construct()
    {
        $this->base_url = 'http://api.multihplic.com.br/api/';
    }

    /**
     * Login Form
     */
    public function index() {

        if(Session::get('MultihplicAuth')){
            $typeUser = Session::get('user');
            return redirect('/'.$typeUser->type.'/painel');
        }

        // LEMBRAR LOGIN
        if(isset($_COOKIE['rememberLoginHash']) && isset($_COOKIE['rememberLogin'])){
            $data['rememberLogin'] = $_COOKIE['rememberLogin'];
            $data['rememberLoginEmail'] = $_COOKIE['rememberLoginEmail'];
        }

        $data['title'] = 'Login';
        return View::make('login', $data);
    }


    /**
     * Method for authenticate user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View|\Laravel\Lumen\Http\Redirector
     */
    public function login(Request $request) {

        $email = $request->get('email');
        $password = $request->get('password');

        $body = ['email' => $email, 'password' => $password];

        $this->client = new Client();
        $result = $this->client->request('POST', $this->base_url.'login', ['form_params' => $body]);

        $response = json_decode($result->getBody()->getContents());
        if (isset($response->token)) {
            #set Session
            Session::put('MultihplicAuth-token-user',$response->token);

            // VERIFICA OS DADOS DO USUÁRIO
            $requestUser =  $this->client->request('GET', $this->base_url.'user', [
                'headers' => [
                    'Authorization' => 'Bearer '.$response->token
                ]
            ]);

            $user = json_decode($requestUser->getBody());
            Session::put('user', $user->user);
            Session::put('MultihplicAuth', $response->token);
            return redirect('/'.$user->user->type.'/painel');

        } else {

            $result = $response;
            $data = $result;
            $error['status'] = 'error';
            $error['title'] = 'Falha na autenticação';
            $error['message'] = $result;

            unset($result);

            if(isset($data->message)){
                $error['message'] = $data->message;
            }

            $result['error'] = $error;
            $result['status'] = $error;

        }

        $result['title'] = 'Login';

        return View::make('login', $result);
    }

    /**
     * Logout User
     * @return \Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector
     */
    public function logout() {

        Session::flush();
//
//        //REMOVE KEEP LOGGED
//        setcookie('rememberLogin', '', -1);
//        setcookie('rememberLoginEmail', '', -1);
//        setcookie('rememberLoginPassword', '', -1);
        return redirect('/login');
    }

    /**
     * Remember-me
     */
    public function remember(Request $request){
        $data = null;

        if ($request->isMethod('post')) {
            $register = $this->apiRoute('remember')
                ->apiData($request)
                ->apiDone();

            $request->session()->flash('register', $register);
            return redirect('/lembrar-senha');
        }

        ##CHECK MESSAGES
        if($request->session()->has('register')) {
            $data['register'] = $this->toObject($request->session()->get('register'));
        }

        $configs = $this->apiRoute('ConfigurationsOffline')->apiDone();
        $data['read'] = $this->tratamentConfigs($configs);

        return View::make('loginRecovery', $data);

    }

    /**
     * Get Current User
     */
    static public function getUser(){
        return json_decode(Session::get('user'), true);
    }

}
