@extends('app')

@section('content')
  <div class="row">
    @include('partials.sidebar._sidebar')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="row">
        <ul>
            @foreach($permissions as $permission)
              <li>{{ $permission->name }}</li>
            @endforeach
        </ul>

      </div>
    </div>
  </div>
@endsection