<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $myObj = (object)[];
        $myObj->name = "Quyền cute";
        $myObj->age = 17;
        $myObj->city = "New York";
        $myJSON = json_encode($myObj);

        return response()->json($myJSON, 200);
    }
}
