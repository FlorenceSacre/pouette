<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $table = 'video';

    public $timestamps = false;

    protected $guarded = [];

    protected $fillable = [
        'id','titre', 'video','image'
    ];
}
