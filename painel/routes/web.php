<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'AuthController@index');
Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@login');
Route::get('/logout', 'AuthController@logout');


Route::group(['middleware' => ['jwt.verify']], function() {
    // ADMINISTRADOR
    Route::prefix('admin')->group(function () {
        Route::get('/', 'DashboardController@show');
        Route::get('/painel', 'DashboardController@show');

        // FORNECEDORES
        Route::get('/fornecedores/solicitacao', 'ProviderController@solicitation');
        Route::get('/fornecedores/cadastro', 'ProviderController@add');
        Route::post('/fornecedor/cadastro', 'ProviderController@store');
        Route::get('/fornecedores/lista', 'ProviderController@list');
        Route::get('/fornecedor/editar/{id}', 'ProviderController@edit');
        Route::post('/fornecedor/update/{id}', 'ProviderController@update');
        Route::get('/fornecedor/ver/{id}', 'ProviderController@show');

        // LOJISTAS
        Route::get('/lojistas/{type}', 'Shop_ShopController@list');
        Route::get('/lojistas/ver/{id}', 'Shop_ShopController@show');

        // PEDIDOS
        Route::get('/pedidos', 'RequestsController@list');
        Route::post('/pedidos', 'RequestsController@search'); // busca

        // FINANCEIRO
        Route::get('/financeiro/extrato', 'FinancesController@extract');
        Route::get('/financeiro/resgate', 'FinancesController@rescue');
        Route::get('/financeiro/relatorios', 'FinancesController@reports');

        // USUÁRIOS
        Route::get('/usuario/cadastro', 'UsersController@add');
        Route::post('/usuario/cadastro', 'UsersController@store');
        Route::get('/usuarios', 'UsersController@list');
        Route::get('/usuario/delete/{id}', 'UsersController@delete');
        Route::get('/perfil', 'UsersController@profile');
        Route::post('/perfil', 'UsersController@update');

        // CONFIGURAÇÕES DE TEMAS
        Route::get('/tema/cadastro', 'ConfigurationsController@themeAdd');
        Route::post('/tema/cadastro', 'ConfigurationsController@themeAdd');
        Route::get('/temas', 'ConfigurationsController@themeList');

   });

    // FORNECEROR
    Route::prefix('provider')->group(function () {
        Route::get('/', 'DashboardController@provider');
        Route::get('/painel', 'DashboardController@provider');

        // LOJISTAS
        Route::get('/shop/list/{type}', 'Shop_MainController@list');
        Route::get('/shop/ver/{id}', 'Shop_MainController@show');
        Route::get('/shop/add', 'Shop_MainController@add');
        Route::post('/shop/add', 'Shop_MainController@store');

        //PROVIDER
        Route::get('/shop/request-product', 'ProviderController@requestProduct');

        Route::get('/product/atribute-list', 'AtributeController@list');
        Route::get('/product/atribute-add', 'AtributeController@add');
        Route::post('/product/atribute-add', 'AtributeController@store');
        Route::get('/product/atribute-delete/{id}', 'AtributeController@delete');

        Route::get('/product/variation-list', 'VariationController@list');
        Route::get('/product/variation-add', 'VariationController@add');
        Route::post('/product/variation-add', 'VariationController@store');
        Route::get('/product/variation-delete/{id}', 'VariationController@delete');

        Route::get('/product/departament-list', 'DepartamentController@list');
        Route::get('/product/departament-add', 'DepartamentController@add');
        Route::post('/product/departament-add', 'DepartamentController@store');
        Route::get('/product/departament-delete/{id}', 'DepartamentController@delete');

        Route::get('/product/category-list', 'CategoryController@list');
        Route::get('/product/category-add', 'CategoryController@add');
        Route::post('/product/category-add', 'CategoryController@store');
        Route::get('/product/category-delete/{id}', 'CategoryController@delete');

        Route::get('/product/category-list', 'SubcategoryController@list');
        Route::get('/product/category-add', 'SubcategoryController@add');
        Route::post('/product/category-add', 'SubcategoryController@store');
        Route::get('/product/category-delete/{id}', 'SubcategoryController@delete');

        Route::get('/product/brand-list', 'BrandController@list');
        Route::get('/product/brand-add', 'BrandController@add');
        Route::post('/product/brand-add', 'BrandController@store');
        Route::get('/product/brand-delete/{id}', 'BrandController@delete');

        Route::get('/product/list', 'ProductController@list');
        Route::get('/product/add', 'ProductController@add');
        Route::get('/product/images/{id}', 'ProductController@images');
        Route::post('/product/images/{id}', 'ProductController@upload');
        Route::post('/product/add', 'ProductController@store');
        Route::get('/product/delete/{id}', 'ProductController@delete');

        // PEDIDOS
        Route::get('/pedidos', 'RequestsController@list');
        Route::post('/pedidos', 'RequestsController@search'); // busca

        // FINANCEIRO
        Route::get('/financeiro/extrato', 'FinancesController@extract');
        Route::get('/financeiro/resgate', 'FinancesController@rescue');
        Route::get('/financeiro/relatorios', 'FinancesController@reports');

        // USUÁRIOS
        Route::get('/usuario/cadastro', 'UsersController@add');
        Route::post('/usuario/cadastro', 'UsersController@store');
        Route::get('/usuarios', 'UsersController@list');
        Route::get('/usuario/delete/{id}', 'UsersController@delete');
        Route::get('/perfil', 'UsersController@profile');
        Route::post('/perfil', 'UsersController@update');

        // CONFIGURAÇÕES DE TEMAS
        Route::get('/temas', 'ConfigurationsController@themeList');

    });

    // LOJISTA
    Route::prefix('shop')->group(function () {
        Route::get('/', 'DashboardController@shop');
        Route::get('/painel', 'DashboardController@shop');

        //CUSTOMERS
        Route::get('/customers', 'CustomerController@list');
        Route::get('/customers/bonus', 'CustomerController@bonus');

        //PROVIDER
        Route::get('/request-product', 'ProviderController@requestProduct');

        Route::get('/product/atribute-list', 'AtributeController@list');
        Route::get('/product/atribute-add', 'AtributeController@add');
        Route::post('/product/atribute-add', 'AtributeController@store');
        Route::get('/product/atribute-delete/{id}', 'AtributeController@delete');

        Route::get('/product/variation-list', 'VariationController@list');
        Route::get('/product/variation-add', 'VariationController@add');
        Route::post('/product/variation-add', 'VariationController@store');
        Route::get('/product/variation-delete/{id}', 'VariationController@delete');

        Route::get('/product/departament-list', 'DepartamentController@list');
        Route::get('/product/departament-add', 'DepartamentController@add');
        Route::post('/product/departament-add', 'DepartamentController@store');
        Route::get('/product/departament-delete/{id}', 'DepartamentController@delete');

        Route::get('/product/category-list', 'CategoryController@list');
        Route::get('/product/category-add', 'CategoryController@add');
        Route::post('/product/category-add', 'CategoryController@store');
        Route::get('/product/category-delete/{id}', 'CategoryController@delete');

        Route::get('/product/brand-list', 'BrandController@list');
        Route::get('/product/brand-add', 'BrandController@add');
        Route::post('/product/brand-add', 'BrandController@store');
        Route::get('/product/brand-delete/{id}', 'BrandController@delete');

        Route::get('/products/list', 'ProductRequestController@list');
        Route::get('/products/request', 'ProductRequestController@requestList');
        Route::post('/products/request', 'ProductRequestController@request');

        // PEDIDOS
        Route::get('/pedidos', 'RequestsController@list');
        Route::post('/pedidos', 'RequestsController@search'); // busca

        // RELATORIOS
        Route::get('/reports/{type}', 'RepostsController@list');

        // FINANCEIRO
        Route::get('/finance/extract', 'FinancesController@extract');
        Route::get('/finance/rescue', 'FinancesController@rescue');

        // USUÁRIOS
        Route::get('/usuario/cadastro', 'UsersController@add');
        Route::post('/usuario/cadastro', 'UsersController@store');
        Route::get('/usuarios', 'UsersController@list');
        Route::get('/usuario/delete/{id}', 'UsersController@delete');
        Route::get('/perfil', 'UsersController@profile');
        Route::post('/perfil', 'UsersController@update');

        // CONFIGURAÇÕES DE TEMAS
        Route::get('/theme/list', 'ConfigurationsController@themeList');

    });

    //AJAX JQUERY FUNCTION
    Route::post('ajax', function(\Illuminate\Http\Request $request){

        $client = new \GuzzleHttp\Client();

        if($request->has('_url') && $request->has('_method')){
            //ROUTE SPECIFICATION
            $url = '//api.multihplic.com.br/api/'.$request->input('_url');
            $method = $request->input('_method');
            $all = $request->has('_all')? $request->all() : [];

            switch(strtolower($method)){
                case 'put':
                    $request = $request->all();
                    break;

                case 'delete':
                    $request = $request->all();
                    break;
            }

            $result = $client->request($method, $url, [
                'form_params' => $request->all(),
                'headers' => [
                    'Authorization' => 'Bearer '.Session::get('MultihplicAuth')
                ]
            ]);

            $response = json_decode($result->getBody()->getContents());

            $data = (array) json_decode($result->getBody());

            return response()->json($data);
        }else{
            return response()->json(['status' => 'error', 'msg' => 'Você deve especificar os paramestros: _gs_url e _gs_method']);
        }

    });

});
