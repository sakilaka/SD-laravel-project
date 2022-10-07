@extends('student.StudentLayout.layouts.studentdefault')
@section('student')


<div class="container-fluid">
   <div class="row column_title">
      <div class="col-md-12">
      </div>
   </div>

   <h2 class="my-4 text-center">Enrollment Here</h2>

   <form action="{{ url('store-enrolls') }}" method="post" class="border border-4 border-primary p-5 m-4 bg-dark text-white w-50 m-auto">
      @csrf

      <div class="form-group">
         <label for="" class="text-white fw-bold">Session</label>
         <select name="Session" class="form-control">

            @if($session)
            @foreach($session as $p)
            <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif

         </select>
      </div>
      <div class="form-group">
         <label for="" class="text-white fw-bold">Section</label>
         <select name="Section" class="form-control">
            @if($section)
            @foreach($section as $p)
            <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif
         </select>
      </div>
      <div class="form-group">
         <label for="" class="text-white fw-bold">Course</label>
         <select name="Course" class="form-control">
            @if($course)
            @foreach($course as $p)
            <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif
         </select>
      </div>

      <button type="submit" class="btn btn-success">Enroll</button>

   </form>

</div>

@endsection