<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image_url'
    ];
}
