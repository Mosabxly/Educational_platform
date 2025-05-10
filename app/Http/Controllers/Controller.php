<?php

namespace App\Http\Controllers;


use app\Models\User;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
abstract class Controller
{
    //
// عرض جميع المستخدمين
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

  // عرض نموذج إنشاء مستخدم جديد (إن كنت تستخدم Blade)
    public function create()
    {
        return view ('user.create ');
    }


    // حفظ مستخدم جديد في قاعدة البيانات
    public function store (Request $request)
    {
        $validated =$request->validate([
            'name'=>'required|string|max:225',
            'email'=>'requierd|email|unique:user',
            'password'=>'required|min:6',
            'role'=>'required|in:admin,student,instructor',
        ]);
        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect()->route('users.index');
    }

     // حذف مستخدم
     public function destroy($id)
     {
         $user = User::findOrFail($id);
         $user->delete();
 
         return redirect()->route('users.index');
     }

}
