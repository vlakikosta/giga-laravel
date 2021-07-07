<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $fillable = [
        'site_id',
        'name',
        'image',
        'description',
        'url',
        'price'
    ];

    //
}
