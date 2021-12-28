@extends('layouts.default')
@section('content')

@foreach($fashions as $fashion)
<div class="card" style="width: 18rem;">
  <a href="/fashionDetail/{{$fashion->id}}">
  <img src="{{$fashion->img_url}}" class="card-img-top" alt="...">
</a>
  <div class="card-body">
    <p class="card-text">{{$fashion->name}}</p>
  </div>
</div>
<br>
@endforeach
@endsection
