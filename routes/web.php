<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\EmailGenerationController;

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

Route::get('/', [PagesController::class, 'index']);
Route::Post('/check', [ApiController::class, 'CheckUserSiggaa']);

Route::get('/termoAceite', [PagesController::class, 'termoAceite']);

Route::post('/generation',[EmailGenerationController::class, 'create']);
// Route::get('/info', function(){
//     return response()->json([
//         'stuff'=>phpinfo()
//     ]);
// });