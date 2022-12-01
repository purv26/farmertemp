<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Vfpcktrader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;


class vfpckauthcontroller extends Controller
{
    public function __construct()
    {
        $this->Vfpcktrader = new Vfpcktrader;

    }

    public function traderregister(Request $request)
    {
       
     $user= Vfpcktrader::create([
        'phonenumber'=>$request->phonenumber,
        'password' => Hash::make($request->password),
        'password_confirm'=>Hash::make($request->password_confirm),
     ]);
 
     //$token = $user->createToken('token')->accessToken;

       return response()->json(['token'=>[],'user'=>$user]);
    }
    public function show()
    {
        $user=Vfpcktrader::all();
        return response()->json($user);
    }
    public function showbyid($id)
    {
        
        $user=Vfpcktrader::find($id);
        return response()->json($user);

    }
    public function updatebyid(Request $request,$id)
    {
        $user=Vfpcktrader::find($id);
        $user->phonenumber = $request->input('phonenumber');
        $user->password = $request->input('password');
        $user->password_confirm= $request->input('password_confirm');
       
        $user->update();
        return response()->json($user);
    }
    public function deletebyid(Request $request,$id)
    {
        $user=Vfpcktrader::find($id);
        $user->delete();
        return response()->json($user);

    }
   
    public function traderlogin(Request $request)
    {
        $data=[
            'phonenumber' =>$request->phonenumber,
        ];
        if(auth()->attempt($data)){
            //$token=auth()->user()->createToken('Token')->accessToken;
            return response()->json(['token'=>[],'user'=>$data]);
        }
        else{
            return response()->json(['error'=>[],'unauthorised'],401);

        }

    }

    
}