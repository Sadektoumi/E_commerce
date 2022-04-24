<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\commande;


class produit extends Model
{
    protected $fillable =[
        'prix',
        'produitImg',
        'produitDesc',
        'qteStock',


];

public function commandes(){
    return $this->hasMany(commande::class);
}

}
