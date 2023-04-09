<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\listUserController;
use App\Http\Controllers\OrderController;
use App\Models\Bill;
use App\Http\Controllers\NewsController;
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
    return view('master');
});

Route::get('purchase', function () {
    return view('purchase');
});


Route::get('news', function () {
    return view('news');
});


Route::get('index',[PageController::class, 'getIndex']) -> name('index');
Route::get('product',[PageController::class, 'getProduct'])  -> name('product');
Route::get('cart',[PageController::class, 'getCart']) -> name('cart');

// list all user
Route::get('user', 'UserController@getAllUser') ->name('user');

// Delete User
Route::get('admin-blank/{username}',[UserController::class, 'getDeleteUser']) ->name('deleteUser');

// LOGIN/SIGNUP
Route::get('login', 'loginController@getLogin') -> name('login');;
Route::post('login', 'loginController@postLogin');

Route::get('signup','loginController@getSignup') -> name('signup');
Route::post('signup','loginController@postSignup');

// Admin
Route::get('admin',[AdminController::class, 'getAdmin']);
Route::get('database',[AdminController::class, 'getTable']);


// Route::get('user',[AdminController::class, 'getBlank']) -> name('blank');
Route::get('admin-product',[AdminController::class, 'getProduct']) -> name('admin-product');


// Anypage error
Route::get('{{error}}', function () {
    return view('404');
});

// Route::get('{any}', function () {
//     return view('404');
// });

// Logout
Route::get('logout', 'loginController@logout') -> name('logout');



// PRODUCT ================================================================================


Route::get('product', 'ProductController@getAllProduct') ->name('product');
Route::get('admin-product', 'ProductController@getAllAdminProduct') ->name('admin-product');



Route::post('admin-product','ProductController@addProduct') ->name('admin-product');

// Route::get('detail/{productid}','ProductController@Detail')  -> name('detail');
Route::get('detail/{productid}',[ProductController::class, 'Detail']);
Route::get('admin-product/{productid}',[ProductController::class, 'DeleteProduct']) ->name('delete');

Route::get('add-to-cart/{productID}',[ProductController::class, 'addToCart'])->name('add-to-cart');
Route::get('del-product-cart/{id}',[ProductController::class, 'delProductCart'])->name('del-product-cart');
Route::get('update-product-cart/{rowid}',[ProductController::class, 'updateProductCart'])->name('update-product-cart');

Route::post('order', [ProductController::class, 'order'])->name('order');



//Update User
Route::get('admin-blank','UserController@getAllUser') -> name('admin-blank');
Route::post('admin-blank','UserController@updateUser') ->name('UpdateUser');


Route::get('UpdateUser/{username}','UserController@getUpdateUser') -> name('UU');
Route::post('UpdateUser/{username}','UserController@updateUser');


// // Update Product
// Route::get('admin-product','ProductController@getAllAdminProduct') -> name('admin-product');
// // Route::post('admin-product','ProductController@updateProduct') ->name('UpdateProduct');


// // Route::get('UpdateProduct/{productid}','ProductController@getUpdateProduct') -> name('UP');
// // Route::post('UpdateProduct/{productid}','ProductController@updateProduct');


// Get detail
Route::GET('detail/{productid','ProductController@getCart') -> name('detail/{productid');
Route::POST('detail/{productid}','ProductController@getCart') -> name('detail');

// CART ======================================================================================
Route::get('/cart', 'ProductController@getAllCart') ->name('cart');
Route::get('cart/{id}','ProductController@DeleteCart') ->name('DeleteCart');


// Order ======================================================================================
Route::post('/cart', 'OrderController@Bill') ->name('order');
Route::get('/purchase', 'OrderController@showBill') ->name('purchase');
Route::get('manage-order', 'OrderController@showAdminBill') ->name('manage-order');


Route::get('/cart/delete/{id}','OrderController@DeleteCartBill') ->name('DeleteCartBill');

// NEWS========================================================================================
Route::get('news', 'NewsController@ShowNews') ->name('news');
Route::get('admin-news', 'NewsController@formNews') ->name('admin-news');
Route::post('admin-news', 'NewsController@CreateNews') ->name('postnews');
// Category========================================================================================
// Route::get('category', 'CategoryController@getAllCategory') ->name('news');
Route::get('admin-category', 'CategoryController@getAllCategory') ->name('admin-category');
Route::post('admin-category', 'CategoryController@createCategory') ->name('postcategory');

Route::get('admin-category/{categoryid}', 'CategoryController@deleteCategory') ->name('delete-category');
Route::get('admin-updateCategory/{categoryid}','CategoryController@getUpdateCategory') -> name('AA');
Route::post('admin-updateCategory/{categoryid}','CategoryController@updateCategory');

// Color========================================================================================
// Route::get('category', 'CategoryController@getAllCategory') ->name('news');
Route::get('admin-color', 'ColorController@getAllColor') ->name('admin-color');
Route::post('admin-color', 'ColorController@createColor') ->name('postcolor');

Route::get('admin-color/{colorid}', 'ColorController@deleteColor') ->name('delete-color');
Route::get('admin-updateColor/{colorid}','ColorController@getUpdateColor') -> name('OO');
Route::post('admin-updateColor/{colorid}','ColorController@updateColor');

// Size========================================================================================
// Route::get('category', 'CategoryController@getAllCategory') ->name('news');
Route::get('admin-size', 'SizeController@getAllSize') ->name('admin-size');
Route::post('admin-size', 'SizeController@createSize') ->name('postsize');

Route::get('admin-size/{sizeid}', 'SizeController@deleteSize') ->name('delete-size');
Route::get('admin-updateSize/{sizeid}','SizeController@getUpdateSize') -> name('YY');
Route::post('admin-updateSize/{sizeid}','SizeController@updateSize');
Route::get('admin-updateProduct/{productID}','ProductController@getUpdateProduct') -> name('HH');
Route::post('admin-updateProduct/{productID}','ProductController@updateProduct');

// Order
// Route::get('admin-order',[OrderController::class, 'index'])->name('admin.order.index');
// Route::post('admin-order/approve/{id}',[OrderController::class, 'approve'])->name('admin.order.approve');
// Route::post('admin-order/delete/{id}',[OrderController::class, 'delete'])->name('admin.order.delete');
// Route::get('admin-order-detail/{id}',[OrderController::class, 'detail'])->name('admin.order.detail');