<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany('App\Product',
            'basket_product','basket_id',
            'product_id')->withPivot('number');
    }
}
