<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    protected $fillable =[
        'libelle',
        'images', 
        'id_categories',
        'description',
        'prix',
        'quantite',
    ];

    // public function categories()
    // {
    //     return $this->BelongsTo('App\Model\Categorie', 'id_categories'); 
    // }
}
