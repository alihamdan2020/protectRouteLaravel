<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function check(Request $req){

        $cred=$req->only("email","password");
		//note: ipassword should be hashed to use Auth::attempt, so do not try to enter password manual in data base
		//just create a form an register a user , and as you know in function below, the password had hashed
        if(Auth::attempt($cred))
        return redirect("/");
        else
        return redirect("/products/login")->with("message","wrong username or passwprd");

    } 

    public function signUp(request $req){
        $data=$req->all();
        User::create([
            'name' => "name",
            'email' => $data['email'],
            'password' => hash::make($data['password']),
    ]);
    return redirect("/")->with('message','Your credential has bedd added good, log in please');
    }

    function signOut(){
        session()->flush();
        return redirect("/");
    }
}
