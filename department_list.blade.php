@extends('master_layout.layout')
@section('title','department list')
@section('content')

<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <caption>Department List</caption>
            <tr>
                <th>Department</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($departments AS $department) 
                <tr class="table-primary" >
                    <td>{{$department->Department}}</td>
                    <td>{{$department->Description}}</td>
                </tr>
            
            </tbody>
            @endforeach
            <tfoot>
                
            </tfoot>
    </table>
</div>

@endsection