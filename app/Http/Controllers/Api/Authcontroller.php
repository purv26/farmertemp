<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->UserModel = new UserModel;

    }



    public function register(Request $request)
    {
       
     $user= UserModel::create([
        'name'=>$request->name,
        'lastname' => $request->lastname,
        'phonenumber'=>$request->phonenumber,
        'emailid'=>$request->emailid,
        'address'=>$request->address,
        'village'=>$request->village,
        'district'=>$request->district,
        'pincode'=>$request->pincode,
        'state'=>$request->state,
        'sfgname'=>$request->sfgname,
        'photo'=>$request->photo,
        'adharnumber'=>$request->adharnumber,
        'username' => $request->username,
        'password' => Hash::make($request->password),
     ]);
 
     //$token = $user->createToken('token')->accessToken;

       return response()->json(['token'=>[],'user'=>$user]);

    }
    
    public function login(Request $request)
    {
        $data=[
            'username' => $request->username,
            'password' =>$request->password,
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