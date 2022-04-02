<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\WrapperApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('v1/gifs/search',[\App\Http\Controller\WrapperApiController::class,'search'])->name('search')->middleware('npm');
Route::get('v1/gifs/trending',[\App\Http\Controller\WrapperApiController::class,'trending'])->name('trending')->middleware('npm');
Route::get('v1/sticker/trending',[\App\Http\Controller\WrapperApiController::class,'sticker_search'])->name('sticker_search')->middleware('npm');
Route::get('v1/sticker/search?q=rocket&limit=25&offset=0&rating=g',[\App\Http\Controller\WrapperApiController::class,'sticker_trending'])->name('sticker_trending')->middleware('npm');

Route::get('/user/identitas', function (){
    return [
        'code' => '0',
        'data' => [
            'npm'=>'197006015',
            'nama'=>'Amzad Zulfikar',
            'email'=>'197006015@student.unsil.ac.id'
        ]
    ];
})->middleware('npm');