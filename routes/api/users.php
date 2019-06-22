<?php

Route::group([
    'prefix'    => 'users',
], function () {
    Route::get('/', 'UsersController@get');
    Route::post('/', 'UsersController@post');
});