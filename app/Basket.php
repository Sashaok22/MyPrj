<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Product()
    {
        return $this->belongsToMany(Product::class);
    }
}
