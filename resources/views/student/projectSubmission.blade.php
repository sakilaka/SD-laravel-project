@extends('student.StudentLayout.layouts.studentdefault')
@section('student')


  <h2 class="text-center my-5">Project Submission Form</h2>

  <form action="{{ url('store-project-submission') }}" method="post">
    @csrf

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Project Name</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1"      placeholder="project name">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">project details</label>
        <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">project outcome</label>
        <textarea class="form-control" name="outcome" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>  

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">group memeber details</label>
        <textarea class="form-control" name="memberDetails" placeholder="Add (id, name, scetion)" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div> 
    <button class="btn btn-dark" type="submit">Submit</button>
  </form>
   
@endsection