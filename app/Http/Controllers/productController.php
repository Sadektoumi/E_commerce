<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;
use Illuminate\Support\Facades\Validator;
class productController extends Controller
{
    public function index(){
        $produits =produit::all();
        return view ('product.index' , ['produits' => $produits]);

    }

    public function store(Request $request){
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
           $produit->name =$request['name'];
           $produit->prix =$request['prix'];
           $produit->produitImg=$request['produitImg'];
           $produit->produitDesc=$request['produitDesc'];
           $produit->qteStock=$request['qteStock'];

           $save = $produit->save();

           if($save){
               return back();
           }




    }

    public function edit(Request $request){

    }

    public function delete(Request $request){
        produit::find($request->prod)->delete();
            return back();
    }
    public function update(Request $request, $id)
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
}
