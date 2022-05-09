<?php

namespace App\Http\Controllers;

use App\Models\intervention;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;
class InterventionController extends Controller
{
    public function createIntervention(Request $request){

        $validator = Validator::make($request->all(),[
         'name' => 'required',
         'type'=>'required',


        ]);
        if($validator->fails()){
            return response(['errors'=>$validator->errors()->all()],400);

        }

        $intervention = New intervention();
        $intervention->name =$request['name'];
        $intervention->type=$request['type'];
        $intervention->maintenance=$request['maintenance'];
        $intervention->prix='#';
        $intervention->etat='en cours';
        $intervention->user_id= $request->user()->id;
        $save = $intervention->save();

        if($save){
            return response()->json([
                'success'=>true,
                'message'=>'intervention successfully created'
            ],201);
        }else{
         return response()->json([
             'success' => false,
             'message' => 'Something went wrong!'
         ], 500);
     }
}


public function interventionsList (Request $request){



    $user=new User();

    $intervention = New intervention();
    $s = $intervention->user_id = $request->user()->id;

    $intervention =intervention::where('user_id',$s)->get();

    return response()->json([
        'message'=>$intervention
    ],201);

}


public function deleteIntervention(Request $request, $id)
  {
     $intervention= intervention::find($id);
      $delete = $intervention->delete();
      if ($delete){
      return  response()->json([
      'success' => true ,
      'message' => 'intervention deleted!'

  ],201);
  }else{
      return response()->json([
          'success' => false,
          'message' => 'Something went wrong!'
      ], 500);
  }


}

public function index(){

    $interventions =intervention::all();
    return view ('interventions.index' , ['interventions' => $interventions]);
}

public function update(Request $request){
    $interventions =intervention::where('id' , $request->id)->update(['etat' => $request->etat]);
    return back();

}


}
