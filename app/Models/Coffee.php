<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;
    protected $table = 'coffees';

    protected $fillable = [
        'name',
        'phone',
        'address',
        'guide_phone',
        'price_list',
        'description'
    ];
}
