<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    protected $fillable = ['image', 'title', 'price', 'status', 'url'];
}

