<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\DmaicProjectController;
use App\Http\Controllers\fullcalanderController;
use App\Http\Controllers\usersController;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Multistepform;



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


Route::get('actions', [ActionController::class, 'index'])->name('actions.index');

Route::get('/', function () {
    return view('welcome');
    // return User::find(1);
    // return Project::with(['files','actions','users'])->get();
});
Route::get('/new-project', function () {
    return view('new-project');
})->name('new-project');








// Route::get('/api/form-data/{box_id}', 'form3controller@index');
// Route::post('/api/form-data', 'form3controller@store');
// Route::get('/api/form-data/{id}', 'form3controller@show');
// Route::put('/api/form-data/{id}', 'form3controller@update');
// Route::delete('/api/form-data/{id}', 'form3controller@destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * Project Routes
 */
Route::resource('projects', ProjectController::class);

Route::post('projects/{project}/updateBackground', [ProjectController::class, 'updateBackground'])->name('updateBackground');
Route::post('projects/{project}/updateAnalysis', [ProjectController::class, 'updateAnalysis'])->name('updateAnalysis');
Route::post('projects/{project}/updateInfo', [ProjectController::class, 'updateInfo'])->name('updateInfo');
Route::delete('projects/{project}/{user}', [ProjectController::class, 'deleteUser'])->name('projects.member.destroy');

/**
 * action Routes
 */
Route::resource('actions', ActionController::class);
Route::post('actions/{action}/updateAction', [ActionController::class, 'updateAction'])->name('actions.updateAction');

/**
 * Project Routes
 */

Route::resource('results', ResultController::class);
//Route::post('/results/store', [ResultController::class, 'store'])->name('results.store');



/**
 * dmaic Routes
 */
// Route::get('/dmaic', function () {
//     return view('projects/templates/dmaic');
// });

Route::resource('/dmaicProjects', DmaicProjectController::class)->except([
    'create'
]);
Route::get('dmaicProjects/create/{id}', [DmaicProjectController::class, 'create'])->name('dmaicProjects.create');
Route::post('dmaicProjects/{dmaicProject}/updatedefine1', [DmaicProjectController::class, 'updatedefine1'])->name('updatedefine1');
Route::post('dmaicProjects/{dmaicProject}/updatedefine2', [DmaicProjectController::class, 'updatedefine2'])->name('updatedefine2');



Route::get('/measure/{dmaicProject}/step1', [DmaicProjectController::class, 'step1'])->name('measure.step1');
Route::post('/measure/{dmaicProject}/step1', [DmaicProjectController::class, 'postStep1'])->name('measure.step1.post');
Route::get('/measure/{dmaicProject}/step2', [DmaicProjectController::class, 'step2'])->name('measure.step2');
Route::post('/measure/{dmaicProject}/step2', [DmaicProjectController::class, 'postStep2'])->name('measure.step2.post');
Route::get('/measure/{dmaicProject}/step3', [DmaicProjectController::class, 'step3'])->name('measure.step3');
Route::post('/measure/{dmaicProject}/step3', [DmaicProjectController::class, 'postStep3'])->name('measure.step3.post');


//calendar route
Route::get('calendar', [fullcalanderController::class, 'getEvent'])->name('getEvent');
 
//Route::view('/multi','projects.dmaic.measure.CreateStepOne')->name('projects.dmaic.measure.CreateStepOne');
//Route::livewire('/multi', 'multistepform')->name('projects.dmaic.measure.CreateStepOne');

Route::get('/user', [ProjectController::class, 'search'])->name('search.projects');



//admin
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::group(['namespace' => 'App\Http\Controllers'], function () {
        Route::resource('users', 'usersController');
    });

    Route::get('/user', [usersController::class, 'create'])->name('admin.users.create');
    Route::delete('/user', [usersController::class, 'destroy'])->name('admin.users.destroy');
    Route::post('/users', [usersController::class, 'store'])->name('users.store');
    Route::patch('/user/{id}', [usersController::class, 'update'])->name('users.update');
 
});
