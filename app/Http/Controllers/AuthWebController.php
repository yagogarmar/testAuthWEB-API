<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthWebController extends Controller
{
    public function login(Request $request){
        
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,

        ];

        

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return response()->json([
                "message"=> "Incio de sesion correcto"
            ],200);
            
        }else{
            return response()->json([
                "message"=> "Credenciales invalidas"
            ],401);
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect(route('login'));

    }
}
