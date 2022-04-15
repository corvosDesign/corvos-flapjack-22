<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StillController;
use App\Http\Controllers\ProofController;


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


Route::get('/', function() {
    return view('corvos');
})->name('corvos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/background', function (){
    return view('background-svg');
})->name('background');

//admin  routes

/*still page */
Route::get('/stills', [StillController::class, 'stillHome'])->name('stills');
Route::get('list',[StillController::class, 'index'])->middleware(['HasAuth'])->name('list');
Route::get('/addimage', [StillController::class, 'create'])->middleware(['HasAuth'])->name('addimage');
Route::get('/stills/show', [StillController::class, 'show'])->middleware(['HasAuth']);
Route::get('/stills/ajax', [StillController::class, 'ajax']);
Route::resource('stills', StillController::class)->only(['edit','update'])->middleware(['HasAuth']);

Route::resource('project', ProjectController::class)->middleware(['auth']);
Route::resource('proof', ProofController::class)->middleware(['auth']);

Route::get('/projects/manage', function(){return view('projects.manage');})->middleware(['HasAuth'])->name('manage');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['HasAuth'])->name('dashboard');

Route::get('/client', [ProjectController::class, 'index'])->middleware(['auth'])->name('client');

require __DIR__.'/auth.php';
