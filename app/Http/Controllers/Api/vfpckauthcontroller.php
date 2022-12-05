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
       
     $trader= Vfpcktrader::create([
        'phonenumber'=>$request->phonenumber,
        'password' => Hash::make($request->password),
        'password_confirm'=>Hash::make($request->password_confirm),
     ]);
 
     //$token = $user->createToken('token')->accessToken;

       return response()->json(['token'=>[],'trader'=>$trader]);
    }
    public function show()
    {
        $vfpcktrader=Vfpcktrader::select("*")->get();
        return response()->json($vfpcktrader);
    }
    public function showbyid($id)
    {
        
        $vfpcktrader=Vfpcktrader::find($id);
        return response()->json($vfpcktrader);

    }
    public function updatebyid(Request $request,$id)
    {
        $vfpcktrader=Vfpcktrader::find($id);
        $vfpcktrader->phonenumber = $request->input('phonenumber');
        $vfpcktrader->password = $request->input('password');
        $vfpcktrader->password_confirm= $request->input('password_confirm');
       
        $vfpcktrader->update();
        return response()->json($vfpcktrader);
    }
    public function deletebyid(Request $request,$id)
    {
        $vfpcktrader=Vfpcktrader::find($id);
        $vfpcktrader->delete();
        return response()->json($vfpcktrader);

    }
   
    public function traderlogin(Request $request)
    {
        $data=[
            'phonenumber' =>$request->phonenumber,
        ];
        if(auth()->attempt($data)){
            //$token=auth()->user()->createToken('Token')->accessToken;
            return response()->json(['token'=>[],'vfpcktrader'=>$data]);
        }
        else{
            return response()->json(['error'=>[],'unauthorised'],401);

        }

    }

    
}