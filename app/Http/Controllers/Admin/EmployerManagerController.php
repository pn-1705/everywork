<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmployerManagerController extends Controller
{
    public function index()
    {
        $newEmployers1 = DB::table('table_user')
            ->leftJoin('table_employers', 'table_employers.id', '=', 'table_user.id')
            ->where('id_nhomquyen', 1)
            ->where('status', 1)
            ->where('table_employers.trangthai', '=', 5)
            ->select('table_user.email', 'table_employers.id', 'table_employers.avt', 'table_employers.ten', 'table_employers.phone',
                'table_employers.masothue', 'table_employers.website', 'table_employers.tenkhongdau', 'table_employers.trangthai');
        $newEmployers = DB::table('table_user')
            ->leftJoin('table_employers', 'table_employers.id', '=', 'table_user.id')
            ->where('id_nhomquyen', 1)
            ->where('status', 1)
            ->where('table_employers.trangthai', '=', 2)
            ->select('table_user.email', 'table_employers.id', 'table_employers.avt', 'table_employers.ten', 'table_employers.phone',
                'table_employers.masothue', 'table_employers.website', 'table_employers.tenkhongdau', 'table_employers.trangthai')->union($newEmployers1)->get();
//        dd($newEmployers);

        $data['newEmployers'] = $newEmployers;
        return view('admin.pages.employers.index', $data);
    }

    public function indexNewRegister()
    {
        $newEmployers = DB::table('table_user')
            ->leftJoin('table_employers', 'table_employers.id', '=', 'table_user.id')
            ->where('id_nhomquyen', 1)
            ->where('status', 1)
            ->where('table_employers.trangthai', '!=', 2)
            ->select('table_user.email', 'table_employers.id', 'table_employers.avt', 'table_employers.ten', 'table_employers.phone',
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
        $employer = DB::table('table_employers')->where('id', '=', $id)->first();
        if ($employer) {
            Mail::send('admin.emails.grantPermissions', compact('employer'), function ($email) use ($employer) {
                $email->subject('[EveryWork]_Email tự động.');
                $email->to($employer->email);
            });
        }
//        dd($employer);
        return redirect()->back();
    }

    public function refusePermissions($id)
    {
//        dd($id);
        DB::table('table_employers')->where('id', '=', $id)->update(
            ['trangthai' => 4]//đã từ chối
        );
        $employer = DB::table('table_employers')->where('id', '=', $id)->first();
        if ($employer) {
            Mail::send('admin.emails.refusePermissions', compact('employer'), function ($email) use ($employer) {
                $email->subject('[EveryWork]_Email tự động.');
                $email->to($employer->email);
            });
        }
//        dd($employer);
        return redirect()->back();
    }

    public function huyPermissions($id)
    {
//        dd($id);
        DB::table('table_employers')->where('id', '=', $id)->update(
            ['trangthai' => 5]//đã từ chối
        );
//        dd($employer);
        return redirect()->back();
    }

    public function caplaiPermissions($id)
    {
//        dd($id);
        DB::table('table_employers')->where('id', '=', $id)->update(
            ['trangthai' => 2]//đã từ chối
        );
//        dd($employer);
        return redirect()->back();
    }

    public function search(Request $request)
    {
//        dd($request -> keyword);
        $newEmployers1 = DB::table('table_user')
            ->leftJoin('table_employers', 'table_employers.id', '=', 'table_user.id')
            ->where('id_nhomquyen', 1)
            ->where('status', 1)
            ->where('table_employers.trangthai', '=', 5)
            ->where('table_employers.ten', 'like' , '%' . $request->keyword . '%')
            ->select('table_user.email', 'table_employers.id', 'table_employers.avt', 'table_employers.ten', 'table_employers.phone',
                'table_employers.masothue', 'table_employers.website', 'table_employers.tenkhongdau', 'table_employers.trangthai');
        $newEmployers = DB::table('table_user')
            ->leftJoin('table_employers', 'table_employers.id', '=', 'table_user.id')
            ->where('id_nhomquyen', 1)
            ->where('status', 1)
            ->where('table_employers.trangthai', '=', 2)
            ->where('table_employers.ten', 'like' , '%' . $request->keyword . '%')
            ->select('table_user.email', 'table_employers.id', 'table_employers.avt', 'table_employers.ten', 'table_employers.phone',
                'table_employers.masothue', 'table_employers.website', 'table_employers.tenkhongdau', 'table_employers.trangthai')->union($newEmployers1)->get();
//        dd($newEmployers);

        $data['newEmployers'] = $newEmployers;
//        DB::table('table_employers')->where('ten', '=', $request->keyword)->get();
//        dd($employer);
        return view('admin.pages.employers.index',$data);
    }

}
