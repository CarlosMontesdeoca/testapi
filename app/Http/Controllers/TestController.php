<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test() {
        $resp = [
            "Code" => 210,
            "Info" => "login success"
        ];
        return response()->json($resp, 200);
    }

    
    public function test2() {
        $resp = [
            "Code" => 200,
            "Info" => "login success"
        ];
        return response()->json($resp, 200);
    }
}
