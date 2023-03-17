@extends('master_layout.layout')
@section('title','students list')
@section('content')


<a class="btn btn-primary" href="{{ route('students.create') }}" >Add Student</a>
<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <caption>Student Lists</caption>
            <tr>
                <th>PK ID</th>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Age</th>
                <th>CourseCode</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($students AS $student) 
                <tr class="table-primary" >
                    <td>{{$student->student_pk}}</td>
                    <td>{{$student->StudentID}}</td>
                    <td>{{$student->FirstName}}</td>
                    <td>{{$student->LastName}}</td>
                    <td>{{$student->MiddleName}}</td>
                    <td>{{$student->Age}}</td>
                    <td>{{$student->CourseCode}}</td>
                </tr>
                <td>
                    <a href="{{ route('students.edit', $student->student_pk) }}" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>        
            @endforeach 
            </tbody>
            
    </table>
    <p>Sum of Ages > 18 = {{$age_sum}}</p> 
</div>

@endsection