<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    protected $fillable = [
        'date_livraison',
        'adr_livraison',
        'facturation',
        'id_panier',
    ];
    public function paniers()
    {
        return $this->belongsTo('App\Model\Panier');
    }
}
