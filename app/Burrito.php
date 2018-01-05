<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Burrito extends Model
{
    protected $fillable = ['location', 'address', 'originality', 'price_point', 'description', 'image_path'];
}
