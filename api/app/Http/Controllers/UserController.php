<?php

namespace App\Http\Controllers;

use App\ShopUser;
use App\User;
use App\ProviderUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 200);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 200);
        }

        return response()->json(compact('token'));
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'type' => 'required|string',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 200);
        }

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'type' => $request->get('type')
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }

    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        $response = response()->json(compact('user'));
        User::where('id', '=', $response->original['user']->id)->update(['updated_at' => date('Y-m-d H:i:s')]);

        return $response;
    }

    public function list($type) {
        try {
            $data = User::where('type', '=', $type)->get();
            $data->return = 'success';
            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function show($id) {
        try {
            $data = User::where('id', '=', $id)->first();
            $data->return = 'success';
            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function destroy($id) {
        try {
            $user = User::destroy($id);
            if ($user) {
                $data = $this->successfulMessage(200, 'Successfully deleted', true,0, $user);
            } else {
                $data = $this->notFoundMessage();
            }

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }

    public function update(Request $request, $id) {
        try {

            $user = User::where('id', '=', $id)->first();
            $input = $request->all();

            if(isset($input['password']) && $input['password'] != '') {
                $input['password'] = Hash::make($request->get('password'));
            } else {
                unset($input['password']);
            }

            $user->update($input);
            $data = User::where('id', '=', $id)->first();
            $data->return = 'success';

            return response()->json($data);
        } catch (Exception $e) {
            return $this->returnErrorException($e, true);
        }
    }


    private function notFoundMessage()
    {
        return [
            'code' => 404,
            'message' => 'Note not found',
            'status' => false,
        ];
    }
    private function successfulMessage($code, $message, $status, $count, $payload)
    {
        return [
            'code' => $code,
            'message' => $message,
            'status' => $status,
            'count' => $count,
            'data' => $payload,
        ];
    }

}
