<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::group(['prefix'=> 'auth'], 
    
function ()  {
    Route::post (uri:'login', action:'AuthController@login');
    Route::get (uri:'logout', action:'AuthController@logout');
    Route::get (uri:'refresh', action:'AuthController@refresh');
    Route::get (uri:'me', action:'AuthController@me');
}
);