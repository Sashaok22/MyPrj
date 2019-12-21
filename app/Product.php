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

    public function ingredients()
    {
        return $this->belongsToMany(ingredient::class);
    }

    public function Basket()
    {
        return $this->HasMany(Basket::class);
    }
}
