<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|return view('client_module.login');
*/
use App\User;
Route::get('/', [ 'as' => 'login', 'uses' => 'LoginController@index']);

// ==================================================CLIENT MODULE ROUTES====================================================

// Auth middleware, redirect user pag di naka login

Route::group(['middleware' => ['App\Http\Middleware\ServiceEngineerMiddleware']], function(){
    
    Route::post('/loginAuth', 'LoginController@doLogin');
    Route::get('/service_engineer', 'ServiceEngineerDashboardController@index')->middleware('auth');
    Route::post('/edit-profile', 'ServiceEngineerProfileController@edit')->middleware('auth');
    Route::get('/profile', ['as' => 'profile', 'uses' => 'ServiceEngineerProfileController@index'])->middleware('auth'); 
    Route::get('/services', ['as' => 'service', 'uses' => 'ServiceController@index'])->middleware('auth'); 
    Route::get('/myservices', ['as' => 'myservices', 'uses' => 'ServiceController@myServices'])->middleware('auth'); 
    Route::get('/allservices', ['as' => 'allservices', 'uses' => 'ServiceController@allServices'])->middleware('auth'); 
    Route::get('/addservices', ['as' => 'addservices', 'uses' => 'ServiceController@addServices'])->middleware('auth'); 
    Route::get('/serviceform', ['as' => 'serviceform', 'uses' => 'ServiceController@renderForms'])->middleware('auth'); 
    Route::post('/serviceform', ['as' => 'serviceform', 'uses' => 'ServiceController@saveForms'])->middleware('auth'); 
    Route::post('/updateStatus', ['as' => 'updateStatus', 'uses' => 'ServiceController@updateStatus'])->middleware('auth');
    Route::post('/updateItems', ['as' => 'updateImtems', 'uses' => 'ServiceController@updateItem'])->middleware('auth'); 
    Route::get('/inventory', ['as' => 'inventory', 'uses' => 'InventoryController@index'])->middleware('auth'); 
    Route::get('/notifications', ['as' => 'notifications', 'uses' => 'NotificationController@index'])->middleware('auth');
    Route::post('/claim', ['as' => 'claim', 'uses' => 'NotificationController@claimDevice'])->middleware('auth');
    Route::post('/itemsCostAjax', 'ServiceController@itemsCostAjax')->middleware('auth');
    Route::get('/customize', ['as' => 'customize', 'uses' => 'OrderController@customIndex'])->middleware('auth');
    Route::get('/purchase-parts', ['as' => 'purchase-parts', 'uses' => 'OrderController@purchaseIndex'])->middleware('auth');
    Route::post('/ordersummary', ['as' => 'buildpc', 'uses' => 'OrderController@viewSummary'])->middleware("auth");
    Route::post('/confirmorder', ['as' => 'confirmorderpc', 'uses' => 'OrderController@createOrder']);
    Route::get('/orders', ['as' => 'orders', 'uses' => 'OrderController@viewOrders'])->middleware("auth");
    Route::post('/changer', ['as' => 'changer', 'uses' => 'PasswordController@changer'])->middleware("auth");
    Route::post('/filterinventory', ['as' => 'filterinventory', 'uses' => 'InventoryController@filter'])->middleware("auth");
    Route::post('/payorder', ['as' => 'payorder', 'uses' => 'OrderController@payOrder'])->middleware("auth");
    Route::get('/sales', ['as' => 'sales', 'uses' => 'SalesController@index'])->middleware("auth");
    Route::get('/reports', ['as' => 'reports', 'uses' => 'ReportsController@index'])->middleware("auth");
    Route::post('/pdf', ['as' => 'pdf', 'uses' => 'ReportsController@viewReport'])->middleware("auth");
    Route::post('/logout', ['as' => 'logout', 'uses' => 'LoginController@doLogout'])->middleware("auth");
    Route::get('/ordersreq', ['as' => 'ordersreq', 'uses' => 'OrderController@viewOrdersReq'])->middleware("auth");
    Route::get('/announcement', ['as' => 'announcement', 'uses' => 'announcementController_client@index'])->middleware('auth'); 
    Route::post('/deleteann', ['as' => 'deleteann', 'uses' => 'announcementController_client@delete'])->middleware('auth'); 
    

});

