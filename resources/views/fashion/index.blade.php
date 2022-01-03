@extends('layouts.default')
@section('content')
@if(!empty($message))
<div class="alert alert-success" role="alert">{{ $message}}</div>
@endif

  <div class="row" data-aos="zoom-in" data-aos-delay="100">
@foreach($fashions as $fashion)
<div class="card" style="width: 18rem; margin-top: 20px; margin-left: 20px;">
  <a href="/admin/fashion/{{$fashion->id}}">
  <img src="{{$fashion->img_url}}" class="card-img-top" alt="...">
</a>
  <div class="card-body">
    <p class="card-text" style="color: black; font-size: 20px;">{{$fashion->name}}</p>
    <p class="card-text" style="color: black; font-size: 20px;">{{$fashion->species}}</p>
    <p class="card-text" style="color: black; font-size: 20px;">{{$fashion->price}}</p>
  </div>
</div>
<br>
@endforeach

</div>
<br>
<div>  
{{ $fashions->links('vendor.pagination.bootstrap-4') }}
</div>
@endsection
