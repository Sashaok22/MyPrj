<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    public function products()
    {
        return $this->HasMany(Product::class);
    }
}
