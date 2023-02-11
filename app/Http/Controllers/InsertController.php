<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insert;
 

class InsertController extends Controller
{
    
    function add(Request $req)  
    {
        $insert= new insert;
        $insert->user_name=$req->user_name;
        $insert->user_phone=$req->user_phone;
        $insert->id=$req->id;
        $result=$insert->save();
        if($result)
        {
            return ["Result"=>"Chal gya"];
        }
        else
        {
            return["Result"=>"nhi chla"];
        }     
    }


    


}
