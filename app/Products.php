<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $visible = ['id', 'name', 'category_id', 'purchase_price', 'photo', 'description'];
}
