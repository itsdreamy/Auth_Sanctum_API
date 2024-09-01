<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validate =  Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'email|required',
            'password'=>'required',
            'confirm_password'=>'required|same:password'
        ]);

        if($validate->fails()){
            return response()->json([
                'success' => false,
                'message' => "There's an error",
                'data'=>$validate->errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['email'] = $user->email;
        $success['token'] = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Registration success',
            'data' => $success
        ]);
    }

    public function login(Request $request)
    {   
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;

            return response()->json([
                'success'=> true,
                'message' => 'Login Success',
                'data' => $success
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Login Failed',
                'data' => null
            ]);
        }
    }

    public function logout(Request $request){
        if(Auth::check()){
            Auth::user()->currentAccessToken()->delete();
        }
        return response()->json([
            'success'=> true,
            'message' => 'Logout Success'
        ]);
    }
}
