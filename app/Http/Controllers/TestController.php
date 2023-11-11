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
}
