<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\FarmerquestionModel;
use Illuminate\Http\Request;
use Validator;

class farmerquestioncontroller extends Controller
{
    
    public function __construct()
    {
        $this->FarmerquestionModel = new FarmerquestionModel;

    }
    public function farmerquestion(Request $request)
    {  
     $user= FarmerquestionModel::create([
        'landpreparationimplement'=>$request->landpreparationimplement,
        'labours' => $request->labours,   
        'wages' => $request->wages,
        'variety' => $request->variety, 
        'irrigation_methods' => $request->irrigation_methods,
        'sowing_methods' => $request->sowing_methods, 
        'sowing_method_wage' => $request->sowing_method_wage, 
        'nutrient_management' => $request->nutrient_management, 
        'weed_total_wage' => $request->weed_total_wage, 
        'paste_control' => $request->paste_control,
        'harvesting_methods' => $request->harvesting_methods,      
     ]);
     //$token = $user->createToken('token')->accessToken;
     $user->save();
     return response()->json($user);
    }
    public function show()
    {
        $user=FarmerquestionModel::all();
        return response()->json($user);
    }
    public function showbyid($id)
    { 
        $user=FarmerquestionModel::find($id);
        return response()->json($user);
    }
    public function updatebyid(Request $request,$id)
    {
        $user=FarmerquestionModel::find($id);
        $user->landpreparationimplement = $request->input('landpreparationimplement');
        $user->labours = $request->input('labours');
        $user->wages = $request->input('wages');
        $user->variety = $request->input('variety');
        $user->irrigation_methods = $request->input('irrigation_methods');
        $user->sowing_methods= $request->input('sowing_methods');
        $user->sowing_method_wage = $request->input('sowing_method_wage');
        $user->nutrient_management = $request->input('nutrient_management');
        $user->weed_total_wage = $request->input('weed_total_wage');
        $user->paste_control = $request->input('paste_control');
        $user->harvesting_methods = $request->input('harvesting_methods');
      
        $user->update();
        return response()->json($user);
    }
    public function deletebyid(Request $request,$id)
    {
        $user=FarmerquestionModel::find($id);
        $user->delete();
        return response()->json($user);

    }
}
