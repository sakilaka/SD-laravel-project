<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\UniversitySession;
use App\Models\Section;
use Illuminate\Support\Facades\Session;

use App\Models\StudentEnrolls;


use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function StudentDashboard()
    {
        $session = UniversitySession::all();
        $section = Section::all();
        $course = Course::all();
        return view('student.StudentDashboard', compact('session', 'section', 'course'));
    }

    public function StoreEnrolls(Request $req)
    {
        $Session = $req->Session;
        $Section = $req->Section;
        $Course = $req->Course;

        $enroll = new StudentEnrolls();

        $Id = Session::get('studentId');
        $enroll->student_id = $Id;
        $enroll->session = $Session;
        $enroll->section = $Section;
        $enroll->course = $Course;
        $enroll->save();
        return redirect()->back()->with('success', 'Enrollment success');
    }

    public function EnrollsList()
    {
        $allEnroll = StudentEnrolls::all();
        return view('admin.enrollList', compact('allEnroll'));
    }

    // --------------Session-------->

    public function session()
    {
        return view('sessions.session');
    }

    public function StoreSession(Request $req)
    {
        $session = $req->session;
        $is_active = $req->is_active;

        // Next, we have to insert the values in the database table
        $obj = new UniversitySession();
        $obj->name = $session;
        $obj->is_active = $is_active;
        $obj->save();


        return redirect('sessioninfo');
    }

    public function sessionAll()
    {

        $session = UniversitySession::all();
        return view('sessions.sessionAll', compact('session'));
    }

    // ------------Course--------->

    public function course()
    {
        return view('courses.course');
    }

    public function StoreCourse(Request $req)
    {
        $title = $req->title;
        $code = $req->code;

        $obj = new Course();
        $obj->name = $title;
        $obj->code = $code;
        $obj->save();
        return redirect('courseinfo');
    }

    public function courseAll()
    {

        $course = Course::all();
        return view('courses.courseAll', compact('course'));
    }
    // ---------Section---------->  

    public function section()
    {
        return view('sections.section');
    }

    public function StoreSection(Request $req)
    {
        $section = $req->section;

        // Next, we have to insert the values in the database table
        $obj = new Section;
        $obj->name = $section;
        $obj->save();
        return redirect('sectioninfo');
    }

    public function sectionAll()
    {
        $section = Section::all();
        return view('sections.sectionAll', compact('section'));
    }

    public function projectSubmission()
    {
        return view('student.projectSubmission');
    }

    public function storeProjectSubmission(Request $r)
    {
        $name = $r->name;
        $details = $r->details;
        $outcome = $r->outcome;
        $memberDetails = $r->memberDetails;
        DB::table('project_ideas')->insert([
            'name' => $name,
            'details' => $details,
            'outcome' => $outcome,
            'members' => $memberDetails
        ]);
        return redirect('project-submission');
    }

    public function allProjectIdeas()
    {
        $all = DB::table('project_ideas')->get();
        return view('teacher.projectIdeas', ['project_ideas' => $all]);
    }
    public function viewEnroll()
    {
        $allEnroll = StudentEnrolls::where('student_id', '=', Session::get('studentId'))->get();
        return view('student.viewEnrollment', compact('allEnroll'));
    }
}
