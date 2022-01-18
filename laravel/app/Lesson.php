<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = [
        'title', 'limit',
    ];

    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

    public function tasks()
    {
        return $this->hasMany(Lesson::class,"lesson_id");
    }


    public function timetables()
    {
        return $this->hasMany(Lesson::class,"lesson_id");
    }

    public function person_lesson()
    {
        return $this->hasOne(LessonColor::class, 'lesson_id', 'lesson_id');
    }

}
