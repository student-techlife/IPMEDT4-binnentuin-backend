<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller {
    // Register functie - Klant die account kan aanmaken
    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return response()->json($user);
    }

    // TEST - inlog functie
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email|exist:users,email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            $user = Auth::user();

            $token = $user->createToken($user->email.'-'.now());

            return response()->json([
                'token' => $token->accessToken
            ]);
        }
    }
}
