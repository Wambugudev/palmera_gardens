<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class AddAlcoholItem extends Model
{
    protected $fillable = [
        'name', 'quantity', 'type','package',
    ];
}
