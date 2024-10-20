<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function ($router) {
    $router->post("login", "AuthController@login");
    $router->post("register","AuthController@register");
    $router->post("check-user","AuthController@check_user");
    $router->get("get-profile",['middleware' => 'auth', 'uses' => "AuthController@get_profile"]);
});
