<?php

namespace App\Http\Controllers;
use App\Models\ProcurementModel;
use Illuminate\Http\Request;
use Validator;

class procurementcontroller extends Controller
{
    public function __construct()
    {
        $this->ProcurementModel = new ProcurementModel;

    }
    public function procurementsender()
    {
       
        $data['title'] = '';
        return view('user/procurementsender', $data);
    }
    public function procurementsender_action(Request $request)
    {
        $validation['name'] = ['required'];
        $validation['lastname']=['required'];
        $validation['phonenumber'] = ['required'];
        $validation['address']=['required'];
        $validation['emailid']=['required'];
        $validation['photofile']=['required'];
        $validation['presidentname']=['required'];
        $validation['presidentphonenumber']=['required'];
        $validation['presidentaddress']=['required'];
        $validation['registration_number']=['required'];
        $validation['pemailid']=['required'];
        $validation['padharnumber']=['required'];
        $validation['secretaryname']=['required'];
        $validation['sphonenumber']=['required'];
        $validation['secretaryaddress']=['required'];
        $validation['semailid']=['required'];
        $validation['sadharnumber']=['required'];

        $validator = Validator::make($request->all(), $validation);
        if(!$validator->errors()->all()){


            $this->ProcurementModel->insertData([
                'name' => $request->name,
                'lastname' => $request->lastname,
                'phonenumber'=>$request->phonenumber,
                'address'=>$request->address,
                'emailid'=>$request->emailid,
                'photofile'=>$request->photofile,
                'presidentname'=>$request->presidentname,
                'presidentphonenumber'=>$request->presidentphonenumber,
                'presidentaddress'=>$request->presidentaddress,
                'registration_number'=>$request->registration_number,
                'pemailid'=>$request->pemailid,
                'padharnumber'=>$request->padharnumber,
                'secretaryname'=>$request->secretaryname,
                'sphonenumber'=>$request->sphonenumber,
                'secretaryaddress'=>$request->secretaryaddress,
                'semailid'=>$request->semailid,
                'sadharnumber'=>$request->sadharnumber,
               
                
            ]);
    
    
            return redirect('login')->with('success', 'ProcurementSenderRegistration success. Please login!');
            }
    
            if($validator->errors()->all()) 
            { 
                return redirect("procurementsender")->withErrors($validator)->withInput();
            }
    }

}
