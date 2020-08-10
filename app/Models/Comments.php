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
        'id','comment'
    ];
    public function user() {
        return $this->hasOne(User::class);
    }
    public function video() {
        return $this->hasOne(Video::class);
    }
}
