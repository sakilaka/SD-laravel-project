<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function storelogin(Request $req)
    {
        $email = $req->email;
        $password = $req->password;

        $user = DB::table('users')
            ->where('email', '=', $email)
            ->where('password', '=', md5($password))->first();

        if ($user) {
            if ($user->is_approved == 0) {
                return redirect()->back()->with('err', 'Not Approved');
            } else {
                Session::put('username', $user->name);
                Session::put('userrole', $user->role);
                Session::put('studentId', $user->student_id);


                if ($user->role == 'Teacher') {
                    return redirect('TeacherDashboard');
                } 
                else if ($user->role == 'Student') {
                    return redirect('StudentDashboard');
                } 
                else {
                    return redirect('AdminDashboard');
                }
            }
        }
    }
}
