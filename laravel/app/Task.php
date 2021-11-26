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
        'achievement_count', 'lesson_id', 'detail',
    ];


}
