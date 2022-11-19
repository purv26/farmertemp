<?php

namespace App\Http\Controllers;
use App\Models\FarmeritemquantityModel;
use Illuminate\Http\Request;
use Validator;

class additemquantity extends Controller
{
    public function __construct()
    {
        $this->FarmeritemquantityModel = new FarmeritemquantityModel;

    }
    public function farmeraddquantity()
    {
       
        $data['title'] = '';
        return view('user/farmeraddquantity', $data);
    }
    public function farmeraddquantity_action(Request $request)
    {

        $validation['categoryname'] = ['required'];
        $validation['quantity']=['required'];
         
        $validator = Validator::make($request->all(), $validation);
    
        if(!$validator->errors()->all()){


        $this->FarmeritemquantityModel->insertData([
            'categoryname' => $request->categoryname,
            'quantity' => $request->quantity,
            
        ]);


        return redirect('login')->with('success', ' success. Please login!');
        }

        if($validator->errors()->all()) 
        { 
            return redirect("farmeraddquantity")->withErrors($validator)->withInput();
        }

   
    }

}
