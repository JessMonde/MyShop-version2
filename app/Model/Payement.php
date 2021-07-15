<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    protected $fillable = [
        'montant',
        'recu',
        'id_lignecom',
    ];
}
