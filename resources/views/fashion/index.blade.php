@extends('layouts.default')
@section('content')
@if(!empty($message))
<div class="alert alert-success" role="alert">{{ $message}}</div>
@endif

  <div class="row" data-aos="zoom-in" data-aos-delay="100">
    <table class="table" style="background: whitesmoke">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Species</th>
          <th scope="col">Sold</th>
          <th scope="col">Price</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>
        @foreach($fashions as $fashion)
        <tr>
          <td scope="row">{{$fashion->id}}</td>
          <td id="tdImage"><img src="{{$fashion->img_url}}" alt="" id="image"></td>
          <td>{{$fashion->name}}</td>
          <td>{{$fashion->species}}</td>
          <td>{{$fashion->sold}}</td>
          <td>{{$fashion->price}}</td>
          <td><a href="/admin/fashion/{{$fashion->id}}"><i class="fas fa-edit"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
<br>
<div>  
{{ $fashions->links('vendor.pagination.bootstrap-4') }}
</div>
@endsection

<style>
  #image{
    object-fit: contain;
    width: 50%;
  }
  #tdImage{
    width: 10%;
  }
</style>