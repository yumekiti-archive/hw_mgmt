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
        'achievement_count', 'lesson_id', 'detail'
    ];

    /**
    *   task所有userの取得
    */
    public function user()
    {
        return $this->belongsTo(User::class);
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
