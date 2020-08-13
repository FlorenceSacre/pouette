<?php

namespace App;

use App\Models\Subscriptions;
use App\Models\Country;
use App\Models\Comments;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
        'remember_token' => 'required',
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'street', 'postcode', 'city', 'country', 'email', 'password', 'role', 'country_id'
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    public function subscription() {
        return $this->hasMany(Subscriptions::class);
    }
    public function country() {
        return $this->belongsTo(Country::class,'country');
    }
    public function comments() {
        return $this->hasOne(Comments::class);
    }
}
