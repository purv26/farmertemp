<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\FarmerItemquantityModel;
use Illuminate\Http\Request;
use Validator;

class farmeraddquantitycontroller extends Controller
{
    
    public function __construct()
    {
        $this->FarmerItemquantityModel = new FarmerItemquantityModel;
    }
   
    public function itemquantity(Request $request)
    {
       
     $user=FarmerItemquantityModel::create([
        'categoryname'=>$request->categoryname,
        'quantity' => $request->quantity,
        'categoryimage'=>$request->categoryimage,
        'categoryid'=>$request->categoryid,

        
     ]);
     //$token = $user->createToken('token')->accessToken;
     $user->save();
     return response()->json($user);

     
    }
    public function show()
    {
        $user=FarmerItemquantityModel::all();
        return response()->json($user);
    }
    public function showbyid($id)
    {
        
        $user=FarmerItemquantityModel::find($id);
        return response()->json($user);

    }
    public function updatebyid(Request $request,$id)
    {
        $user=FarmerItemquantityModel::find($id);
        $user->categoryname = $request->input('categoryname');
        $user->quantity = $request->input('quantity');
        $user->categoryimage = $request->input('categoryimage');
        $user->categoryid = $request->input('categoryid');

        $user->update();
        return response()->json($user);
    }
    public function deletebyid(Request $request,$id)
    {
        $user=FarmerItemquantityModel::find($id);
        $user->delete();
        return response()->json($user);

    }
}
