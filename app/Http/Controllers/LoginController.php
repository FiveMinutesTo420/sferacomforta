<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function page(){
        return view('login');
    }
    public function store(Request $request){
        /* Создание пользователя
        $user = new User();
        $user->login = $request->login;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;
        $user->password = Hash::make($request->password);
        $user->save();
        */
        $creds = $request->validate([
            'login' => ['required'],
            'password' => ['required']
        ]);
        if(Auth::attempt($creds)){
            $request->session()->regenerate();
            return response()->json([
                'result' => 'Authorized',
            ]);
        }
        
        return response()->json([
            'result' => 'not_found',
            'msg' => "Пользователь не найден"
        ]);
    }
}
