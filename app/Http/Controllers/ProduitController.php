<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;

use Illuminate\Support\Facades\Validator;

class ProduitController extends Controller
{
  public function createProduit(Request $request){
   $validator = Validator::make($request->all(),[
    'prix' => 'required',
    'produitImg'=>'required',
    'produitDesc'=>'required',
    'qteStock'=>'required',

   ]);
   if($validator->fails()){
       return response(['errors'=>$validator->errors()->all()],400);

   }

   $produit = New produit();
   $produit->prix =$request['prix'];
   $produit->produitImg=$request['produitImg'];
   $produit->produitDesc=$request['produitDesc'];
   $produit->qteStock=$request['qteStock'];

   $save = $produit->save();

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


  public function UpdateProduit(Request $request, $id)
  {
    $produit= produit::find($id);

    $produit->prix = $request->get['prix'];
    $produit->produitImg  =  $request->get['produitImg'];
    $produit->produitDesc = $request->get['porduitDesc'];
    $produit->qteSock=$request->get['qteStock'];

    $save = $produit->save();

    if($save){
        return response()->json([
            'success'=>true,
            'message'=>'successfully updated'
        ,201]);
    }else{
     return response()->json([
         'success' => false,
         'message' => 'Something went wrong!'
     ], 500);


  }
}

  public function DeleteProduit(Request $request, $id)
  {
     $produit= produit::find($id);
      $delete = $produit->delete();
      if ($delete){
      return  response()->json([
      'success' => true ,
      'message' => 'produit deleted!'

  ],201);
  }else{
      return response()->json([
          'success' => false,
          'message' => 'Something went wrong!'
      ], 500);
  }


}

public function index (){
    $produits =produit::all();

    return response()->json([
        'message'=>$produits,
    ],201);

}
}
