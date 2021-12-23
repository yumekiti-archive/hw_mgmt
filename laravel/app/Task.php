<?php

namespace App;

use Illuminate\Foundation\Auth\Task as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'achievement_count', 'lesson_id', 'detail'
    ];

    protected $hidden = [
        'id', 'lesson_id', 'user_id', 'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->hasOne(Lesson::class, 'id', 'lesson_id');
    }

}
