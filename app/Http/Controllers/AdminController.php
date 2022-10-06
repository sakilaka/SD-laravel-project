<?php
namespace App\Http\Controllers;
use App\Models\Session;
use App\Models\Course;
use App\Models\Section;

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

    public function assignTeacher(){
        $name = DB::table('users')->where('role','Teacher')->get();
        $session = Session::all();
        $section = Section::all();
        $course = Course::all();
        return view('Admin.teacherAssign',compact('session','section','course','name'));
    }

    public function storeAssignTeacher(Request $r){
        $name = $r->name;
        $session = $r->session;
        $course = $r->course;
        $section = $r->section;

        DB::table('assignTeachers')->insert([
            'name'=>$name,
            'session'=>$session,
            'course'=>$course,
            'section'=>$section
        ]);
        return redirect()->back();
    }

    public function viewTeacher(){
        $allTeacher = DB::table('assignTeachers')->get();
        return view('Admin.assignAllTeacher',compact('allTeacher'));
    }



}


