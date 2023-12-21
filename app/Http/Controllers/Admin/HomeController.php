<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use function view;

session_start();

class HomeController extends Controller
{

    public function dashboard()
    {

        return view('admin.pages.dashboard');
    }
    public function contact()
    {
        return view('contact.index');
    }
}

