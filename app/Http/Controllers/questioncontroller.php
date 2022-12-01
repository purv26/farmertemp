<?php

namespace App\Http\Controllers;
use App\Models\FarmerquestionModel;
use Illuminate\Http\Request;
use Validator;

class questioncontroller extends Controller
{
    public function __construct()
    {
        $this->FarmerquestionModel = new FarmerquestionModel;
    }
    public function farmerquestion()
    {
        $data['title'] = '';
        return view('user/farmerquestion', $data);
    }
    public function farmerquestion_action(Request $request)
    {

        $validation['landpreparationimplement'] = ['required'];
        $validation['labours']=['required'];
        $validation['wages']=['required'];
        $validation['variety']=['required'];
        $validation['availibility_seeds']=['required'];
        $validation['irrigation_methods']=['required'];
        $validation['sowing_methods']=['required'];
        $validation['sowing_method_wage']=['required'];
        $validation['weed_total_wage']=['required'];
        $validation['paste_control']=['required'];
        $validation['harvesting_methods']=['required'];

        $validator = Validator::make($request->all(), $validation);
    //    print_r($validator->errors()->all());die;
        if(!$validator->errors()->all()){

        $this->FarmerquestionModel->insertData([
            'landpreparationimplement' => $request->landpreparationimplement, 
            'labours' => $request->labours,   
            'wages' => $request->wages,
            'variety' => $request->variety, 
            'availibility_seeds' => $request->availibility_seeds, 
            'irrigation_methods' => $request->irrigation_methods,
            'sowing_methods' => $request->sowing_methods, 
            'sowing_method_wage' => $request->sowing_method_wage, 
            'nutrient_management' => $request->nutrient_management, 
            'weed_total_wage' => $request->weed_total_wage, 
            'paste_control' => $request->paste_control,
            'harvesting_methods' => $request->harvesting_methods,  
        ]);


        return redirect('login')->with('success', 'TraderRegistration success. Please login!');
        }

        if($validator->errors()->all()) 
        { 
            return redirect("farmerquestion")->withErrors($validator)->withInput();
        }

   
    }

}
