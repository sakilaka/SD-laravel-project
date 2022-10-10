@extends('student.StudentLayout.layouts.studentdefault')
@section('student')


<h2 class="text-center my-5">Project Submission Form</h2>

<form action="{{ url('store-project-submission') }}" method="post" class="bg-dark text-white p-4 w-75 m-auto">
  @csrf

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Project Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="project name">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">project details</label>
    <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>


  <div class="mb-3 form-group text-black">
    <label for="exampleFormControlTextarea1" class="form-label">group memeber</label>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" onclick="clickOne()" type="radio" name="role" value="1">
      <label class="form-check-label" for="">1</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" onclick="clickTwo()" type="radio" name="role" value="2">
      <label class="form-check-label" for="">2</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" onclick="clickThree()" type="radio" name="role" value="3">
      <label class="form-check-label" for="">3</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" onclick="clickFour()" type="radio" name="role" value="4">
      <label class="form-check-label" for="">4</label>
    </div>

  </div>
  <div id="one" class="mb-3 w-100">

  </div>

  <button class="btn btn-primary" type="submit">Submit</button>
</form>

<Script>
  const clickOne = () => {
    const one = document.getElementById('one');
    one.innerHTML = `
    <div class="mt-3">
      <label for="exampleFormControlInput1" class="form-label">Member Details</label>
      <div class="d-flex justify-content-between">
        <input placeholder="Enter Id" type="number" name="id" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter name" type="text" name="name" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter email" type="email" name="email" class="form-control w-25" id="exampleFormControlInput1">
      </div>
    </div>
   
    `
  }


  const clickTwo = () => {
    const one = document.getElementById('one');
    one.innerHTML = `
    <div class="mt-3">
      <label for="exampleFormControlInput1" class="form-label">First Member Details</label>
      <div class="d-flex justify-content-between">
        <input placeholder="Enter id" type="number" name="id" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter name" type="text" name="name" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter email" type="email" name="email" class="form-control w-25" id="exampleFormControlInput1">
      </div>
    </div>
    <div class="mt-3">
      <label for="exampleFormControlInput1" class="form-label">Second Member Details</label>
      <div class="d-flex justify-content-between">
        <input placeholder="Enter id" type="number" name="id" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter name" type="text" name="name" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter email" type="email" name="email" class="form-control w-25" id="exampleFormControlInput1">
      </div>
    </div>
    `
  }
  const clickThree = () => {
    const one = document.getElementById('one');
    one.innerHTML = `
    <div class="mt-3">
      <label for="exampleFormControlInput1" class="form-label">First Member Details</label>
      <div class="d-flex justify-content-between">
        <input placeholder="Enter id" type="number" name="id" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter name" type="text" name="name" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter email" type="email" name="email" class="form-control w-25" id="exampleFormControlInput1">
      </div>
    </div>
    <div class="mt-3">
      <label for="exampleFormControlInput1" class="form-label">Second Member Details</label>
      <div class="d-flex justify-content-between">
        <input placeholder="Enter id" type="number" name="id" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter name" type="text" name="name" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter email" type="email" name="email" class="form-control w-25" id="exampleFormControlInput1">
      </div>
    </div>
    <div class="mt-3">
      <label for="exampleFormControlInput1" class="form-label">Third Member Details</label>
      <div class="d-flex justify-content-between">
        <input placeholder="Enter id" type="number" name="id" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter name" type="text" name="name" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter email" type="email" name="email" class="form-control w-25" id="exampleFormControlInput1">
      </div>
    </div>
    `
  }
  const clickFour = () => {
    const one = document.getElementById('one');
    one.innerHTML = `
    <div class="mt-3">
      <label for="exampleFormControlInput1" class="form-label">First Member Details</label>
      <div class="d-flex justify-content-between">
        <input placeholder="Enter id" type="number" name="id" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter name" type="text" name="name" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter email" type="email" name="email" class="form-control w-25" id="exampleFormControlInput1">
      </div>
    </div>
    <div class="mt-3">
      <label for="exampleFormControlInput1" class="form-label">Second Member Details</label>
      <div class="d-flex justify-content-between">
        <input placeholder="Enter id" type="number" name="id" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter name" type="text" name="name" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter email" type="email" name="email" class="form-control w-25" id="exampleFormControlInput1">
      </div>
    </div>
    <div class="mt-3">
      <label for="exampleFormControlInput1" class="form-label">Third Member Details</label>
      <div class="d-flex justify-content-between">
        <input placeholder="Enter id" type="number" name="id" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter name" type="text" name="name" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter email" type="email" name="email" class="form-control w-25" id="exampleFormControlInput1">
      </div>
    </div>
    <div class="mt-3">
      <label for="exampleFormControlInput1" class="form-label">Fourth Member Details</label>
      <div class="d-flex justify-content-between">
        <input placeholder="Enter id" type="number" name="id" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter name" type="text" name="name" class="form-control w-25" id="exampleFormControlInput1">
        <input placeholder="Enter email" type="email" name="email" class="form-control w-25" id="exampleFormControlInput1">
      </div>
    </div>
    `
  }
</Script>

@endsection