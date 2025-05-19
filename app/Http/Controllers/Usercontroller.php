<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
public function index()
{
    return User::all();
}

    public function updateRole(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->role = $request->input('role');
    $user->save();

    return response()->json(['message' => 'تم تحديث الدور بنجاح']);
}

}
