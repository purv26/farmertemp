<?php

namespace App\Http\Controllers;
use App\Models\TraderModel;
use Illuminate\Http\Request;
use Validator;

class tradercontroller extends Controller
{
    public function __construct()
    {
        $this->TraderModel = new TraderModel;

    }
    public function traderregi()
    {
       
        $data['title'] = '';
        return view('user/traderregi', $data);
    }
    public function traderregi_action(Request $request)
    {


        $validation['name'] =   ['required'];
        $validation['lastname']=['required'];
        $validation['address']=['required'];
        $validation['district']=['required'];
        $validation['state']=['required'];
        $validation['emailid']=['required'];
        $validation['phonenumber']=['required'];
        $validation['gst_number']=['required'];
        $validation['adhar_number']=['required'];
        $validation['photo']=['required'];
        $validation['photofile']=['required'];
    
        $validator = Validator::make($request->all(), $validation);
    //    print_r($validator->errors()->all());die;
        if(!$validator->errors()->all()){


        $this->TraderModel->insertData([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'address'=>$request->address,
            'district'=>$request->district,
            'state'=>$request->state,
            'phone_number'=>$request->phonenumber,
            'emailid'=>$request->emailid,
            'gst_number'=>$request->gst_number,
            'adhar_number'=>$request->adhar_number,
            'photo'=>$request->photo,
            'photofile'=>$request->photofile,
          
            
            
        ]);


        return redirect('login')->with('success', 'TraderRegistration success. Please login!');
        }

        if($validator->errors()->all()) 
        { 
            return redirect("traderregi")->withErrors($validator)->withInput();
        }

   
    }

}
