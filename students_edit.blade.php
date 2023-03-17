@extends('master_layout.layout')
@section('title','Edit Student')
@section('content')
  <form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="StudentID" id="StudentID" placeholder="StudentID" aria-label="StudentID" value="{{$student->StudentID}}" >

        <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="First Name" aria-label="First Name" value="{{$student->FirstName}}">
        <br>
        <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Last Name" aria-label="Last name" value="{{$student->LastName}}">
        <br>
        <input type="text" class="form-control" name="MiddleName" id="MiddleName" placeholder="Middle Name" aria-label="Middle Name" value="{{$student->MiddleName}}">
        <br>
        <input type="number" class="form-control" name="Age" id="Age" placeholder="Age" aria-label="Age" value="{{$student->Age}}">
        <br>
        <select name="course_id" id="course_id" class="form-select" aria-label="Default select example" value="{{$student->course_id}}" >
            <option selected>Course</option>
            @foreach($courses AS $course)
                <option selected value= "{{$course->id}}">{{$course->CourseCode}}</option>
            @endforeach
        </select>
        <button class="btn btn-outline-secondary" type="submit" >Submit</button>
    </div>
</form>
@endsection