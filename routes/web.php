<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
//Generate Application Key
$router->get('/key', function (){
    return Str::random(32);
});

//Auth
$router->post('/register', 'AuthController@register');
$router->post('/login', 'AuthController@login');
$router->get('/mailver', 'AuthController@mail');
$router->get('/login/extend', 'AuthController@extendLoginTime');
$router->get('/logout', 'AuthController@logout');

//User
$router->post('/user/changepassword', 'UserController@changePassword');

//Penyuluhan
$router->post('/penyuluhan/create', 'PenyuluhanController@create');
$router->post('/penyuluhan/update', 'PenyuluhanController@update');
$router->post('/penyuluhan/delete', 'PenyuluhanController@delete');
$router->get('/penyuluhan/show', 'PenyuluhanController@show');

//Audit
$router->post('/audit/create', 'AuditController@create');
$router->post('/audit/update', 'AuditController@update');
$router->post('/audit/delete', 'AuditController@delete');
$router->get('/audit/show', 'AuditController@show');
//Komoditas
$router->get('/komoditas/show', 'KomoditasController@getKomoditas');

//Wilayah
// $router->get('/wilayah/kecamatan-kelurahan-kelompok', 'WilayahController@getKecamatanKelurahanKelompok');
$router->get('/wilayah/kelurahan', 'WilayahController@getKelurahan');
$router->get('/wilayah/kecamatan', 'WilayahController@getKecamatan');

//Kelompok
$router->get('/kelompok/show', 'KelompokController@getKelompok');

//TimeUpdateTable
$router->get('/time-update-table/show', 'TimeUpdateTableController@getData');
