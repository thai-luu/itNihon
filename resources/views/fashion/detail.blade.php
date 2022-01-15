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
<div class="container" style="background:gray;">
    <img id="image" src="{{$fashion->img_url}}" alt="">

</div>
<br>
<div id="getSex" style="display: none">{{$fashion->sex}}</div>
<div id="getStyle" style="display: none">{{$fashion->style}}</div>
<div id="getId" style="display: none">{{$fashion->id}}</div>
<div id="infoCast" style=""> 
    <font color= "white">
        <form action="/admin/fashion/{{$fashion->id}}" method="post" > 
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputEmail1">Name: </label>
              <input type="text" class="form-control" id="getname" aria-describedby="emailHelp" name="name" placeholder="" value="{{$fashion->name}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Species: </label>
              <input type="text" class="form-control" name="species" id="getspecies" placeholder="" value="{{$fashion->species}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description: </label>
                <input type="text" class="form-control" name="description" id="getdescription" placeholder="" value="{{$fashion->description}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Style: </label>
                <select name="style" id="style">
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
                <select name="sex" id="sex">
                    <option value="2"> Unisex </option>
                    <option value="0"> woman </option>
                    <option value="1"> human </option>
                </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Image link: </label>
              <input type="text" class="form-control" name="img_url" id="getimglink" placeholder="" value="{{$fashion->img_url}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Sold: </label>
              <input type="text" class="form-control" name="sold" id="getsold" placeholder=""  pattern="[0-9]{1,8}"
              title="Sold is number(min is 0 max 100000000)" value="{{$fashion->sold}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Price: </label>
              <input type="text" class="form-control" name="price" id="getprice" placeholder=""  pattern="[0-9]{1,8}"
              title="Price is number(min is 0 max 100000000)" value="{{$fashion->price}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Quantity </label>
              <br>
              <label for="exampleInputPassword1">Size S: </label>
              <input type="text" class="form-control" name="quantity1" id="getquantity1" placeholder=""  pattern="[0-9]{1,8}"
              title="Size is number(min is 0 max 100000000)" value="{{$fashion->sizes[0]->pivot->quantity}}">
              <label for="exampleInputPassword1">Size M: </label>
              <input type="text" class="form-control" name="quantity2" id="getquantity2" placeholder=""  pattern="[0-9]{1,8}"
              title="Size is number(min is 0 max 100000000)" value="{{$fashion->sizes[1]->pivot->quantity}}">
              <label for="exampleInputPassword1">Size L: </label>
              <input type="text" class="form-control" name="quantity3" id="getquantity3" placeholder=""  pattern="[0-9]{1,8}"
              title="Size is number(min is 0 max 100000000)" value="{{$fashion->sizes[2]->pivot->quantity}}">
              <label for="exampleInputPassword1">Size XL: </label>
              <input type="text" class="form-control" name="quantity4" id="getquantity4" placeholder=""  pattern="[0-9]{1,8}"
              title="Size is number(min is 0 max 100000000)" value="{{$fashion->sizes[3]->pivot->quantity}}">
              <label for="exampleInputPassword1">Size XXL: </label>
              <input type="text" class="form-control" name="quantity5" id="getquantity5" placeholder=""  pattern="[0-9]{1,8}"
              title="Size is number(min is 0 max 100000000)" value="{{$fashion->sizes[4]->pivot->quantity}}">
            </div>
            <button type="submit" class="btn btn-primary" id="btsm">Submit</button>
            <a href="delete/{{$fashion->id}}"><div class="btn btn-primary">Delete</div></a>
          </form>
  
</font>
</div>
<script>

  $(document).ready(function(){
    var sex = $("#getSex").text();
    var style = $("#getStyle").text();   
    $("select#sex").val(sex).change();
    $("select#style").val(style).change();
//     var name = $("#getname").text();
//     var species = $("#getspecies").text();
//     var description = $("#getdescription").text();
//     var sold = $("#getsold").text();
//     var imglink = $("#getimglink").text();
//     var price = $("#getprice").text();
//     var quantity1 = $("#getquantity1").text();
//     var quantity2 = $("#getquantity2").text();
//     var quantity3 = $("#getquantity3").text();
//     var quantity4 = $("#getquantity4").text();
//     var quantity5 = $("#getquantity5").text();
//     $("#getname").change(function(){
//       if(!name || !species || !description||!sold||!imglink||!price||!quantity1||!quantity2||!quantity3||!quantity4||!quantity5 ){
//   alert("infomation is required.");
//   $("#btsm").css("display-color","none");
//       }
// });
// $("#getspecies").change(function(){
//       if(!name || !species || !description||!sold||!imglink||!price||!quantity1||!quantity2||!quantity3||!quantity4||!quantity5 ){
//   alert("infomation is required.");
//   $("#btsm").css("display-color","none");
//       }
// });
// $("#getdescription").change(function(){
//       if(!name || !species || !description||!sold||!imglink||!price||!quantity1||!quantity2||!quantity3||!quantity4||!quantity5 ){
//   alert("infomation is required.");
//   $("#btsm").css("display-color","none");
//       }
// });
// $("#getsold").change(function(){
//       if(!name || !species || !description||!sold||!imglink||!price||!quantity1||!quantity2||!quantity3||!quantity4||!quantity5 ){
//   alert("infomation is required.");
//   $("#btsm").css("display-color","none");
//       }
// });
// $("#getimglink").change(function(){
//       if(!name || !species || !description||!sold||!imglink||!price||!quantity1||!quantity2||!quantity3||!quantity4||!quantity5 ){
//   alert("infomation is required.");
//   $("#btsm").css("display-color","none");
//       }
// });
// $("#getprice").change(function(){
//       if(!name || !species || !description||!sold||!imglink||!price||!quantity1||!quantity2||!quantity3||!quantity4||!quantity5 ){
//   alert("infomation is required.");
//   $("#btsm").css("display-color","none");
//       }
// });
// $("#getquantity1").change(function(){
//       if(!name || !species || !description||!sold||!imglink||!price||!quantity1||!quantity2||!quantity3||!quantity4||!quantity5 ){
//   alert("infomation is required.");
//   $("#btsm").css("display-color","none");
//       }
// });
// $("#getquantity2").change(function(){
//       if(!name || !species || !description||!sold||!imglink||!price||!quantity1||!quantity2||!quantity3||!quantity4||!quantity5 ){
//   alert("infomation is required.");
//   $("#btsm").css("display-color","none");
//       }
// });
// $("#getquantity3").change(function(){
//       if(!name || !species || !description||!sold||!imglink||!price||!quantity1||!quantity2||!quantity3||!quantity4||!quantity5 ){
//   alert("infomation is required.");
//   $("#btsm").css("display-color","none");
//       }
// });
// $("#getquantity4").change(function(){
//       if(!name || !species || !description||!sold||!imglink||!price||!quantity1||!quantity2||!quantity3||!quantity4||!quantity5 ){
//   alert("infomation is required.");
//   $("#btsm").css("display-color","none");
//       }
// });
// $("#getquantity5").change(function(){
//       if(!name || !species || !description||!sold||!imglink||!price||!quantity1||!quantity2||!quantity3||!quantity4||!quantity5 ){
//   alert("infomation is required.");
//   $("#btsm").css("display-color","none");
//       }
// });
          
});
</script>
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
