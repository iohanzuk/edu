<?php


namespace App\Domain\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseClass extends Model
{
    use SoftDeletes;

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}