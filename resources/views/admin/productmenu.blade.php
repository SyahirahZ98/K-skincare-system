<x-app-layout>
  
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
   </head>
  <body>
    
    <div class="container-scroller"> 
    @include("admin.navbar")

       <form action="{{url('/uploadproduct')}}" method="post" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="form-group row">
          <div class="form-group col-md-6">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label">Title </label>
               <input style="color: black" type="text" name="title" placeholder="Write a title" required>
           </div>
           <div class="form-group row">
            <div class="form-group col-md-6">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label">Price </label>
            <input style="color: black" type="text" name="price" placeholder="Price" required="">
        </div>
        <div style="form-group row">
          <div class="form-group col-md-6">
            <label>Image</label>
            <input class="form-group col-md-9" type="file" name="image" required>
        </div>
        <div class="form-group row">
          <div class="form-group col-md-6">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label">Description</label>
            <input style="color: black" type="text" name="description" placeholder="Description" required>
        </div>
      
        <div style="padding:20px">
            <button style="color: white" type="Submit" class="btn btn-primary mb-2">Submit</button>
        </div>

        </form>
    
 <br>
  
    <div class="container"  style="position:relative ; top: 60px; right: -5px">
      <table class="table table-hover" bgcolor="black" border="4px">
          <tr>
          <th style="padding: 30px">Product Name </th>
          <th style="padding: 30px">Price </th>
          <th style="padding: 30px">Description</th>
          <th style="padding: 30px">Image</th>
          <th style="padding: 30px">Action</th>
  </tr>
  
  @foreach ($data as $data)
  
  <tr align="center">
    <td>{{$data->title}}</td>
    <td>{{$data->price}}</td>
    <td>{{$data->description}}</td>
    <td><img height="200" width="200" src="/productimage/{{$data->image}}"></td>
    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a>
    <a href="{{url('/updateview',$data->id)}}">Update</a></td>
  </tr>

  @endforeach
</table>
   </div>
   </div>
    <br><br>
   
    @include("admin.adminscript")
  </body>
</html>
