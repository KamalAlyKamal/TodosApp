@extends('layout')


@section('content')

    <div class="form-group">
        <form action="{{ route('todos.save', ['id' => $todo->id]) }}" method="POST">
            {{ csrf_field() }}
            <input type="text" class="form-control" placeholder="Create a new todo.." name="todo" value="{{ $todo->todo }}"></input>  
            
        </form>
    </div>



@stop