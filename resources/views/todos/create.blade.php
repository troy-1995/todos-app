@extends('layouts.app')


@section('content')
<h1 class="text-center my-5"> Create Todos</h1>

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">
        Create new todo
      </div>

      @if($errors->any())
        <div class="alert alert-danger">
          <ul class="list-group">
            @foreach($errors->all() as $error)
              <li class="list-group-item">
                {{ $error }}
              </li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="card-body">
        <form class="" action="/store-todos" method="post">
          @csrf

          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name">
          </div>

          <div class="form-group">
            <textarea name="description" placeholder="Description" rows="5" cols="30" class="form-control"></textarea>
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-success" type="button" name="button">Create Todo</button>
          </div>

        </form>
      </div>


    </div>


  </div>

</div>
@endsection
