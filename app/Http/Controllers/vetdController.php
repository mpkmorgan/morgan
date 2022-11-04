<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vetdController extends Controller
{
    public function viewappointments()
    {
        return view('vet.vetd');
    }

    public function appointments()
    {
        return view ('vet.appointments');
    }
}
