<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = [
        'title', 'limit',
    ];

    public function timetables()
    {
        return $this->hasMany(Lesson::class,"lesson_id");
    }

}
