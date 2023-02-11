<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getData()
    {
            $var =  "'id':'vrtbg'";
           echo  json_encode($var);

    }
}
