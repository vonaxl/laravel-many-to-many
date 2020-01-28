@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-6">
                <form action="{{route('update.employee', $employee-> id)}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                      <label for="nome">Nome:</label> <br>
                      <input type="text" name="nome" placeholder="{{$employee->nome}}">
                    </div>
                    <div class="form-group">
                      <label for="cognome">Cognome:</label> <br>
                      <input type="text" name="cognome" placeholder="{{$employee->cognome}}">
                    </div> 
                    <button type="submit">AGGIORNA</button>
                  </form>
    
            </div>
            <div class="col-6">
                <h5>Inserisci Task</h5>
                <div class="row">
                    @foreach ($tasks as $task)
                    <div class="col-3">
    
                        <input type="checkbox" value="{{$task->id}} ">{{$task->titolo}} <br>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection