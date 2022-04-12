<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Rules\MaxWordsRule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function listAll(){
        $users = User::all();
        return view('admin.user.list_users')->with('allUsers', $users);
    }
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
    public function register(Request $request){
        if(!$request->isMethod('post')){
            return view('front.pages.signup');
        }
        else{
            Validator::validate($request->all(),[
                'firstname'         => ['required', 'string', 'min:3', 'max:30', new MaxWordsRule(2)],
                'lastname'         => ['required', 'string', 'min:3', 'max:30', new MaxWordsRule(1)],
                'username'          => ['required', 'string', 'min:3', 'max:30', new MaxWordsRule(1)],
                'email'             => 'required|email',
                'password'          => ['required','min:5', 'max:15', Password::min(8)
                                                                        ->letters()
                                                                        ->mixedCase()
                                                                        ->numbers()
                                                                        ->symbols()
                                                                        ->uncompromised()],
                'confirm_password'  => 'required|same:password',
                'phone'             => 'required',
            ], []);
            
            $user            = new User();
            $user->firstname = $request->input('firstname');
            $user->lastname  = $request->input('lastname');
            $user->username  = $request->input('username');
            $user->password  = Hash::make($request->input('password'));
            $user->email     = $request->input('email');
            $user->phone     = $request->input('phone');
            if($user->save()){
                $user->attachRole('admin');
                return redirect()->route('home')->with(['success'=>'user created successful']);
            }

            return back()->with(['error'=>'can not create user']);        
        }
        
    }
}
