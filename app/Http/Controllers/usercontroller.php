<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;


class UserController extends Controller
{
    public function __construct()
    {
        $this->UserModel = new UserModel;

    }

    public function register()
    {
       
        $data['title'] = '';
        return view('user/register', $data);
        //return response()->json($data);
        
    }
   
    public function register_action(Request $request)
    {
        $validation['name'] =   ['required'];  
        $validation['lastname']=['required'];
        $validation['phonenumber']=['required'];
        $validation['username']=['required'];
        $validation['address']=['required'];
        $validation['village']=['required'];
        $validation['district']=['required'];
        $validation['pincode']= ['required'];
        $validation['state']=['required'];
        $validation['shgname']= ['required'];
        $validation['photo']=['required'];
        $validation['adharnumber']= ['required'];
        $validation['username'] = ['required','unique:tb_user'];
        $validation['password'] = ['required'];
        $validation['password_confirm'] = ['required','same:password'];
    
        $validator = Validator::make($request->all(), $validation);
      //print_r($validator->errors()->all());
    //die;
        if(!$validator->errors()->all()){


        $this->UserModel->insertData([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phonenumber'=>$request->phonenumber,
            'email'=>$request->email,
            'address'=>$request->address,
            'village'=>$request->village,
            'district'=>$request->district,
            'pincode'=>$request->pincode,
            'state'=>$request->state,
            'shgname'=>$request->shgname,
            'photo'=>$request->photo,
            'adharnumber'=>$request->adharnumber,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'password_confirm'=>Hash::make($request->password_confirm),
        ]);


        return redirect('login')->with('success', 'Registration success. Please login!');
        }

        if($validator->errors()->all()) 
        { 
            return redirect("login")->withErrors($validator)->withInput();
        }

   
    }
    
    public function Dashboard1()
    {
       
        $data['title'] = '';
        return view('user/Dashboard1', $data);
    }


    public function login()
    {
        
        $data['title'] = '';
        return view('user/login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username'=>$request->username, 'password'=> $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('Dashboard1');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}