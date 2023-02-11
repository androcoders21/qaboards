<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\update;

class UpdateController extends Controller
{
    //

    function update(Request $req)
    {
        $update=update::find($req->user_id);
        $update->user_name=$req->user_name;
        $update->user_add=$req->user_add;
        // $newtable->user_num=$req->user_num;
        $result=$update->save();


        //  $values = array('user_name' => $user_name);
        // DB::table('newtable')->where('user_id', $user_id)->update($values);



        if($result)
        {
            return ["Result"=>"chal hi gya"];
        }
        else
        {
            return["Result"=>"nhi nhi chla"];
        }
    }


      function add(Request $req)  
    {
        $update= new update;
        $update->user_name=$req->user_name;
        $update->user_add=$req->user_add;
        $result=$update->save();
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
