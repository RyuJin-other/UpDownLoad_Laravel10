<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\RegController;
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

// Route::get('/', function () {
//     return view('file-uploads');
// });
// Route::get('/', 'FileController@index');
// Route::get('/', [FileController::class,'index']);

// Route::get('/file-index', function () {
//     return view('file-index');
// });
Route::get('/dashboard',[LogController::class,'dashboard'])->middleware('auth');

Route::get('/', [FileController::class, 'index'])->name('file')->middleware('auth');
Route::post('file', [FileController::class, 'upload'])->name('file.upload');

Route::get('/index', [FileController::class, 'create'])->middleware('auth');
Route::get('/index/{filename}/download', [FileController::class, 'download'])->name('files.download');

Route::get('/login',[LogController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[LogController::class,'authenticate']);

Route::post('/logout',[LogController::class,'logout']);

Route::get('/registered',[RegController::class,'index'])->middleware('guest');
Route::post('/registered',[RegController::class,'store']);

Route::get('/csrf', function() {
    $response = csrf_token();
    return response($response, 200);
})->middleware('lscache:private;max-age=900');