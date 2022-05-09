<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
use App\Models\produit;

class CommandeController extends Controller
{
    public function CommandePost(Request $request) {

      $commande = new commande() ;
      $commande->user_id= $request->user()->id;
      $commande->Description =  json_encode($request->description);
      $save = $commande->save();

     if($save){
         return response()->json([
              'success'=>true,
         'message'=>'successfully created'
          ],201);
      }else{
      return response()->json([
          'success' => false,
          'message' => 'somthing went wrong'
      ], 500);

     }
}

    public function GetproductByID ($id){

        try{
            $product = produit::where('id' , $id)->get();
            if($product){
                return response()->json([
                    'message'=> 'data retrived succefully' ,
                    'data' => $product
                ],200);
            }
            else{
                return response()->json([
                    'message'=> 'no product found' ,

                ],200);
            }

        }catch (\Throwable $th){
            return response()->json([
                'message'=> 'something went wrong '
            ],500);
        }

    }

    public function index(){
        $commandes = commande::get()->toArray();

        return view ('commande.index' , ['commandes' =>$commandes]);
    }
}
