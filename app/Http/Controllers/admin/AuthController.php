<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        if(!$request->isMethod('post'))
            return view('front.pages.login');
        else{
            Validator::validate(
                $request->all(),
                [
                    'username_or_email' => ['required', 'min:3', 'max:30', 'unique:users'],
                    'password' => ['required', 'min:5']
                ],
                [] 
            );
        }

    }
}
