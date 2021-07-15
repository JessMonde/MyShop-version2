<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ligne_commande extends Model
{
    protected $fillable = [
        'prix',
        'quantite',
        'id_paniers',
        'id_produits',
    ];
}
