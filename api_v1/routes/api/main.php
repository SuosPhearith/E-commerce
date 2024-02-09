<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Auth
Route::group(['prefix' => 'auth'], function () {
    require(__DIR__ . '/auth.php');
});


//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Product
Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'getAll']);
    Route::get('/promotion', [ProductController::class, 'getPromotion']);
    Route::get('/{id}', [ProductController::class, 'getById']);
});

//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Category
Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'getAll']);
    Route::get('/{id}', [CategoryController::class, 'getById']);
});

//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Category
Route::group(['prefix' => 'review'], function () {
    Route::get('/product/{id}', [ReviewController::class, 'getByProductId']);
});

//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Authenticated
Route::group(['middleware' => 'auth'], function () {
    // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Category
    require(__DIR__ . '/category.php');
    // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Product
    require(__DIR__ . '/product.php');
    // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Cart
    require(__DIR__ . '/cart.php');
    // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Wishlist
    require(__DIR__ . '/wishlist.php');
    // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Order
    require(__DIR__ . '/order.php');
    // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Review
    require(__DIR__ . '/Review.php');
});
