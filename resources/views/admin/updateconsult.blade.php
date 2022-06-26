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
   
   <form action="{{url('/updatedataconsult',$data->id)}}" method="Post" enctype="multipart/form-data">
    @csrf   
    <br>
       <div class="form-group row">
           <label for="colFormLabel" class="col-sm-2 col-form-label">Consultant Name</label>
           <div class="col-sm-10">
           <input style="color:blue" type="text" name="name" value="{{$data->name}}">
       </div><br><br>
       <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Speciality</label>
        <div class="col-sm-10">
        <input style="color:blue" type="text" name="speciality" value="{{$data->speciality}}">
    </div><br>
    <div class="form-group row">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Old Image</label>
      <div class="col-sm-10"><br> 
      <img height="200" width="200" src="/consultimage/{{$data->image}}">
    </div><br><br>
    <div class="form-group row">
      <label for="colFormLabel" class="col-sm-2 col-form-label">New Image</label>
        <input type="file" name="image">
    </div><br>
    <div>
        <button style="color: white" type="Submit" class="btn btn-primary mb-2" value="Update consult">Submit</button>
    </div>
   </form>

    </div>
    @include("admin.adminscript")
  </body>
</html>
