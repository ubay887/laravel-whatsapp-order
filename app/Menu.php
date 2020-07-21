<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable = ['product_id', 'name', 'img', 'old_price', 'new_price'];
}
