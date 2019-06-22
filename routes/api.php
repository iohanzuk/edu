<?php

use Illuminate\Http\Request;

Route::group([], function () {
    require base_path('routes/api/users.php');
    require base_path('routes/api/clients.php');
    require base_path('routes/api/course_classes.php');
    require base_path('routes/api/courses.php');
});