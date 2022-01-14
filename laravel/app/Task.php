<?php

namespace App;

use Illuminate\Foundation\Auth\Task as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Task extends Model
{

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'achievement', 'lesson_id', 'detail'
    ];

    protected $hidden = [
        'lesson_id', 'user_id', 'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->hasOne(Lesson::class, 'id', 'lesson_id');
    }

    public function lesson_color()
    {
        return $this->hasOne(LessonColor::class, 'lesson_id', 'lesson_id');
    }

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::orderedUuid();
        });
    }
}
