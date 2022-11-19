<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\ProcurementModel;
use Illuminate\Http\Request;
use Validator;
class Procurementcontroller extends Controller
{
    
    public function __construct()
    {
        $this->ProcurementModel = new ProcurementModel;

    }
    public function procurement(Request $request)
    {
       
     $user= ProcurementModel ::create([
        'name'=>$request->name,
        'lastname' => $request->lastname,
        'phonenumber' => $request->phonenumber,
        'address' => $request->address,
        'emailid' => $request->	emailid,
        'photofile' => $request->photofile,
        'presidentname' => $request->presidentname,
        'presidentphonenumber'=>$request->presidentphonenumber,
        'presidentaddress' => $request->presidentaddress,
        'registration_number' => $request->registration_number,
        'pemailid' => $request->pemailid,
        'padharnumber' => $request->padharnumber,
        'secretaryname' => $request->secretaryname,  
        'sphonenumber' => $request->sphonenumber,
        'secretaryaddress' => $request->secretaryaddress,
        'semailid' => $request->semailid,
        'sadharnumber' => $request->sadharnumber,
       
       
     ]);
     //$token = $user->createToken('token')->accessToken;
     $user->save();
     return response()->json($user);

     
    }
    public function show()
    {
        $user=ProcurementModel::all();
        return response()->json($user);
    }
    public function showbyid($id)
    {
        
        $user=ProcurementModel::find($id);
        return response()->json($user);

    }
    public function updatebyid(Request $request,$id)
    {
        $user=ProcurementModel::find($id);
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->phonenumber = $request->input('phonenumber');
        $user->address = $request->input('address');
        $user->emailid = $request->input('emailid');
        $user->photofile= $request->input('photofile');
        $user->presidentname = $request->input('presidentname');
        $user->presidentphonenumber = $request->input('presidentphonenumber');
        $user->presidentaddress = $request->input('presidentaddress');
        $user->registration_number = $request->input('registration_number');
        $user->pemailid = $request->input('pemailid');
        $user->padharnumber = $request->input('padharnumber');
        $user->secretaryname = $request->input('secretaryname');
        $user->sphonenumber = $request->input('sphonenumber');
        $user->secretaryaddress = $request->input('secretaryaddress');
        $user->semailid = $request->input('semailid');
        $user->sadharnumber = $request->input('sadharnumber');
    
        $user->update();
        return response()->json($user);
    }
    public function deletebyid(Request $request,$id)
    {
        $user=ProcurementModel::find($id);
        $user->delete();
        return response()->json($user);

    }
}