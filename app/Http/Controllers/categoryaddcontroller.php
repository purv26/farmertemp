<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\CategoryaddModel;
use Illuminate\Http\Request;
use Validator;

class categoryaddcontroller extends Controller
{
    public function __construct()
    {
        $this->CategoryaddModel = new CategoryaddModel;

    }
    public function categoryadd()
    {
       
        $data['title'] = '';
        return view('user/categoryadd', $data);
    }
      
    public function categoryadd_action(Request $request)
    {

        $validation['categoryimage'] = ['required'];
        $validation['cityname']=['required'];
        $validation['harvest']=['required'];
        $validation['demand']=['required'];
        $validation['difference']=['required'];
        
        
        $validator = Validator::make($request->all(), $validation);
    //    print_r($validator->errors()->all());die;
        if(!$validator->errors()->all()){


        $this->CategoryaddModel->insertData([
            'categoryimage' => $request->categoryimage,
            'cityname' => $request->cityname,
            'harvest'=>$request->harvest,
            'demand'=>$request->demand,
            'difference'=>$request->difference,
           
           
        ]);


        return redirect('Dashboard1')->with('success', ' success. ');
        }

        if($validator->errors()->all()) 
        { 
            return redirect("categoryadd")->withErrors($validator)->withInput();
        }

   
    }

}
