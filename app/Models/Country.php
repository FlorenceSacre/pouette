<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Country extends Model
{
    protected $table = 'country';

    public $timestamps = false;

    protected $guarded = [];

    protected $fillable = [
        'id','name'
    ];
    public function user() {
        return $this->hasMany(User::class);
    }
}
