<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['city', 'country', 'img_', 'description', 'price'];
}
