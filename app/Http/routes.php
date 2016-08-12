<?php
/**
 * Created by PhpStorm.
 * User: Md Rasel Ahmed
 * Date: 03-Aug-16
 * Time: 11:00 AM
 */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
//    return view('welcome');
    return redirect('/admin/dashboard');
});

Route::auth();

/* Error Section */
Route::group([
    'prefix' => 'error',
    'namespace' => 'Error',
    'as' => 'error::'
], function() {
    Route::get('404', ['as' => '404', 'uses' => 'ErrorController@e404']);
    Route::get('500', ['as' => '500', 'uses' => 'ErrorController@500']);
    Route::get('checkout', ['as' => 'checkout', 'uses' => 'ErrorController@checkout']);
});


/* Admin Section */
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin::'
], function()
{

    Route::group([
        'middleware' => ['auth']
    ], function()
    {
        Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'AdminController@sample']);
    });
});
