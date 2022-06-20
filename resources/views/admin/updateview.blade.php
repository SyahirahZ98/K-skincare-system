<x-app-layout>
  
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include("admin.admincss")
   </head>
  <body>
      
    <div class="container-scroller"> 
    @include("admin.navbar")
    <div style="position:relative ; top: 60px; right: -150px">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-row">
         <div class="form-group col-md-6">
          <label for="colFormLabel">Title</label>
                <input style="color: white" class="form-control" type="text" name="title" value="{{$data->title}}" required>
            </div>
            <div class="form-group row">
              <div class="form-group col-md-6">
              <label for="colFormLabel" class="col-sm-1 col-form-label">Price</label>
             <input style="color: white" class="form-control" type="text" name="price" value="{{$data->price}}"  required>
         </div>
         
         <div class="form-group row">
          <div class="form-group col-md-6">
          <label for="colFormLabel" class="col-sm-1 col-form-label">Description</label>
             <input style="color: white" class="form-control" type="text" name="description" value="{{$data->description}}"  required>
         </div>
         <div class="form-group row">
          <div class="form-group col-md-6">
          <label for="colFormLabel" class="col-sm-1 col-form-label">OldImage</label>
            <img height="200" width="200" src="/productimage/{{$data->image}}">
        </div><br>
         <div>
             <label>New Image</label>
             <input type="file" name="image" required>
         </div>
         <div><br>
          <button style="color: white" type="Submit" class="btn btn-primary mb-2" value="Update consult">Submit</button>
         </div>
 
         </form>
    <br>
    <div>
    </div>
    </div>
    @include("admin.adminscript")
  </body>
</html>
