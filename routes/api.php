<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('token_access', function(Request $request){
    if(!$request->ajax()){
        return abort(404);
    }
    return env('APP_TOKEN', '');
 });
