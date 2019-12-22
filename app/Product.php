<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'weight',
        'type',
        'price'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(ingredient::class);
    }

    public function baskets()
    {
        return $this->belongsToMany('App\Product',
            'basket_product','product_id',
            'basket_id')->withPivot('number','id');
    }
}
