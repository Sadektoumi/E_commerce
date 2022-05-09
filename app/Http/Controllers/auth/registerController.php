<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class registerController extends Controller
{
    public function Register (Request $request) {
         $validator = Validator::make($request->all(), [
             'nom' => 'required|string|max:255',
             'prenom' => 'required|string|max:255',
             'pseudo' => 'required|string|max:255',
             'cin' => 'required|string|max:255',
             'codePostal' => 'required|string|max:255',
            'sexe' => 'required|string|max:255',

             'telephone' => 'required|string|max:255',
             'adresse' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'password' => 'required|string|min:6',
         ]);
         if ($validator->fails())
         {
             return response(['errors'=>$validator->errors()->all()], 400);
         }

        $user = New User() ;
        $user->id = Str::uuid();
        $user->nom = $request['nom'];
        $user->prenom = $request['prenom'];
        $user->pseudo= $request['pseudo'];
        $user->cin = $request['cin'];
        $user->adresse = $request['adresse'];
        $user->telephone = $request['telephone'];
        $user->codePostal = $request['codePostal'];
        $user->sexe = $request['sexe'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $save = $user->save();

        if($save){
            return response()->json([
                'success' => true,
                'message' => 'Successfully created user!'
            ], 201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!'
            ], 500);
        }
    }
}
