<?php

namespace App\Http\Controllers;
use App\Models\table_data_model;
// use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class formController extends Controller
{ 
    function viewData(){ //post route 
        return view('login');
    }
    function insertData(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");
 
        $name = $req->input('name');  
        $email = $req->input('email');
        $phone = $req->input('phone'); 
        $message = $req->input('message');  

        $filePath = $req->file('file');  
        $upload_path_string = 'public/upload/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload 

        $result= DB::table('data_table')->insert([  
            'name'=>$name,  
            'email'=>$email,
            'phone'=>$phone,
            'file'=> $upload_path_string.$fileName,  
            'message' => $message, 
            'created_at'=>$dateTime
        ]); 
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    }

}
