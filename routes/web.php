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

Route::get('/', 'HomeController@index')->name('homepage');

Route::get('/test', function () {
    return view('sign-in');
});

Route::get('/dashboard', function () {
    return view('userdata.bi.dashboard');
});

Route::get('/profile', function () {
    return view('admindata.user.profile');
});

// Auth::routes();

// ==================================================
// ================ User Routes ====================
// ==================================================
Route::group(['prefix' => 'account', 'middleware' => 'guest'], function () {
    // Login
    Route::get('/login', 'UserController@login')->name('account.login');
    Route::post('/login', 'UserController@postlogin');
    // Register
    Route::get('/register', 'UserController@register')->name('account.register');
    Route::post('/register', 'UserController@postregister');
    // Verify Account
    Route::get('/verify/{id}', 'UserController@verify')->name('account.verify');
    Route::post('/verify/{id}', 'UserController@postVerify');
    // Account Not Verify
    Route::get('/notverify', 'UserController@notverify')->name('account.notverify');
    // Request verification token
    Route::get('/request', 'UserController@request')->name('account.request');
    Route::post('/request', 'UserController@postrequest');
});

// 'auth:users', 'checkIfVerify'
Route::group(['prefix' => 'account', 'middleware' => ['auth:users', 'checkIfVerify']], function () {
    // Dashboard
    Route::get('/', 'UserController@index')->name('account.dashboard');
    // Route::get('/dashboard', 'UserController@index')->name('account.dashboard');
    Route::get('/logout', 'UserController@logout')->name('account.logout');

    // Profile   
    Route::get('/profile', 'UserController@profile')->name('account.profile');
    Route::get('/editprofile', 'UserController@editProfile')->name('account.editprofile');
    Route::post('/editprofile', 'UserController@postEditProfile');
    // ->name('account.editprofile');

    // Documentation
    Route::get('/documentation', 'UserController@documentation')->name('account.documentation');

    // Catalog
    Route::get('/catalog', 'ProductController@index')->name('account.catalog');
    Route::get('/catalog/{id}', 'ProductController@detail')->name('account.catalogdetail');
    Route::get('/addcatalog', 'ProductController@create')->name('account.addcatalog');
    Route::get('/addcatalog/media', 'ProductController@storemedia')->name('account.storemedia');
    Route::post('/addcatalog', 'ProductController@postcatalog')->name('account.postcatalog');

    // Search Product
    Route::get('/searchproduct', 'ProductController@searchproduct')->name('account.searchproduct');
    Route::get('/wishlist', 'ProductController@wishlist')->name('account.wishlist');
    Route::get('/tradeconsole', 'ProductController@tradeconsole')->name('account.tradeconsole');


    // Trade: Added by Ibrahim.S
    Route::get('/wishlist', 'ProductController@wishlist')->name('account.wishlist');
    Route::get('/tradeconsole', 'ProductController@tradeconsole')->name('account.tradeconsole');
    Route::get('/view/{id}', 'ProductController@getdetail')->name('product.view');
});


// ==================================================
// ================ Admin Routes ====================
// ==================================================

Route::group(['prefix' => 'admin', 'middleware' => ['guest']], function () {
    // Login
    Route::get('/login', 'AdminController@login')->name('admin.login');
    Route::post('/login', 'AdminController@postlogin');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admins']], function () {
    // Dashboard
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/profile', 'AdminController@adminprofile')->name('admin.profile');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');

    // gender
    Route::get('/gender', 'SetupController@genderSetup')->name('gender');
    Route::post('/addgender', 'SetupController@addGender')->name('addgender');
    Route::get('/getgender/{id}', 'SetupController@getGender')->name('getgender');
    Route::get('/deletegender/{id}', 'SetupController@delGender')->name('deletegender');


    // ServiceType
    Route::get('/service', 'SetupController@serviceSetup')->name('service');
    Route::post('/addservice', 'SetupController@addService')->name('addservice');
    Route::get('/service/{id}', 'SetupController@getservice')->name('getservice');
    Route::get('/del/{id}', 'SetupController@delService')->name('deleteservices');


    // ShippingType
    Route::get('/shipping', 'SetupController@shippingSetup')->name('shipping');
    Route::post('/addshipping', 'SetupController@addShipping')->name('addshipping');
    Route::get('/getshipping/{id}', 'SetupController@getShipping')->name('getshipping');
    Route::get('/destroyshipping/{id}', 'SetupController@delShipping')->name('deleteshipping');


    // TradeStatus
    Route::get('/tradestatus', 'SetupController@TradeStatusSetup')->name('tradestatus');
    Route::post('/addtradestatus', 'SetupController@addStatus')->name('addstatus');
    Route::get('/gettradestatus/{id}', 'SetupController@getTradeStatus')->name('getstatus');
    Route::get('/destroytradestatus/{id}', 'SetupController@delTradeStatus')->name('deletestatus');

    // MaritalStatus
    Route::get('/maritalstatus', 'SetupController@MaritalStatusSetup')->name('maritalstatus');
    Route::post('/addmaritalstatus', 'SetupController@addMaritalStatus')->name('addmaritalstatus');
    Route::get('/destroystatus/{id}', 'SetupController@delMaritalStatus')->name('deletemaritalstatus');

    // TradeType
    Route::get('/tradetype', 'SetupController@TradeTypeSetup')->name('tradetype');
    Route::post('/addtradetype', 'SetupController@addTradeType')->name('addtrade');
    Route::get('/gettradetype/{id}', 'SetupController@getTradeType')->name('gettradetype');
    Route::get('/destroy/{id}', 'SetupController@delTradeType')->name('deletetradetype');


    // Category
    Route::get('/categorytype', 'SetupController@categorySetup')->name('category');
    Route::post('/addcategorytype', 'SetupController@addCategorType')->name('addcategory');
    Route::get('/category/{id}', 'SetupController@getCategory')->name('getcategory');
    Route::get('/destroycat/{id}', 'SetupController@delCategoryType')->name('deletecattype');


    // users/admin info
    Route::get('/viewaccounts', 'AdminController@userAccount')->name('useraccounts');
    Route::get('/viewadmins', 'AdminController@adminAccount')->name('adminaccounts');

    // documentation
    Route::get('/userdocumentation', 'DocController@userDoc')->name('user.documentation');
    Route::post('/account/documentation', 'DocController@addUserDoc')->name('user.adddoc');
    Route::get('/delete/{id}', 'DocController@destroyUserDoc')->name('userdoc.destroy');

    Route::get('/admindocumentation', 'DocController@adminDoc')->name('admin.documentation');
    Route::post('/admin/documentation', 'DocController@addAdminDoc')->name('admin.adddoc');
    Route::get('/deleteAdmin/{id}', 'DocController@destroyAdminDoc')->name('admindoc.destroy');
});
