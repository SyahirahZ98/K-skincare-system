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
   
    <div style="position: relative; top:70px; right: -150;">
        <table class="table table-hover" bgcolor="black" border="1px">
            <tr>
                <th style="padding: 30px;">First Name</th>
                <th style="padding: 30px;">Last Name</th>
                <th style="padding: 30px;">Email</th>
                <th style="padding: 30px;">Address</th>
                <th style="padding: 30px;">City</th>
                <th style="padding: 30px;">Code</th>
                <th style="padding: 30px;">Notes</th>
                <th style="padding: 30px;">Images</th>
            </tr>
            @foreach ($data as $data)
                
            <tr align:"center">
                <td>{{$data->firstname}}</td>
                <td>{{$data->lastname}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->city}}</td>
                <td>{{$data->code}}</td>
                <td>{{$data->notes}}</td>
                <td>{{$data->image}}</td>
            </tr>
            @endforeach
        </table>

    </div>
    @include("admin.adminscript")
  </body>
</html>