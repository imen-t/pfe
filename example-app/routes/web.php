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
Route::post('/projects/add-member', [ProjectController::class, 'addProjectMember'])->name('projects.add-member');


Route::get('actions', [ActionController::class, 'index'])->name('actions.index');

Route::get('/', function () {
    return view('auth.login');
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

Route::get('A3projects', [ProjectController::class, 'index2'])->name('projects.index2');


Route::post('projects/{project}/updateBackground', [ProjectController::class, 'updateBackground'])->name('updateBackground');
Route::post('projects/{project}/updateAnalysis', [ProjectController::class, 'updateAnalysis'])->name('updateAnalysis');
Route::post('projects/{project}/updateInfo', [ProjectController::class, 'updateInfo'])->name('updateInfo');
Route::delete('projects/{project}/{user}', [ProjectController::class, 'deleteUser'])->name('projects.member.destroy');
Route::post('projects/{project}/updateresultcomment', [ProjectController::class, 'updateresultcomment'])->name('updateresultcomment');
Route::post('projects/{project}/updateReview', [ProjectController::class, 'updateReview'])->name('updateReview');

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
Route::get('results', [ResultController::class, 'index'])->name('results.index');
Route::post('results/{result}/updateresult', [ResultController::class, 'updateresult'])->name('results.updateresult');


/**
 * dmaic Routes
 */
// Route::get('/dmaic', function () {
//     return view('projects/templates/dmaic');
// });

Route::resource('/dmaicProjects', DmaicProjectController::class)->except([
    'create'
]);
Route::get('A3projects', [ProjectController::class, 'index2'])->name('dmaicProjects.index2');


Route::get('Define/create/{id}', [DmaicProjectController::class, 'create'])->name('dmaicProjects.create');

Route::post('dmaicProjects/{dmaicProject}/updateInfo', [DmaicProjectController::class, 'updateInfo1'])->name('updateInfo1');

Route::delete('dmaicProjects/{dmaicProject}/{user}', [DmaicProjectController::class, 'deleteUser'])->name('dmaicProject.member.destroy');

//define phase
Route::get('/Define/{dmaicProject}/step1', [DmaicProjectController::class, 'Definestep1'])->name('Define.step1');
Route::post('Define/{dmaicProject}/updatedefine1', [DmaicProjectController::class, 'updatedefine1'])->name('updatedefine1');
Route::get('/Define/{dmaicProject}/step2', [DmaicProjectController::class, 'Definestep2'])->name('Define.step2');
Route::post('/Define/{dmaicProject}/updatedefine2', [DmaicProjectController::class, 'updatedefine2'])->name('updatedefine2');
Route::get('/Define/{dmaicProject}/step3', [DmaicProjectController::class, 'Definestep3'])->name('Define.step3');
Route::post('/Define/{dmaicProject}/updatedefine3', [DmaicProjectController::class, 'updatedefine3'])->name('updatedefine3');
Route::get('/Define/{dmaicProject}/championchecklist', [DmaicProjectController::class, 'definecheck'])->name('checklist.definechack');
Route::post('/Define/{dmaicProject}/postchampionchecklist', [DmaicProjectController::class, 'storedefinecheck'])->name('storedefinecheck');
//Measure phase

Route::get('/measure/{dmaicProject}/step1', [DmaicProjectController::class, 'step1'])->name('measure.step1');
Route::post('/measure/{dmaicProject}/step1', [DmaicProjectController::class, 'postStep1'])->name('measure.step1.post');
Route::get('/measure/{dmaicProject}/step2', [DmaicProjectController::class, 'step2'])->name('measure.step2');
Route::post('/measure/{dmaicProject}/step2', [DmaicProjectController::class, 'postStep2'])->name('measure.step2.post');
Route::get('/measure/{dmaicProject}/step3', [DmaicProjectController::class, 'step3'])->name('measure.step3');
Route::post('/measure/{dmaicProject}/step3', [DmaicProjectController::class, 'postStep3'])->name('measure.step3.post');

//Analyse phase
Route::get('/Analyse/{dmaicProject}/step1', [DmaicProjectController::class, 'Analysestep1'])->name('Analyse.step1');
Route::post('Analyse/{dmaicProject}/updateAnalyse1', [DmaicProjectController::class, 'updateAnalyse1'])->name('updateAnalyse1');
Route::get('/Analyse/{dmaicProject}/step2', [DmaicProjectController::class, 'Analysestep2'])->name('Analyse.step2');
Route::post('/Analyse/{dmaicProject}/updateAnalyse2', [DmaicProjectController::class, 'updateAnalyse2'])->name('updateAnalyse2');
Route::get('/Analyse/{dmaicProject}/step3', [DmaicProjectController::class, 'Analysestep3'])->name('Analyse.step3');
Route::post('/Analyse/{dmaicProject}/updateAnalyse3', [DmaicProjectController::class, 'updateAnalyse3'])->name('updateAnalyse3');

//improve phase
Route::get('/improve/{dmaicProject}/step1', [DmaicProjectController::class, 'improve1'])->name('improve.step1');
Route::post('/improve/{dmaicProject}/updateimprove1', [DmaicProjectController::class, 'updateimprove1'])->name('updateimprove1');
Route::get('/improve/{dmaicProject}/step2', [DmaicProjectController::class, 'improve2'])->name('improve.step2');
Route::post('/improve/{dmaicProject}/updateimprove2', [DmaicProjectController::class, 'updateimprove2'])->name('updateimprove2');
Route::get('/improve/{dmaicProject}/step3', [DmaicProjectController::class, 'improve3'])->name('improve.step3');
Route::post('/improve/{dmaicProject}/updateimprove3', [DmaicProjectController::class, 'updateimprove3'])->name('updateimprove3');

//Control phase
Route::get('/control/{dmaicProject}/step1', [DmaicProjectController::class, 'controlstep1'])->name('control.step1');
Route::post('/control/{dmaicProject}/updateAnalyse1', [DmaicProjectController::class, 'updatecontrol1'])->name('updatecontrol1');
Route::get('/control/{dmaicProject}/step2', [DmaicProjectController::class, 'controlstep2'])->name('control.step2');
Route::post('/control/{dmaicProject}/updateAnalyse2', [DmaicProjectController::class, 'updatecontrol2'])->name('updatecontrol2');
Route::get('/control/{dmaicProject}/step3', [DmaicProjectController::class, 'controlstep3'])->name('control.step3');
Route::post('/control/{dmaicProject}/updateAnalyse3', [DmaicProjectController::class, 'updatecontrol3'])->name('updatecontrol3');

//calendar route
Route::get('calendar', [fullcalanderController::class, 'getEvent'])->name('getEvent');
 
//Route::view('/multi','projects.dmaic.measure.CreateStepOne')->name('projects.dmaic.measure.CreateStepOne');
//Route::livewire('/multi', 'multistepform')->name('projects.dmaic.measure.CreateStepOne');

Route::get('/user', [ProjectController::class, 'search'])->name('search.projects');


Route::group(['middleware' => 'auth', 'prefix' => 'user', 'as' => 'user.'], function () {   });
//admin
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::group(['namespace' => 'App\Http\Controllers'], function () {
        Route::resource('users', 'usersController');
    });
    Route::get('/user', [usersController::class, 'create'])->name('admin.users.index');
    Route::get('/user', [usersController::class, 'create'])->name('admin.users.create');
    Route::delete('/user', [usersController::class, 'destroy'])->name('admin.users.destroy');
    Route::post('/users', [usersController::class, 'store'])->name('users.store');
    Route::patch('/user/{id}', [usersController::class, 'update'])->name('users.update');
 
});
