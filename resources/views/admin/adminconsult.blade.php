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
   
  <form action="{{url('/uploadconsult')}}" method="Post" enctype="multipart/form-data">
    @csrf
    <br>
    <div class="form-group row">
      <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
          <input style="color:blue" type="text" name="name" required=""
          placeholder="Enter name">
      </div>
     
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Speciality</label>
        <input style="color:blue" type="text" name="speciality" required=""
        placeholder="Enter the speciality">
    </div><br>
    <div>
        <input type="file" name="image" required="">
    </div><br>
    <div>
        <button style="color:white" class="btn btn-primary mb-2" type="Submit" value="Save">Save</button>
    </div>
  </form>
<br>
<div style="position: relative; top: 60px; right:-150px">
  <table class="table table-hover" bgcolor="black" border="50px" >

    <tr>
      <th style="padding:30px">Consultant Name</th>
      <th style="padding:30px">Speciality</th>
      <th style="padding:30px">Image</th>
      <th style="padding:30px">Action</th>

    </tr>

    @foreach ($data as $data)

    <tr align="center" height="200">
    
        <td>{{$data->name}}</td>
        <td>{{$data->speciality}}</td>
        <td><img src="/consultimage//{{$data->image}}"></td>
        <td><a href="{{url('/updateconsult',$data->id)}}">Update</a>
        <a href="{{url('/deleteconsult',$data->id)}}">Delete</a></td>


      @endforeach
    </tr>
  </table>
   
    </div>
    @include("admin.adminscript")
  </body>
</html>
