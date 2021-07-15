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
    public function LigneCommandes()
    {
        return $this->belongsTo('App\Model\Ligne_commande');
    }
}
