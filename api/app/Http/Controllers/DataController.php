<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function open()
    {
        $data = "Esses dados estão abertos e podem ser acessados ​​sem que o cliente seja autenticado";
        return response()->json(compact('data'),200);

    }

    public function closed()
    {
        $data = "Somente usuários autorizados podem ver isso";
        return response()->json(compact('data'),200);
    }
}
