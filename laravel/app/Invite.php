<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'token', 'expired', 'invite_user_id',
    ];   

    // ゆるキャン△見ろ
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
}
