<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $fillable = [
        'id_Users',
        'total',
    ];
}
