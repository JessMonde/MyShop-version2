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

    public function paniers()
    {
        return $this->belongsTo('App\Model\Panier');
    }
    public function produits()
    {
        return $this->belongsTo('App\Model\Produits');
    }
    public function payements()
    {
        return $this->belongsTo('App\Model\Payement');
    }
}
