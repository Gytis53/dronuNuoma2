<?php

use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;

Route::get('/',[
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Auth::routes();

Route::group(['prefix' => 'customer'],function () {
    Route::get('/register', [
        'uses' => 'CustomerRegisterController@showRegisterForm',
        'as' => 'customer.register'
    ]);
    Route::post('/register', [
        'uses' => 'CustomerRegisterController@register',
        'as' => 'customer.register'
    ]);

    Route::get('/login', [
        'uses' => 'Auth\CustomerLoginController@showLoginForm',
        'as' => 'customer.login'
    ]);

    Route::post('/login', [
        'uses' => 'Auth\CustomerLoginController@login',
        'as' => 'customer.login.submit'
    ]);

    Route::get('/logout', [
        'uses' => 'UserController@logout',
        'as' => 'customer.logout'
    ]);

    Route::get('/profile', [
        'uses' => 'VartotojasController@getCustomerProfile',
        'as' => 'customer.getProfile'
    ]);
    Route::get('/addProduct', [
        'uses' => 'NuomaController@getAddProductForm',
        'as' => 'customer.getAddProductForm'
    ]);
    Route::post('/addProduct', [
        'uses' => 'NuomaController@postAddProductForm',
        'as' => 'customer.getAddProductForm.submit'
    ]);

    Route::get('/getCustomerProducts', [
        'uses' => 'NuomaController@getCustomerProducts',
        'as' => 'customer.getCustomerProducts'
    ]);

    Route::get('/getUpdateProductForm/{id}', [
        'uses' => 'NuomaController@getUpdateProductForm',
        'as' => 'customer.getUpdateProductForm'
    ]);

    Route::post('/getUpdateProductForm/{id}', [
        'uses' => 'NuomaController@postUpdateProduct',
        'as' => 'customer.getUpdateProductForm.submit'
    ]);

    Route::get('/deleteProduct/{id}', [
        'uses' => 'NuomaController@getDeleteProduct',
        'as' => 'customer.deleteProduct.submit'
    ]);

    Route::get('/getRentProductForm/{id}', [
        'uses' => 'NuomaController@getRentPage',
        'as' => 'customer.getRentPage'
    ]);

    Route::post('/getRentProductForm/{id}', [//route for test only, original will be in checkout with params
        'uses' => 'NuomaController@sendRentDataToCheckOut',
        'as' => 'customer.getRentPage.submit'
    ]);

    Route::get('/getCreateMessageForm', [
        'uses' => 'VartotojasController@getCreateMessageForm',
        'as' => 'customer.getCreateMessageForm'
    ]);

    Route::post('/getCreateMessageForm', [
        'uses' => 'VartotojasController@postCreateMessageForm',
        'as' => 'customer.getCreateMessageForm.submit'
    ]);

});



Route::get('/logout', [
    'uses' => 'UserController@logout',
    'as' => 'customer.logout'
]);

Route::group(['prefix' => 'shop'],function () {
    Route::get('/index', [
        'uses' => 'NuomaController@getShopIndex',
        'as' => 'shop.index'
        ]);
});

Route::group(['prefix' => 'admin'],function () {
    Route::get('/index', [
        'uses' => 'VartotojasController@getAdminIndex',
        'as' => 'admin.index'
    ]);

    Route::get('/addShopAddress', [
        'uses' => 'VartotojasController@getAddShopForm',
        'as' => 'admin.getAddShopForm'
    ]);

    Route::post('/addShopAddress', [
        'uses' => 'VartotojasController@postAddShopForm',
        'as' => 'admin.getAddShopForm.submit'
    ]);

    Route::get('/rentSummary', [
        'uses' => 'NuomaController@getRentSummary',
        'as' => 'admin.getRentSummary'
    ]);

    Route::get('/state/{id}', [
        'uses' => 'NuomaController@getStateByProductStatusId',
        'as' => 'admin.getStateByProductStatusId'
    ]);

    Route::post('/rentSummary', [
        'uses' => 'NuomaController@getRentSummaryDetails',
        'as' => 'admin.getRentSummaryDetails'
    ]);

    Route::get('/sendMailForm', [
        'uses' => 'VartotojasController@getSendMailForm',
        'as' => 'admin.sendMailForm'
    ]);

    Route::post('/sendMailForm', [
        'uses' => 'VartotojasController@postSendMailForm',
        'as' => 'admin.sendMailForm.submit'
    ]);

    Route::get('/createEvent', [
        'uses' => 'VartotojasController@getCreateEventForm',
        'as' => 'admin.createEvent'
    ]);

    Route::post('/createEvent', [
        'uses' => 'VartotojasController@postCreateEventForm',
        'as' => 'admin.createEvent.submit'
    ]);

    Route::get('/userSummary', [
        'uses' => 'VartotojasController@getUserSummary',
        'as' => 'admin.getUserSummary'
    ]);
});

Route::get('/map',[
    'uses' => 'NuomaController@setUpMap',
    'as' => 'map'
]);

Route::get('/events',[
    'uses' => 'VartotojasController@getEvents',
    'as' => 'events'
]);

Route::get('/home', 'HomeController@index')->name('home');

//STRIPE CHECKOUTAS

Route::view('/checkout', 'shop/checkout');

Route::post('/checkout', function(Request $request) {

        return back()->with('success_message', 'Jūsų mokėjimas priimtas!');
});
Route::view('/checkout2', 'shop/checkout2');

Route::post('/checkout2', function(Request $request) {

    return back()->with('success_message', 'Jūsų mokėjimas priimtas!');
});
Route::view('/order-page', '/order-page');


Route::get('/order-summary',[
    'uses' => 'OrderContoller@getOrder',
    'as' => 'order-summary'
]);
//Route::post('/order-page', function(Request $request) {
//
//    return back()->with('success_message', 'Jūsų mokėjimas priimtas!');
//});

Route::post('/order-page', [
    'uses' => 'OrderContoller@saveOrder',
    'as' => 'showOrderSummary'
]);
Route::get('/orders-view', [
    'uses' => 'OrderContoller@getOrders',
    'as' => 'order'
]);
Route::get('/cancelOrder/{id}', [
    'uses' => 'OrderContoller@cancelOrder',
    'as' => 'cancelOrder'
]);
Route::get('/cancelOrder/{id}', [
    'uses' => 'OrderContoller@cancelUserOrder',
    'as' => 'cancelUserOrder'
]);


// Produkto puslapis

//Route::get('/store','ProductController', ['only' => ['index', 'show']]);

//Route::get('/store',['uses' => 'ProductController@show', 'as' => 'store'
//]);
//
//
Route::get('/store', function () {
    return redirect('store');
});
Route::resource('store', 'ProductController', ['only' => ['index', 'show']]);

Route::post('/order-report', [
    'uses' => 'OrderContoller@getOrdersReport',
    'as' => 'order-report'
]);
Route::get('/order-make-reports', [
    'uses' => 'OrderContoller@makeOrderReports',
    'as' => 'order-make-reports'
]);


//cart
Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');

Route::post('/leaveReview', [
    'uses' => 'PrekybaController@leaveReview',
    'as' => 'prekyba.leaveReview'
]);