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

Route::get('/dashboard', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontendController@index')->name('index');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/mail', 'HomeController@mail');
// Frontend
Route::get('donatenow',[
    "uses"=>"FrontendController@donatenow",
    "as"=>"donatenow"

])->middleware('auth');

Route::post('donatenow/store',[
    "uses"=>"FrontendController@donatenowstore",
    "as"=>"donatenow.store"

]);
// Backend
Route::group(["prefix"=>'admin','namespace'=>"admin"],function(){

     Route::get('login',[
        "uses"=>"AdminController@login",
        "as"=>"admin.login"
    ]);

    Route::post('login/store',[
        "uses"=>"AdminController@loginstore",
        "as"=>"admin.login"
    ]);

    Route::get('/dashboard',[
        "uses"=>"DashboardController@dashboard",
        "as"=>"dashboard"
    ])->middleware('superadmin');


     Route::get('admin/add',[
        "uses"=>"AdminController@create",
        "as"=>"admin.add"
    ])->middleware(['superadmin','admin']);

    Route::get('banklist',[
        "uses"=>"BankController@index",
        "as"=>"bank.index"
    ])->middleware('auth:superadmin');

     Route::get('userlist',[
        "uses"=>"UserController@index",
        "as"=>"user.index"
    ])->middleware(['superadmin']);

    Route::get('donarlist',[
        "uses"=>"DonarController@index",
        "as"=>"donar.index"
    ])->middleware(['superadmin']);

    Route::get('admin/list',[
        "uses"=>"AdminController@index",
        "as"=>"admin.index"
    ])->middleware('auth:superadmin');

    Route::get('admin/create',[
        "uses"=>"AdminController@create",
        "as"=>"admin.create"
    ])->middleware('auth:superadmin');

     Route::post('admin/store',[
        "uses"=>"AdminController@store",
        "as"=>"admin.store"
    ])->middleware('auth:superadmin');

    // Bank status
     Route::get('active/{id}',[
        "uses"=>"BankController@active",
        "as"=>"bank.active"
    ])->middleware('auth:superadmin');

     Route::get('deactive/{id}',[
        "uses"=>"BankController@deactive",
        "as"=>"bank.deactive"
    ])->middleware('auth:superadmin');

});

// Superadmin

Route::group(["namespace"=>'superadmin'],function(){


    Route::get('superadmin/login',[
        'uses'=>'SuperAdminController@login',
        'as'=>'superadmin.login'
    ]);
    Route::post('superadmin/login',[
        'uses'=>'SuperAdminController@logincheck',
        'as'=>'superadmin.login'
    ]);

});


// Bank area

Route::group(["namespace"=>'bank'],function(){

     Route::get('bank/register',[
        'uses'=>'BankController@register',
        'as'=>'bank.register'
    ]);

      Route::post('bank/register/store',[
        'uses'=>'BankController@registerstore',
        'as'=>'register.store'
    ]);

    Route::get('bank/login',[
        'uses'=>'BankController@login',
        'as'=>'bank.login'
    ]);
    Route::post('bank/login',[
        'uses'=>'BankController@logincheck',
        'as'=>'bank.login'
    ]);

});

// Admin Area

