<?php


namespace App\Domain\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    public function couserClasses()
    {
        return $this->hasMany(CourseClass::class);
    }
}