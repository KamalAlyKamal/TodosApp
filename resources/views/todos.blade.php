@extends('layout')


@section('content')

    <div class="form-group">
        <form action="/create/todo" method="POST">
            {{ csrf_field() }}
            <input type="text" class="form-control" placeholder="Create a new todo.." name="todo"></input>  
            
        </form>
    </div>

    @foreach($todos as $todo)
        {{ $todo->todo }}   
        @if(!$todo->completed)
            <a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="btn btn-md btn-success">Mark as completed</a>
        @else
            <button type="button" class="btn btn-secondary" disabled>Completed</button>
        @endif
        <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-md btn-warning"><span style="color: white;">Update</span></a>
        <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-md btn-danger">Delete</a>
        <hr>

    @endforeach


@stop