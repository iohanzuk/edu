<?php
Route::group([
    'prefix'    => 'course',
], function () {
    Route::post('/', 'CourseController@post');
    Route::get('/', 'CourseController@get');
    Route::get('/{id}', 'CourseController@getById');
});
