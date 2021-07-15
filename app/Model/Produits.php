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

    public function categories()
    {
        return $this->BelongsTo('App\Model\Categorie'); 
    }
    public function images(){
        return $this->hasMany('App\Model\Images');
    }
    public function LigneCommandes()
    {
        return $this->hasMany('App\Model\Ligne_commande');
    }
    public function favories()
    {
        return $this->hasMany('App\Model\Favorie');
    }
}
