<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Invite extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'token', 'expired', 'invite_user_id',
    ];   

    // ゆるキャン△見ろ
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, "invite_user_id");
    }

}
