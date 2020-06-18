<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

/*
|--------------------------------------------------------------------------
| Sections
|--------------------------------------------------------------------------
|@Get Sections 
*/
Route::get('/sections/index','Api\SectionController@index');

/*
|--------------------------------------------------------------------------
| Profiles
|--------------------------------------------------------------------------
|@Get Profiles 
*/
Route::post('/profiles/get','Api\ProfilesController@get_profile');
Route::post('/profiles/search','Api\ProfilesController@search');
/*
|--------------------------------------------------------------------------
| Orders
|--------------------------------------------------------------------------
|@Store Orders
|@Upload Image // For one 
*/
Route::post('order/store','Api\OrderController@store');
Route::post('order/upload_image','Api\OrderController@upload_image');
Route::post('message/send','Api\OrderController@send_message');



/*
|--------------------------------------------------------------------------
| Persons 
|--------------------------------------------------------------------------
*/
Route::post('person/store','Api\ProfilesController@register_person');

/*
|--------------------------------------------------------------------------
| Authored Api 
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => 'auth:api'], function(){
    /** Auth User */

});