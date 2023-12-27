<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmployerManagerController extends Controller
{
    public function indexNewRegister()
    {
        $newEmployers = DB::table('table_user')
            ->leftJoin('table_employers', 'table_employers.id', '=', 'table_user.id')
            ->where('id_nhomquyen', 1)
            ->where('status', 1)
            ->where('table_employers.trangthai', '!=', 2)
            ->select('table_user.email','table_employers.id', 'table_employers.avt', 'table_employers.ten', 'table_employers.phone',
                'table_employers.masothue', 'table_employers.website', 'table_employers.tenkhongdau', 'table_employers.trangthai')->get();
//        dd($newEmployers);

        $data['newEmployers'] = $newEmployers;
        return view('admin.pages.employers.newRegister.index', $data);
    }

    public function grantPermissions($id)
    {
//        dd($id);
        DB::table('table_employers')->where('id', '=', $id)->update(
            ['trangthai' => 2]
        );
//        dd($employer);
        return redirect()->back();
    }
}
