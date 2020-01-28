@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-10">
                <form action="{{route('store.employee')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                      <label for="nome">Nome:</label> <br>
                      <input type="text" name="nome" value="">
                    </div>
                    <div class="form-group">
                      <label for="cognome">Cognome:</label> <br>
                      <input type="text" name="cognome" value="">
                    </div> 
                    {{-- <select name="tasks[]" multiple>
                        @foreach ($tasks as $task)
                        <option value="{{$task->id}}">{{$task->titolo}}</option>
                        @endforeach
                    </select> <br><br> --}}
                    <div class="form-group">
                        <label for="Tasks">Tasks:</label> <br>
                        @foreach ($tasks as $task)
                        <input name="tasks[]" type="checkbox"  value="{{$task->id}}">{{$task->titolo}}
                        @endforeach
                      </div> 

                    <button type="submit">SALVA</button>
                  </form>
    
            </div>
            
        </div>
    </div>
@endsection