<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
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
        // SELECT * from users where email ='' and password = ''
        $user = DB::table('users')
            ->where('email', '=', $email)
            ->where('password', '=', md5($password))->first();

        if ($user) {
            if ($user->is_approved == 0) {
                return redirect()->back()->with('err', 'Not Approved');
            }
             else {

                if ($user->role == 'Teacher') 
                {
                    return redirect('TeacherDashboard');
                }
                else if ($user->role == 'Student') 
                {
                    return redirect('StudentDashboard');
                } 
                else {
                    return redirect('AdminDashboard');
                }

                }
            }
        }
    }

                   
                   


