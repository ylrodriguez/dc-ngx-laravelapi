<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'brand', 'description', 'price', 'offerDiscount','category_id'
    ];

     /**
     * Get the images for the product.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }


    /**
     * The users that have the product in cart-items pivot.
     */
    public function users()
    {
        return $this->belongsToMany('App\User','dc-cart-items')->withPivot('quantity');;
    }


    protected $table = 'dc-products';
}
