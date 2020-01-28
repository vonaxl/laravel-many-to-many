@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
        
      <div class="col-12">
          <form action="{{route('update.employee',$employee->id)}}" class="row justify-content-center" method="post">
            @csrf
            @method('POST')
            <div class="form-group col-8">
              <label for="nome">Nome:</label> <br>
              <input type="text" name="nome"  value="{{$employee->cognome}}">
            </div>
            <div class="form-group col-8">
              <label for="cognome">Cognome:</label> <br>
              <input type="text" name="cognome"  value="{{$employee->cognome}}">
            </div> 
            {{-- <select name="tasks[]" multiple>
                @foreach ($tasks as $task) placeholder="{{$employee->cognome}}
                <option value="{{$task->id}}">{{$task->titolo}}</option>
                @endforeach
            </select> <br><br> --}}
            <div class="form-group col-8">
                <label for="Tasks">Tasks:</label> <br>
                @foreach ($tasks as $task)
                <input name="tasks[]" type="checkbox"  value="{{$task->id}}" 
                @if ($employee->tasks()-> find($task->id))
                    checked
                @endif
                >{{$task->titolo}}
                @endforeach
            </div> 

            <button type="submit" class="col-8">SALVA</button>
            </form>

      </div>
        
    </div>
  </div>
@endsection