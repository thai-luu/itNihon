@extends('layouts.default')
@section('content')
@if(session('message'))
<div class="alert alert-success" role="alert">{{ session('message') }}</div>

@endif

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{ $error }}</div>
        @endforeach
    </ul>
@endif
<form action="/admin/fashion" method="post" > 
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name: </label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required  name="name" placeholder="Name is required">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Species: </label>
      <input type="text" class="form-control" name="species" id="exampleInputPassword1" required  placeholder="Species is required">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description: </label>
        <input type="text" class="form-control" name="description" id="exampleInputPassword1" required placeholder="Description is required">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Style: </label>
        <select name="style" id="">
            <option value="0"> All </option>
            <option value="1"> <=20 </option>
            <option value="2"> 21 - 25 </option>
            <option value="3"> 26-30 </option>
            <option value="4"> 31-35 </option>
            <option value="5"> >=36 </option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Sex: </label>
        <select name="sex" id="">
            <option value="2"> Unisex </option>
            <option value="0"> woman </option>
            <option value="1"> human </option>
        </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Image link: </label>
      <input type="text" class="form-control" name="img_url" id="exampleInputPassword1" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Sold: </label>
      <input type="text" class="form-control" name="sold" id="exampleInputPassword1" min="0" pattern="[0-9]{1,8}"
      title="Sold is number(min is 0 max 100000000)" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Price: </label>
      <input type="text" class="form-control" name="price" id="exampleInputPassword1" min="0" pattern="[0-9]{1,8}"
      title="Price is number(min is 0 max 100000000)" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Quantity: </label>
      <input type="text" class="form-control" name="quantity" id="exampleInputPassword1" min="0" pattern="[0-9]{1,8}"
      title="Quantity is number(min is 0 max 100000000)" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
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
