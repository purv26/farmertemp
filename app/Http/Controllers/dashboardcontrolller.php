<?php

namespace App\Http\Controllers;
use App\Models\CategoryaddModel;



use Illuminate\Http\Request;

class dashboardcontrolller extends Controller
{
    public function __construct()
    {
        $this->CategoryaddModel  = new CategoryaddModel ;

    }
   
    public function Dashboard1()
    {
       // $data['category'] = CategoryModel::orderBy('id','desc')->get();
       // return view('user/Dashboard1', $data);
       
       $data['title'] = '';
       return view('user/Dashboard1', $data);
    }
   
    
}
