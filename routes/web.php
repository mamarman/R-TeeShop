<?php

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

Route::get('user/login', function () {
    
    return view('admin.login');
});

Route::get('image/uploads/{path}/{file_name}', function ($path, $fileName) {
    
    $path = $path .'/'. $fileName;
    $fullPath = storage_path('app/'. $path);

    if (!file_exists($fullPath)) {

        return "assets/images/r-tee-logo.png";
    }
    
    return response()->file($fullPath);
});

Route::post('user/login', 'LoginController@authenticate');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    
    Route::resource('customer', 'CustomerController');
    Route::resource('categories', 'CaterotiesController');
    Route::resource('product', 'ProductController');
    Route::resource('user', 'UserController');

    Route::get('admin', function () {
        return view('dashboard.index');
    });
    Route::get('dashboard', function () {
        return view('dashboard.index');
    });

    Route::get('logout', function () {
        
        Auth::logout();

        return redirect('user/login');
    });

});

/* Call page from view */
Route::get('/home', function () {
    return view('dashboard.index');
});

Route::group(['prefix'=>'order'],function(){
    Route::get('/new', function () {
        return view('dashboard.order');
    })->name('new');
    Route::get('/history', function () {
        return view('dashboard.order-history');
    })->name('history');
    Route::get('/wait-payment', function () {
        return view('dashboard.wait-payment');
    })->name('wait-payment');
});

Route::get('/order-receipt', function () {
    return view('dashboard.order-receipt');
});

Route::get('/customer-edit', function () {
    return view('dashboard.customer-edit');
});

/* Call page from controller */
Route::get('/test2','TestController@getIndex');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
