<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function product()
    {
        return $this->hasOne(Products::class, 'id', 'id_product');
    }
}
