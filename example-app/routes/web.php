<?php

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    // return User::find(1);
    return Project::find(1)->with(['files','actions','users'])->get();
});
Route::get('/api/form-data/{box_id}', 'form3controller@index');
Route::post('/api/form-data', 'form3controller@store');
Route::get('/api/form-data/{id}', 'form3controller@show');
Route::put('/api/form-data/{id}', 'form3controller@update');
Route::delete('/api/form-data/{id}', 'form3controller@destroy');


