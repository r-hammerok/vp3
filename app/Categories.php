<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;

    protected $visible = ['id', 'name', 'description'];
    protected $fillable = ['name', 'description'];
    //
}
