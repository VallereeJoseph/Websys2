@extends('master_layout.layout')
@section('title','students list')
@section('content')

<div class="table-responsive">

    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <caption>Student Lists</caption>
            <tr>
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
                    <td>{{$student->StudentID}}</td>
                    <td>{{$student->FirstName}}</td>
                    <td>{{$student->LastName}}</td>
                    <td>{{$student->MiddleName}}</td>
                    <td>{{$student->Age}}</td>
                    <td>{{$student->CourseCode}}</td>
                </tr>
            @endforeach  
            </tbody>
            <tfoot>
                
            </tfoot>
    </table>
</div>

@endsection