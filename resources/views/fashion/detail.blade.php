@extends('layouts.default')
@section('content')
<div class="container" style="background:gray;">
    <img id="image" src="{{$img_url->img_url}}" alt="">

</div>
<br>
<div id="infoCast" style="background-color: black"> 
    <font color= "white">
   <h1> {{$fashion->name}}</h1> 
   <h1>{{$fashion->species}}</h1>
   <h1>{{$fashion->description}}</h1>
   <h1>{{$fashion->style}}</h1>
   <h1>{{$fashion->sex}}</h1>
  
</font>
</div>
@endsection
<style>
    #image {
  width: 100%;
  height: 100%;
  object-fit: fill;
}
#infoCast{
    height: 100%;
}
</style>
