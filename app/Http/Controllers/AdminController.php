<?php

namespace App\Http\Controllers;

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
        return view('admin.showappointment');
    }
}
