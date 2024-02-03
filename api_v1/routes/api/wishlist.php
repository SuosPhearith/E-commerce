<?php
//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Project

use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'wishlist'], function () {
    Route::get('/', [WishlistController::class, 'getAll'])->middleware('authorization:1,2,');
    Route::get('/wishlist', [WishlistController::class, 'getByUser'])->middleware('authorization:1,2,3');
    Route::post('/', [WishlistController::class, 'create'])->middleware('authorization:1,2,3');
    Route::delete('/{id}', [WishlistController::class, 'delete'])->middleware('authorization:1,2,3');
});
