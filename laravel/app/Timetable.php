<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Lesson;
use App\LessonColor;

class Timetable extends Model
{
    protected $fillable = [
        'week_count', 'period', 'lesson_id',
    ];
    
    protected $hidden = [
        'id', 'user_id', 'lesson_id', 'updated_at'
    ];

    // public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function lesson(){
        return $this->hasOne(Lesson::class, 'id', 'lesson_id');
    }

    public function lesson_color(){
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
