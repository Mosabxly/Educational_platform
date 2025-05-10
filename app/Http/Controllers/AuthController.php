<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    //
     public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:admin,student,instructor',
        ]);
    
  if($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }
        
         $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            //'password' => Hash::make($request->password),
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);
        $token = $user->createToken('auth-token', [$user->role])->plainTextToken;
 
        return response()->json([
            'message' => "User registered as {$user->role}",
            //'user' => $user,                                /
            'user' => new UserResource($user),
            'token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

  // Login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }
 
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
 
        $user = Auth::user();
        $token = $user->createToken('auth-token', [$user->role])->plainTextToken;
 
        return response()->json([
            'message' => "Login successful as {$user->role}",
            //'user'    => $user,
            'token'   => $token,
            'token_type' => 'Bearer',
        ]);
    }


      public function profile(Request $request)
    {
        return response()->json([
            'user' => $request->user(),
            'role' => $request->user()->role
        ]);
    }
 
     // Logout
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    }
    //



}
