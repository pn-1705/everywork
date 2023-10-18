<?php

namespace App\Http\Controllers\User;


class EmployerController extends Controller
{
    public function view_hrcentral()
    {
        return view('employer.hrcentral');
    }

    public function view_postJob()
    {
        return view('employer.addJob');
    }
}
