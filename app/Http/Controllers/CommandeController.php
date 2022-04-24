<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
use App\Models\produit;

class CommandeController extends Controller
{
    public function CommandePost(Request $request) {

     $commande = new commande() ;
     $commande ->user_id= $request->user()->id;
     $commande ->product_id=$request['product_id'];

     $save = $commande->save();

     if($save){
         return response()->json([
             'success'=>true,
             'message'=>'successfully created'
         ],201);
     }else{
      return response()->json([
          'success' => false,
          'message' => 'Something went wrong!'
      ], 500);

    }
}

    public function Getproducts (){



        $result = commande::with('produit')->get();
        foreach($result as $commanderecord){
            $t=$commanderecord->id;
            $s=$commanderecord->produit->produitDesc;
        }
        return response()->json([
            'message'=>$s
        ],201);
    }
}
