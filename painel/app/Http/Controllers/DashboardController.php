<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function show() {
        $data['title'] = 'Dashboard';
        return View::make('admin.painel', $data);
    }

    public function provider() {
        $data['title'] = 'Dashboard';
        return View::make('provider.painel', $data);
    }

    public function shop() {
        $data['title'] = 'Dashboard';
        return View::make('shop.painel', $data);
    }

}
