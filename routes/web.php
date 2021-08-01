<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\NotesController;
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

Route::post('/projects', function(){
    // validate

    // persist
    Project::create(request(['title', 'description']));
    //redirect

});

Route::get('/projects', function(){
    $projects = Project::all();

    return view('projects.index', compact('projects'));
});
