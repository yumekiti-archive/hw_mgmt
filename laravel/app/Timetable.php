<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{

    protected $fillable = [
        'week_count', 'period', 'lesson_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
