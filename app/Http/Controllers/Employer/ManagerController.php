<?php

namespace App\Http\Controllers\Employer;

use App\Models\Employer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    public function viewDashboard()
    {
        $employer = DB::table('table_employers')->where('id', '=', Auth::id())->first();
        $data['employer'] = $employer;
//        dd($employer);
        return view('employer.pages.dashboard', $data);
    }

    public function sendRequestRole()
    {
        DB::table('table_employers')->where('id', '=', Auth::id())->update(
            ['trangthai' => 1]
        );
//        dd($employer);
        return redirect()->back();
    }

    public function postJob($id)
    {
        if (Employer::where('id', Auth::id())->first()->trangthai == 2) {
            DB::table('table_jobs')->where('id', '=', $id)->update(
                ['trangthai' => 3,
                    'ngaydang' => Carbon::now('Asia/Ho_Chi_Minh')]
            );
            return redirect()->route('employer.view_hrcentral');
        } else {
            return redirect()->back()->with('norole', 'Tài khoản của bạn chưa được phép đăng tuyển! Hãy cập nhật đầy đủ thông tin doanh nghiệp để được cấp quyền.');
        }
    }
}
