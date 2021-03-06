<?php

use App\Category;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', function () {
    $users = User::with(['categories'])->paginate(12);
    return $users;
});

Route::get('orders', function () {
    $orders = Order::with(['users'])->paginate(12);
    return $orders;
});

Route::get('categories', function () {
    $categories = Category::with(['users'])->paginate(12);
    return $categories;
});

Route::get('users', 'API\UserController@index');

Route::get('orders', 'API\OrderController@index');

Route::get('categories', 'API\CategoryController@index');

Route::get('dishes', 'API\DishController@index');

Route::get('generate', 'API\OrderController@generate');

Route::post('make/payment', 'API\OrderController@makepayment');
