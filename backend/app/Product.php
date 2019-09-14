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
        'name', 'brand', 'description', 'price', 'offerDiscount'
    ];

     /**
     * Get the images for the product.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    protected $table = 'dc-products';
}
