@extends('layout')

@section('content')
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <form action="/create/todo" method="post">
        {{ csrf_field() }}
        <input class="form-control input-lg" placeholder="Create a new todo..." type="text" name="todo" >
      </form>
    </div>
  </div>
  <hr>
  @foreach ($todos as $todo)
    {{ $todo ->todo }}
    <hr>
  @endforeach
@endsection
