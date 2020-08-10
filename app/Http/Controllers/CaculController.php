<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculController extends Controller
{
    public function cacul(Request $request)
    {
        $total = $request->num1 + $request->num2;
        return view('showCacula',compact('total'));
    }
}
