<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable =[
        'liens',
        'id_produits', 
    ];

   public function produits(){
       return $this->belongsTo('App\Model\Produits');
   }
}
