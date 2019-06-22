<?php
Route::group([
    'prefix'    => 'course-class',
], function () {
    Route::post('/', 'CourseClasseController@post');
    Route::get('/', 'CourseClasseController@get');
    Route::get('/{id}', 'CourseClasseController@getById');
});
