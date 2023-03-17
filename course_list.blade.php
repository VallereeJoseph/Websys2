@extends('master_layout.layout')
@section('title','course list')
@section('content')

<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <caption>Course List</caption>
            <tr>
                <th>Course Code</th>
                <th>Description</th>
                <th>Department</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($courses AS $course)
                <tr class="table-primary" >
                    <td>{{$course->CourseCode}}</td>
                    <td>{{$course->Description}}</td>
                    <td>{{$course->Department}}</td>
                </tr>
            </tbody>
            @endforeach  
            <tfoot>
                
            </tfoot>
    </table>
</div>

@endsection