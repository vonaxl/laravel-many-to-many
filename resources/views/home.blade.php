@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-around align-items-center p-3">

        <h1 class="text-center">Employees:</h1>
        @auth
            
        <a href="{{route('create.employee')}} " class="btn btn-success">+ Employee</a>
        @endauth
        
    </div>
    <div class="row ">
    @foreach ($employees as $employee)
        <div class="col-6 employee px-4 py-2">
            <div class="box">
                <h3 class="text-center">[{{$employee->id}}]
                    {{$employee->nome}} {{$employee->cognome}}
                </h3>

                <div class="top d-flex justify-content-between p-3">
                    <h4 class="">Tasks:</h4>
                    @auth
                        
                    <a href="{{route('edit.employee', $employee-> id)}}" class="btn btn-success">Add Task</a>
                    @endauth
                </div>

                <div class="row tasks p-3">
    
                    @foreach ($employee -> tasks as $task)
                    <div class="col-4 task text-center">
                        <p>[{{$task -> id}}]{{$task -> titolo}} <a href="{{route('remove.task', [$employee-> id,$task-> id])}}" title="remove Task">X</a></p>
                        
                    </div>
                    @endforeach
                </div>
                @auth
                
                <div class="down p-3 d-flex justify-content-around">

                    <a href="{{route('edit.employee', $employee-> id)}}" class="btn btn-primary">Edit employee</a>
                    <a href="{{route('delete.employee', $employee-> id)}}" class="btn btn-danger">Delete Employee</a>
                </div>
                @endauth
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
