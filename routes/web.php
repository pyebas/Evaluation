<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/index', 'EvaluationsController@index')->name('evaluations.index');
Route::get('/agent/{id}', 'EvaluationsController@show')->name('evaluations.show');
Route::get('/evaluation/{id}', 'EvaluationsController@create')->name('evaluations.evalue');
Route::post('/evaluate', 'EvaluationsController@evaluation')->name('evaluations.evaluate');
Route::get('/essentiels', 'EvaluationsController@listes')->name('essentiels');
Route::get('/essentiels/edit', function(){
    return view('edit_essential');
})->name('edit.essentiels');