<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployerManagerController extends Controller
{
    public function indexNewRegister(){
        $newEmployers = DB::table('table_user')
            ->leftJoin('table_employers', 'table_employers.id', '=', 'table_user.id')
            ->where('id_nhomquyen', 1)
            ->where('status', 1)
            ->select('table_user.email', 'table_employers.avt', 'table_employers.ten', 'table_employers.phone', 'table_employers.masothue', 'table_employers.website')
            ->get();
//        dd($newEmployers);
        $data['newEmployers'] = $newEmployers;
        return view('admin.pages.employers.newRegister.index', $data);
    }
}
