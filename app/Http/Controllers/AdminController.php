<?php
namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller

{
    public function UserAll(){
        $data = DB::table('users')->get();
        // $data = DB::table('users')->where('is_approved', 0)->get(); 
        return view('Admin.UserAll', ['users'=>$data]);
    }


    public function AdminDashboard(){
        // return redirect('AdminDashboard');
        return view('Admin.AdminDashboard');
    }

    public function logout(){ 
        Session::flush(['username','userrole']);
        return redirect('dashboard');
    }

    
}


