<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'name',
        'amount',
        'description',
        'category_id',
    ];
}
