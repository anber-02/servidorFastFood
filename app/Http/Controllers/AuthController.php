<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
// valida los campos que venga, y auth nos ayuda a desencriptar
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $validator = Validator::make($request -> all(), [
            'name' => 'required | string | max:255',
            'email' => 'required | string | email | unique:users',
            'password' => 'required | string | min:8',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return response()->json(['user' => $user], 201);
    }

    public function auth(Request $request){

    }
}
