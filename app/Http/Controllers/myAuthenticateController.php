<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use App\Http\Requests\Auth\RegisterRequest;


class myAuthenticateController extends Controller
{
    public function showRegister() {
        return view('auth.register');
    }

    public function updateRegister(Request $request)
    {  
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect->route("client.report")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'firstname' => $data['firstname'],
        'lastname' => $data['lastname'],
        'email' => $data['email'],
        'idcard' => $data['txtCMND'],
        'birthday' => $data['birthday'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return redirect()->route('url.homepage');
    }
}
