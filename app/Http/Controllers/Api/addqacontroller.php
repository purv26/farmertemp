<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\question;
use Illuminate\Http\Request;
use Validator;

class addqacontroller extends Controller
{
    
    public function __construct()
    {
        $this->question= new question;

    }
   
    public function questionans(Request $request)
    {
       
     $user= question::create([
        'question'=>$request->categoryname,
        'answer' => $request->quantity,
        
        
     ]);
     //$token = $user->createToken('token')->accessToken;
     $user->save();
     return response()->json($user);   
    }
    public function show()
    {
        $user=question::all();
        return response()->json($user);
    }
    public function showbyid($id)
    {
        
        $user=question::find($id);
        return response()->json($user);

    }
    public function updatebyid(Request $request,$id)
    {
        $user=question::find($id);
        $user->question = $request->input('question');
        $user->answer= $request->input('answer');
        $user->update();
        return response()->json($user);
    }
    public function deletebyid(Request $request,$id)
    {
        $user=question::find($id);
        $user->delete();
        return response()->json($user);

    }
}
