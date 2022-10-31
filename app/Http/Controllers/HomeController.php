<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Vet;
use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $vet = vet::all();
                return view ('user.home',compact('vet'));
            }
            else
            {
                return view ('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id())
        {
            return redirect('home');
        }
        else
        {

        $vet = vet::all();

        return view('user.home',compact('vet'));
    }
    }

    public function appointment (Request $request)
    {
        $data =new Appointment;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->vet=$request->vet;

        $data->phone=$request->number;

        $data->message=$request->message;

        $data->status='In progress';

        if (Auth::id())

        {
        $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Booking Successful');
    }

    public function myappointment()
    {
        if (Auth::id())
        {
            $userid=Auth::user()->id;

            $appoint=Appointment::where('user_id',$userid)->get();
        return view ('user.my_appointment',compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }    

    public function cancel_appoint($id)
    
    {
        $data =Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
