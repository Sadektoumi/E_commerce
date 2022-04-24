<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\produit;

class commande extends Model
{

    protected $fillable =['user_id','product_id'];

    public function user() {

        return $this->belongsTo(User::class);
    }

    public function produit() {

        return $this->belongsTo(produit::class);
    }
}
