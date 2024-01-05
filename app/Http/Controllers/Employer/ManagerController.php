<?php

namespace App\Http\Controllers\Employer;

use App\Models\Employer;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
            ->select('table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV as fileCVdatailen', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV')
            ->join('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->join('table_jobseeker', 'table_jobseeker.id', '=', 'table_applyforjobs.idAccount')
            ->leftjoin('table_cv', 'table_cv.idCV', '=', 'table_applyforjobs.idCV')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->orderBy('created_at')->paginate(10)->withQueryString();
//        dd($listUV);
        $listJob = DB::table('table_applyforjobs')
            ->select('table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV as fileCVdatailen', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV')
            ->join('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->join('table_jobseeker', 'table_jobseeker.id', '=', 'table_applyforjobs.idAccount')
            ->leftjoin('table_cv', 'table_cv.idCV', '=', 'table_applyforjobs.idCV')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->orderBy('created_at')->paginate(10)->withQueryString();

        $data['listJob'] = $listJob;
        $data['listUV'] = $listUV;
        $data['request'] = 0;
        $data['requestStatus'] = 5;

        return view('employer.manageresume', $data);
    }

    public function locUngVien(Request $request)
    {
        $listJob = DB::table('table_applyforjobs')
            ->select('table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV as fileCVdatailen', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV')
            ->join('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->join('table_jobseeker', 'table_jobseeker.id', '=', 'table_applyforjobs.idAccount')
            ->leftjoin('table_cv', 'table_cv.idCV', '=', 'table_applyforjobs.idCV')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->orderBy('created_at')->paginate(10)->withQueryString();
//        dd($listUV);
//        dd($request -> idJob);
        $listUV = DB::table('table_applyforjobs')
            ->select('table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV as fileCVdatailen', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV')
            ->join('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->join('table_jobseeker', 'table_jobseeker.id', '=', 'table_applyforjobs.idAccount')
            ->leftjoin('table_cv', 'table_cv.idCV', '=', 'table_applyforjobs.idCV')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->orderBy('created_at');
//        dd($listUV);

        if ($request->idJob != 0) {
            $listUV->where('table_jobs.id', $request->idJob);
        }
        if ($request->status != 5) {
            $listUV->where('status', $request->status);
        }
        $listUV = $listUV->paginate(10)->withQueryString();

        $data['listJob'] = $listJob;
        $data['listUV'] = $listUV;
        $data['request'] = $request->idJob;
        $data['requestStatus'] = $request->status;

//        dd($employer);
        return view('employer.manageresume', $data);
    }

    public function exportFileJobSeeker(Request $request)
    {

//        dd($request->id);
        $listJobs = DB::table('table_applyforjobs')
            ->select('table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobseeker.gioitinh', 'table_jobseeker.ngaysinh', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV as fileCVdatailen', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobseeker.gioitinh', 'table_jobseeker.ngaysinh', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV')
            ->join('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->join('table_jobseeker', 'table_jobseeker.id', '=', 'table_applyforjobs.idAccount')
            ->leftjoin('table_cv', 'table_cv.idCV', '=', 'table_applyforjobs.idCV')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->orderBy('created_at');

        $filePath = public_path('/applications_for_job_' . time() . '.xlsx');

        if ($request->id != 0) {
            $listJobs ->where('table_jobs.id', $request->id);
            $nameJob = DB::table('table_jobs')->where('table_jobs.id', $request->id)->first()->tenkhongdau;

            $filePath = public_path('/applications_for_job_' .$nameJob. time() . '.xlsx');

        }
        if ($request->status != 5) {
            $listJobs ->where('status', $request->status);
        }
        $listJobs = $listJobs->get();

        // Lấy danh sách sinh viên từ model

        // Tạo đối tượng Writer
        $writer = WriterEntityFactory::createXLSXWriter();

        // $writer = WriterEntityFactory::createWriter(Type::XLSX);

        // Mở file để ghi dữ liệu

        $writer->openToFile($filePath);

        // Ghi tiêu đề cột
        $timeExport = Carbon::now('Asia/Ho_Chi_Minh');
        $title = ['', 'Tên công ty', 'cêd'];
        $day = ['', 'Ngày xuất báo cáo', '' . $timeExport];
        $space = [''];
        $header = ['STT', 'Ngày nhận', 'Họ và tên ứng viên', 'Công việc', 'SĐT', 'Email', 'Giới tinh', 'Ngày sinh', 'Trạng thái'];

        $titleRow = WriterEntityFactory::createRowFromArray($title);
        $dayRow = WriterEntityFactory::createRowFromArray($day);
        $spaceRow = WriterEntityFactory::createRowFromArray($space);
        $headerRow = WriterEntityFactory::createRowFromArray($header);

        $writer->addRow($titleRow);
        $writer->addRow($dayRow);
        $writer->addRow($spaceRow);
        $writer->addRow($headerRow);

        // Ghi dữ liệu sinh viên
        $stt = 1;
        foreach ($listJobs as $listJob) {
            $dataRow = WriterEntityFactory::createRowFromArray(
                [
                    $stt++,
                    $listJob->created_at,
                    $listJob->ten,
                    $listJob->tencongviec,
                    $listJob->phone,
                    $listJob->email,
                    $listJob->gioitinh = 0 ? 'Nữ' : 'Nam',
                    $listJob->ngaysinh,
                    $listJob->status]);
            $writer->addRow($dataRow);
        }

        // Đóng đối tượng Writer
        $writer->close();

        // Trả về file đính kèm
        return response()->download($filePath)->deleteFileAfterSend(true);
    }
}
