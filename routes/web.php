<?php

use Illuminate\Support\Facades\Route;
use App\Models\CRUD;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


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
    $data = CRUD::all();
    return view('index')->with('data', $data);
});

Route::post('create', [CreateController::class,'Create']);
Route::get('create', function () {
    return view('create');
});

Route::post('update/{id}', [UpdateController::class,'Update']);
Route::get('update/{id}', function ($id) {
    $data = CRUD::find($id);
    return view('update')->with('data',$data);
});


Route::get('delete/{id}', function ($id) {
    DB::table('crudtable')->delete($id);
    return Redirect::to('/');
});


// Route::view('create','create');

// Route::post('update', [CreateController::class,'Create']);
// Route::view('create','create');
