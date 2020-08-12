<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use function GuzzleHttp\Promise\all;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        $user = [
          'name' => $request->username,
          'password' => $request->password
        ];
        if(Auth::attempt($user))
        {
            return view('home');
        }
        else
        {
            return back();
        }
    }
}
