<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\FarmerModel;
use Illuminate\Http\Request;
use Validator;

class farmergroupcontroller extends Controller
{
    
    public function __construct()
    {
        $this->FarmerModel = new FarmerModel;

    }
    public function farmergroup(Request $request)
    {
       
     $user= FarmerModel::create([
        'name'=>$request->name,
        'villagename' => $request->villagename,
        'piname' => $request->piname,
        'piemail' => $request->piemail,
        'icontactnumber' => $request->icontactnumber,
        'photo' => $request->photo,
        
     ]);
     //$token = $user->createToken('token')->accessToken;
     $user->save();
     return response()->json($user);

     
    }
    public function show()
    {
        $user=FarmerModel::all();
        return response()->json($user);
    }
    public function showbyid($id)
    {
        
        $user=FarmerModel::find($id);
        return response()->json($user);

    }
    public function updatebyid(Request $request,$id)
    {
        $user=FarmerModel::find($id);
        $user->name = $request->input('name');
        $user->villagename = $request->input('villagename');
        $user->piname = $request->input('piname');
        $user->piemail = $request->input('piemail');
        $user->icontactnumber = $request->input('icontactnumber');
        $user->photo = $request->input('photo');
      
        $user->update();
        return response()->json($user);
    }
    public function deletebyid(Request $request,$id)
    {
        $user=FarmerModel::find($id);
        $user->delete();
        return response()->json($user);

    }
}
