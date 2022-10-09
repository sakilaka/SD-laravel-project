<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function storeRegister(Request $r)
    {
        // $user = new User();
        $name = $r->name;
        $email = $r->email;
        $role = $r->role;
        $stuId = $r->id;
        $password = $r->password;
        $confirm_pass = $r->confirm;
        if ($password != $confirm_pass) {
            return redirect()->back()->with('err', 'Password Mismatch');
        } else {
            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'role' => $role,
                'student_id' => $stuId,
                'password' => md5($password)
            ]);
            return redirect()->back()->with('success', 'Registration Success. Waiting for admin approval');
        }
    }
}
