<?php
Route::group([
    'prefix'    => 'cliente',
], function () {
    Route::post('/', 'ClientController@post');
    Route::get('/', 'ClientController@get');
    Route::get('/{id}', 'ClientController@getById');
});
