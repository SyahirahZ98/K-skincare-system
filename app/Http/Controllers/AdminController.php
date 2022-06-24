<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Product;

use App\Models\Reservation;

use App\Models\Consultant;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users", compact("data"));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id) 
    {

        $data=product::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id) 
    {

        $data=product::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data=product::find($id);

        $image = $request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productimage',$imagename);
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

    public function productmenu()
    {
        $data =product::all();
        return view("admin.productmenu",compact("data"));
    }

    public function upload(Request $request)
    {
      $data = new product;

      $image = $request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productimage',$imagename);
        $data->image=$imagename;

        $data->name=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

    public function reservation(Request $request)
    {
      $data = new reservation;


        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
    }

    public function viewreservation()
    {
        $data=reservation::all();
        return view("admin.adminreservation", compact("data"));
    }

    public function viewconsult()
    {
       $data=consultant::all();
       return view("admin.adminconsult", compact("data")); 
    }

    public function uploadconsult(Request $request)
    {
        $data=new consultant;
        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('consultimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();

        return redirect()->back();
    }

    public function updateconsult($id)
    {
        $data=consultant::find($id);
        return view("admin.updateconsult",compact("data"));
    }

    public function updatedataconsult(Request $request, $id)
    {
      $data=consultant::find($id);  
      $image=$request->image;
      if($image)
      {
      $imagename =time().'.'.$image->getClientOriginalExtension();
         $request->image->move('consultimage',$imagename);
         $data->image=$imagename;
      }
      $data->name=$request->name;
      $data->speciality=$request->speciality;
      $data->save();
      return redirect()->back();
    }

    public function deleteconsult($id)
    {
        $data=consultant::find($id);
        $data->delete();
        return redirect()->back();
    }
    
}

