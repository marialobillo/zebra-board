<?php

use App\Http\Controllers\NotesController;
use App\Models\Note;
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

Route::get('/notes', [NotesController::class, 'index']);
Route::post('/notes', [NotesController::class, 'store']);

Route::get('/notes/{note}', [NotesController::class, 'show']);
