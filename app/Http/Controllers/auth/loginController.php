<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function Login(Request $request){



        $validator =  Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response(['errors'=>$validator->errors()->all()], 400);

        }



        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 401);

        $user = $request->user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
                    'message'=>'Connected', $user,
                   'access_token' => $token,
        ]);
    }
public function logout(Request $request){
 $s=$request->user()->tokens();
 $s->delete();



 return response()->json([
     'message'=>$s,
     'message' => 'logged out sccuessfuly'
 ]);

}




}
