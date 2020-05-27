<?php

namespace App\WeatherAppModels;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'country', 'countryCode', 'slug', 'imgUrl'
    ];

    /**
     * =================================
     *  WEATHER APP 
     * =================================
     */

     /**
      * The users that have choosen a city
      */
      public function users(){
        return $this->belongsToMany('App\User','weatherapp-users-cities')->withTimestamps();
     }

     protected $table = 'weatherapp-cities';
}
