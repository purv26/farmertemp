<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\FarmeritemquantityModel;
use Illuminate\Http\Request;
use Validator;

class farmeraddquantitycontroller extends Controller
{
    
    public function __construct()
    {
        $this->FarmeritemquantityModel = new FarmeritemquantityModel;

    }
   
    public function itemquantity(Request $request)
    {
       
     $user=FarmeritemquantityModel::create([
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
        $user=FarmeritemquantityModel::all();
        return response()->json(['user'=>$user],200);
    }
    public function showbyid($id)
    {
        
        $user=FarmeritemquantityModel::find($id);
        return response()->json($user);

    }
    public function updatebyid(Request $request,$id)
    {
        $user=FarmeritemquantityModel::find($id);
        $user->categoryname = $request->input('categoryname');
        $user->quantity = $request->input('quantity');
        $user->categoryimage = $request->input('categoryimage');
        $user->categoryid = $request->input('categoryid');

        $user->update();
        return response()->json($user);
    }
    public function deletebyid(Request $request,$id)
    {
        $user=FarmeritemquantityModel::find($id);
        $user->delete();
        return response()->json($user);

    }
}
