<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comments extends Model
{
    protected $table = 'comments';

    public $timestamps = false;

    protected $guarded = [];

    protected $fillable = [
        'id','comment', 'users_id', 'video_id'
    ];
    public function user() {
        return $this->hasOne(User::class,'users');
    }
    public function video() {
        return $this->hasOne(Video::class, 'video');
    }
}
