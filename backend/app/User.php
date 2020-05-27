<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'password', 'address', 'number', 'dob', 'role'
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
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * The products that have the user in cart-items pivot.
     */
    public function products()
    {
        return $this->belongsToMany('App\Product','dc-cart-items')->withPivot('quantity');
    }

    /**
     * =================================
     *  WEATHER APP 
     * =================================
     */

     /**
      * The cities that belong to the user (User has choosen)
      */
     public function cities(){
        return $this->belongsToMany('App\WeatherAppModels\City','weatherapp-users-cities')->withTimestamps();
     }

    protected $table = 'dc-users';
}
