<?php

use App\Http\Controllers\FileController;
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
Route::get('/', [FileController::class, 'index'])->name('file');
Route::post('file', [FileController::class, 'upload'])->name('file.upload');

Route::get('/index', [FileController::class, 'create']);
Route::get('/index/{filename}/download', [FileController::class, 'download'])->name('files.download');

