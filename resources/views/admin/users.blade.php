<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
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
           
               <div style="position: relative; top: 60px; right:-150px">
               <table class="table table-hover" bgcolor="black" border="4px">
                   <tr>
                        <th style="padding:30px">Id</th>
                       <th style="padding:40px">Name</th>
                       <th style="padding:40px">Email</th>
                       <th style="padding:40px">Action</th>
                   </tr>
                   @foreach ($data as $data)
                    
                   <tr align="center">
                        <td>{{$data->id}}</td>
                       <td>{{$data->name}}</td>
                       <td>{{$data->email}}</td>

                       @if ($data->usertype=="2")
                       <td><a href="{{url('deleteuser',$data->id)}}">Delete</a></td>
                        @else
                        <td><a>Not Allowed</td>
                            @endif   
                   </tr>
                   @endforeach
               </table>
            </div>
            @include("admin.adminscript")
          </body>
        </html>
        
    </body>
</html>