<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
   
    public function dashboard(){
        return view('dashboard');
    }
    public function MainDashboard(){
        return view('mainDash');
    }


    public function logout(){ 
        Session::flush(['username','userrole']);
        return redirect('dashboard');
    }
}


