<?php
//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Project

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'order'], function () {
    Route::get('/', [OrderController::class, 'getAll'])->middleware('authorization:1,2,');
    Route::get('/order', [OrderController::class, 'getByUser'])->middleware('authorization:1,2,3');
    Route::post('/', [OrderController::class, 'create'])->middleware('authorization:1,2,3');
    Route::delete('/{id}', [OrderController::class, 'delete'])->middleware('authorization:1,2,3');
    Route::patch('/{id}', [OrderController::class, 'update'])->middleware('authorization:1,2');
});
