@extends('student.StudentLayout.layouts.studentdefault')
@section('student')


<div class="container-fluid">
   <div class="row column_title">
      <div class="col-md-12">
      </div>
   </div>

   <h2 class="my-4 text-center">Enrollment Here</h2>

   @if(Session::has('success'))
   <div class="alert alert-success">
      {{ Session::get('success') }}
   </div>
   @endif

   <form action="{{ url('store-enrolls') }}" method="post" class="border border-4 border-primary p-5 m-4 bg-dark text-white w-50 m-auto">
      @csrf

     

      <div class="form-group">
         <label for="" class="text-white fw-bold">Session</label>
         <select name="Session" class="form-control">
            <option value="" selected>Select session</option>


            @if($session)
            @foreach($session as $p)
            <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif

         </select>
      </div>

      <div class="form-group">
         <label for="" class="text-white fw-bold">Course</label>
         <select name="Course" class="form-control">
            <option value="" selected>Select Course</option>

            @if($course)
            @foreach($course as $p)
            <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif
         </select>
      </div>

      <div class="form-group">
         <label for="" class="text-white fw-bold">Section</label>
         <select name="Section" class="form-control">
            <option value="" selected>Select section</option>
            @if($section)
            @foreach($section as $p)
            <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif
         </select>
      </div>


      <!-- <div class="form-group">
         <label for="" class="text-white fw-bold">Status</label>
         <select name="status" class="form-control">
            <option value="" selected=>Select here</option>
            <option value="regular">Regular</option>
            <option value="regular">Recourse</option>
            <option value="regular">Retake</option>
         </select>
      </div> -->


      <button type="submit" class="btn btn-success">Enroll</button>

   </form>

</div>

@endsection