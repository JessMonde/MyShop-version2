<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $fillable = [
        'id_Users',
        'total',
    ];
    public function users()
    {
        return $this->belongsTo('App\Model\User');
    }
    public function livraisons()
    {
        return $this->hasMany('App\Model\Livraison');
    }
    public function LigneCommandes()
    {
        return $this->hasMany('App\Model\Ligne_commande');
    }
   
}
