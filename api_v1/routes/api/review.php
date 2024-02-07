<?php
//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Project

use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'review'], function () {
    Route::get('/', [ReviewController::class, 'getAll'])->middleware('authorization:1,2,');
    Route::get('/product/{id}', [ReviewController::class, 'getByProductId'])->middleware('authorization:1,2,3');
    Route::post('/', [ReviewController::class, 'create'])->middleware('authorization:1,2,3');
    Route::delete('/{id}', [ReviewController::class, 'delete'])->middleware('authorization:1,2,3');
});
