<?php


use App\Http\Controllers\ProjectsController;
use App\Models\Project;
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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/projects', [ProjectsController::class, 'index'])
        ->name('projects.index');
    Route::get('/projects/create', [ProjectsController::class, 'create'])
        ->name('projects.create');
    Route::post('/projects', [ProjectsController::class, 'store'])
        ->name('projects.store');
    Route::get('/projects/{project}', [ProjectsController::class, 'show']);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
