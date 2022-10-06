@extends('student.StudentLayout.layouts.studentdefault')
@section('student')


   <div class="container-fluid">
    <div class="row column_title">
      <div class="col-md-12">
      </div>
   </div> 

   <h2 class="my-4">Enroll</h2>

   <form action="{{ url('store-enrolls') }}" method="post"> 
      @csrf

      <div class="form-group w-25">
         <label for="" class="text-danger fw-bold">Session</label>
         <select name="Session" class="form-control">
            
            @if($session)
            @foreach($session as $p)
             <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif
          
         </select>
      </div>
      <div class="form-group w-25">
         <label for="" class="text-danger fw-bold">Section</label>
         <select name="Section" class="form-control">
            @if($section)
            @foreach($section as $p)
             <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif
         </select>
      </div>
      <div class="form-group w-25">
         <label for="" class="text-danger fw-bold">Course</label>
         <select name="Course" class="form-control">
            @if($course)
            @foreach($course as $p)
             <option value="{{ $p->name }}">{{ $p->name }}</option>
            @endforeach
            @endif
         </select>
      </div>
      
       <button type="submit" class="btn btn-info">Enroll</button>

   </form>

   </div>
   
@endsection