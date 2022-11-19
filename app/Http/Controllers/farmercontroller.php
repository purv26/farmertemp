<?php

namespace App\Http\Controllers;
use App\Models\FarmerModel;
use Validator;
use Illuminate\Http\Request;

class farmercontroller extends Controller
{
    public function __construct()
    {
        $this->FarmerModel = new FarmerModel;

    }
    public function farmerregi()
    {
       
        $data['title'] = '';
        return view('user/farmerregi', $data);
    }
    public function farmerregi_action(Request $request)
    {

        $validation['name'] = ['required'];
        $validation['villagename']=['required'];
        $validation['piname']=['required'];
        $validation['piemail']=['required'];
        $validation['icontactnumber']=['required'];
        $validation['photo']=['required'];
        
        $validator = Validator::make($request->all(), $validation);
    //    print_r($validator->errors()->all());die;
        if(!$validator->errors()->all()){


        $this->FarmerModel->insertData([
            'name' => $request->name,
            'villagename' => $request->villagename,
            'piname'=>$request->piname,
            'piemail'=>$request->piemail,
            'icontactnumber'=>$request->icontactnumber,
            'photo'=>$request->photo,
           
        ]);


        return redirect('login')->with('success', 'FarmerGroupRegistration success. Please login!');
        }

        if($validator->errors()->all()) 
        { 
            return redirect("farmerregi")->withErrors($validator)->withInput();
        }

   
    }

}
