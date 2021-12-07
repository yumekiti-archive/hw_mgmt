<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = [
        'tile', 'limit',
    ];

    public function tasks()
    {
        return $this->hasMany(Lesson::class,"lesson_id");
    }

}
