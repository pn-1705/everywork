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

    public function viewManageResume()
    {
        $listUV = DB::table('table_applyforjobs')
            ->select('table_jobseeker.ten','table_jobseeker.phone','table_jobseeker.email','table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_cv.fileCV as fileCVdatailen', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_jobseeker.ten','table_jobseeker.phone','table_jobseeker.email','table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_cv.fileCV')
            ->join('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->join('table_jobseeker', 'table_jobseeker.id', '=', 'table_applyforjobs.idAccount')
            ->leftjoin('table_cv', 'table_cv.idCV', '=', 'table_applyforjobs.idCV')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->orderBy('ngaydang', 'desc')->paginate(10)->withQueryString();
//        dd($listUV);

        $data['listUV'] = $listUV;


        return view('employer.manageresume', $data);
    }
}
