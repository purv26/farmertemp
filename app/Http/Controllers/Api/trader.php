<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\TraderModel;
use Illuminate\Http\Request;
use Validator;



class trader extends Controller
{
    
    public function __construct()
    {
        $this->TraderModel = new TraderModel;

    }
    
    public function trader(Request $request)
    {
       
     $user= TraderModel::create([
        'name'=>$request->name,
        'lastname' => $request->lastname,
        'address' => $request->address,
        'district' => $request->district,
        'state' => $request->state,
        'emailid' => $request->	emailid,
        'phone_number' => $request->phone_number,
        'gst_number' => $request->gst_number,
        'adhar_number' => $request->adhar_number,
        'photo' => $request->photo,
        'photofile' => $request->photofile,
     ]);
     //$token = $user->createToken('token')->accessToken;
     $user->save();
     return response()->json($user);

     
    }
    public function show()
    {
        $user=TraderModel::all();
        return response()->json($user);
    }
    public function showbyid($id)
    {
        
        $user=TraderModel::find($id);
        return response()->json($user);

    }
    public function updatebyid(Request $request,$id)
    {
        $user=TraderModel::find($id);
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->address = $request->input('address');
        $user->district = $request->input('district');
        $user->state = $request->input('state');
        $user->emailid = $request->input('emailid');
        $user->phone_number = $request->input('phone_number');
        $user->gst_number = $request->input('gst_number');
        $user->adhar_number = $request->input('adhar_number');
        $user->photo = $request->input('photo');
        $user->photofile = $request->input('photofile');

        $user->update();
        return response()->json($user);
    }
    public function deletebyid(Request $request,$id)
    {
        $user=TraderModel::find($id);
        $user->delete();
        return response()->json($user);

    }
   

    
}
