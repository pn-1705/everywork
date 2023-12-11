<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    public function viewDashboard(){
        $employer = DB::table('table_employers')->where('id', '=',  Auth::id())->first();
        $data['employer'] = $employer;
//        dd($employer);
        return view('employer.pages.dashboard', $data);
    }
}
