<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable =[
        'libelle',
    ];
    // public function produits()
    // {
    //     return $this->hasMany('App\Model\Produits', 'id_produits'); 
    // }

}
