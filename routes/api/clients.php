<?php
Route::group([
    'prefix'    => 'client',
], function () {
    Route::post('/', 'ClientController@post');
    Route::get('/', 'ClientController@get');
    Route::get('/{id}', 'ClientController@getById');
});
