@extends('layouts.default')
@section('content')
<div class="container" style="background:gray;">
    <img id="image" src="{{$fashion->img_url}}" alt="">

</div>
<br>
<div id="infoCast" style=""> 
    <font color= "white">
        <form action="/admin/fashion/{{$fashion->id}}" method="post" > 
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputEmail1">Name: </label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="" value="{{$fashion->name}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Species: </label>
              <input type="text" class="form-control" name="species" id="exampleInputPassword1" placeholder="" value="{{$fashion->species}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description: </label>
                <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="" value="{{$fashion->description}}">
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
              <input type="text" class="form-control" name="img_url" id="exampleInputPassword1" placeholder="" value="{{$fashion->img_url}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Sold: </label>
              <input type="number" class="form-control" name="sold" id="exampleInputPassword1" placeholder="" value="{{$fashion->sold}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Price: </label>
              <input type="number" class="form-control" name="price" id="exampleInputPassword1" placeholder="" value="{{$fashion->price}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Quantity: </label>
              <input type="number" class="form-control" name="quantity" id="exampleInputPassword1" placeholder="" value="{{$fashion->quantity}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="delete/{{$fashion->id}}"><div class="btn btn-primary">Delete</div></a>
          </form>
  
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
