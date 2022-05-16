@extends('layouts.default')
@section('content')
@if(!empty($message))
<div class="alert alert-success" role="alert">{{ $message}}</div>
@endif
<span class=" in">
  <form role="search" class="app-search d-none d-md-block me-3">
      <input type="text" placeholder="Search..." name="name" id="searchInput" class="form-control mt-0">
      <a href="" class="active">
          <i class="fa fa-search" id="search"></i>
      </a>
  </form>
</span>
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
        <tr style="height: 100px">
          <td scope="row">{{$fashion->id}}</td>
          <td id="tdImage"><img src="{{$fashion->img_url}}" alt="" id="image" style="object-fit: cover"></td>
          <td>{{$fashion->name}}</td>
          <td>{{$fashion->species}}</td>
          <td>{{$fashion->sold}}</td>
          <td>{{$fashion->price}}</td>
          <td><a href="/admin/fashion/{{$fashion->id}}">Edit</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
<br>
<div>  
{{ $fashions->links('vendor.pagination.bootstrap-4') }}
</div>
<script>
  $(document).ready(function() {
     var data = $("#searchInput").text();
     
       $('#search').click(function(e) {
        console.log("123");
           e.preventDefault();
          
           $.ajax({
               url: '/admin/fashion/filter',
               type: 'POST',
               dataType: 'html',
               data: {
                  
               }
           }).done(function(ketqua) {
               $('#noidung').html(ketqua);
           });
           
       });
   });
</script>
@endsection

<style>
  #image{
    object-fit: contain;
    width: 50%;
  }
  #tdImage{
    width: 10%;
    height: 10%;
  }
</style>
