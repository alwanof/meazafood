<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'desc', 'unit','price'
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
