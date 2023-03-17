@extends('master_layout.layout')
@section('title','Add Student')
@section('content')
  <form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="StudentID" id="StudentID" placeholder="StudentID" aria-label="StudentID">

        <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="First Name" aria-label="First Name">
        <br>
        <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Last Name" aria-label="Last name">
        <br>
        <input type="text" class="form-control" name="MiddleName" id="MiddleName"placeholder="Middle Name" aria-label="Middle Name">
        <br>
        <input type="number" class="form-control" name="Age" id="Age" placeholder="Age" aria-label="Age">
        <br>
        <select name="course_id" id="course_id" class="form-select" aria-label="Default select example">
            <option selected>Course</option>
            @foreach($courses AS $course)
                <option value= "{{$course->id}}" >{{$course->CourseCode}}</option>
            @endforeach
        </select>
        <button class="btn btn-outline-secondary" type="submit" >Submit</button>
    </div>
</form>
@endsection