// ==================================================END CLIENT MODULE ROUTES=================================================

// ==================================================ADMIN MODULE ROUTES======================================================

// Route::group(['middleware' => ['App\Http\Middleware\AdminMiddleware']], function() {

    Route::get('/admin_login', 'AdminDashboardController@index')->middleware("auth");
    Route::get('/index', 'AdminDashboardController@index')->middleware("auth");
    Route::get('/inventory_admin', ['as' => 'inventory_admin', 'uses' => 'InventoryAdminController@index'])->middleware("auth");
    Route::get('/purchases', ['as' => 'purchases', 'uses' => 'PageControl@purchase'])->middleware("auth");
    Route::get('/addPurchase', ['as' => 'addPurchase', 'uses' => 'PageControl@addpurchase'])->middleware("auth");

    // Route::get('/replacement', 'PageControl@replace');
    // Route::get('/addreplacement', ['as' => 'addReplacement', 'uses' => 'PageControl@addreplacement'])->middleware("auth");

    Route::resource('/settings', 'UserListController')->middleware("auth");

    // Route::get('/register', 'PageControl@register');
    Route::post('insert', ['as' => 'insert', 'uses' => 'RegisterController@store'])->middleware("auth");
    // Route::resource('posts','PostController')->middleware("auth");
    Route::resource('register','RegisterController')->middleware("auth");
    // Route::resource('insertForm','RegisterController')->only(['store']);
    // Route::resource('insertForm','RegisterController');
    Route::resource('inventoryForm','InventoryAddController')->middleware("auth");
    Route::get('/replacement', ['as' => 'replacement', 'uses' => 'ReplacementController@replace'])->middleware("auth");
    // Route::resource('/addreplacement', ['as' => 'addreplacement', 'uses' => 'AddReplacementController@index'])->middleware("auth");
    Route::resource('addreplacement','AddReplacementController')->middleware('auth');

    Route::get('/logout', ['as' => 'logout', 'uses' => 'LogoutController@logout'])->middleware("auth");
    Route::get('/createaccount', ['as' => 'createaccount', 'uses' => 'PageControl@createaccount'])->middleware("auth");
    Route::get('/salesRecord', ['as' => 'createaccount', 'uses' => 'SalesRecordController@index'])->middleware("auth");
   
    Route::post('/announcement_admin', ['as' => 'announcement_admin', 'uses' => 'AnnouncementController@store'])->middleware("auth");
    Route::get('/editaccount', ['as' => 'editaccount', 'uses' => 'PageControl@editaccount'])->middleware("auth");
    Route::resource('uname','UsernameController')->middleware("auth");
    Route::resource('contact','ContactController')->middleware("auth");
    Route::resource('email','EmailController')->middleware("auth");
    Route::resource('password','PasswordControl')->middleware("auth");


    Route::get('/posts', ['as' => 'posts', 'uses' => 'InventoryAdminController@index'])->middleware("auth");

    Route::get('/list', ['as' => 'posts', 'uses' => 'PostController@index'])->middleware("auth");
    Route::get('deleteIn/{inventory_id}', ['as' => 'deleteIn', 'uses' => 'PostController@delete'])->middleware("auth");
    Route::get('/settings', ['as' => 'settings', 'uses' => 'UserListController@index'])->middleware("auth");
    Route::post('/disable', ['as' => 'disable', 'uses' => 'DisableController@disable'])->middleware("auth");
    Route::get('/allServices', ['as' => 'allServices', 'uses' => 'AdminServiceController@allServices'])->middleware('auth'); 
    Route::get('/suppliers', ['as' => 'suppliers', 'uses' => 'SupplierController@index'])->middleware("auth");
    Route::resource('chargeInv','ChargeInvoiceController')->middleware("auth");
    Route::resource('formInvoice','FormChargeInvoiceController')->middleware("auth");

    //Route::post('/deleteUsers', ['as' => 'deleteUsers', 'uses' => 'UserListController@delete'])->middleware("auth");
// });



// ==================================================END MODULE ROUTES======================================================