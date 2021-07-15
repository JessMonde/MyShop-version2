<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Favorie extends Model
{
    protected $fillable = [
        'id_favorie',
    ];
    public function produits()
    {
        return $this->belongsTo('App\Model\Produits');
    }
}
