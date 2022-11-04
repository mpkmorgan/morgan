<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Vet;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_vet');
    }

    public function upload(Request $request)
    {
        $vet=new Vet;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('vetimage',$imagename);

        $vet->image=$imagename;

        $vet->name=$request->name;
        $vet->phone=$request->number;
        $vet->location=$request->location;
        $vet->emer=$request->emer;

        $vet->save();

        return redirect()->back()->with('message','Vet added ');


    }

    public function showappointment()

    {
        $data=Appointment::all();
        return view('admin.showappointment',compact('data'));
    }

    public function approve($id)
    {
        $data=appointment::find($id);

        $data->status='Approved';

        $data->save();

        return redirect()->back();
    }

    public function cancel($id)
    {
        $data=appointment::find($id);

        $data->status='Cancelled';

        $data->save();

        return redirect()->back();
    }

    public function showvet()
    {
        $data = vet::all();
        return view('admin.showvet',compact('data'));
    }

    public function deletevet($id)
    {
        $data=vet::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updatevet($id)
    {
        $data = vet::find($id);
        return view('admin.update_vet',compact('data'));
    }

    public function editvet(Request $Request , $id)
    {
        $vet = vet::find($id);

        $vet->name=$Request->name;
        $vet->phone=$Request->phone;
        $vet->location=$Request->location;
        $vet->emer=$Request->emer;



        
        $image=$Request->file;
        if ($image)
        {
       

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $Request->file->move('vetimage',$imagename);
        $vet->image=$imagename;
        }

        $vet->save();

        return redirect()->back()->with('message','Vet updated Successfully');

    }
}
