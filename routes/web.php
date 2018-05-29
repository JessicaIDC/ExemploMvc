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
Route::get('/', ['uses' => 'Controller@homepage']);
Route::get('/america', ['uses' => 'Controller@america']);
Route::get('/africa', ['uses' => 'Controller@afica']);
Route::get('/europa', ['uses' => 'Controller@europa']);
Route::get('/asia', ['uses' => 'Controller@asia']);
Route::get('/oceania', ['uses' => 'Controller@oceania']);
Route::get('/imagens', ['uses' => 'Controller@imagens']);

