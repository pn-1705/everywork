<?php

namespace App\Http\Controllers\Employer;

use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
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

        $countJobPost = DB::table('table_jobs')
            ->where('id_nhatuyendung', '=', Auth::id())
            ->where('trangthai', 1)
            ->where('hannhanhoso', '>=', Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d'))
            ->count();
        $countJobWait = DB::table('table_jobs')
            ->where('id_nhatuyendung', '=', Auth::id())
            ->where('trangthai', 0)
            ->count();
        $countJobWaitAccept = DB::table('table_jobs')
            ->where('id_nhatuyendung', '=', Auth::id())
            ->where('trangthai', 3)
            ->count();
        $countJobExp = DB::table('table_jobs')
            ->where('id_nhatuyendung', '=', Auth::id())
            ->where('hannhanhoso', '<', Carbon::now('Asia/Ho_Chi_Minh'))
            ->count();

        $data['countJobPost'] = $countJobPost;
        $data['countJobWait'] = $countJobWait;
        $data['countJobWaitAccept'] = $countJobWaitAccept;
        $data['countJobExp'] = $countJobExp;

        $listJobPosting = DB::table('table_applyforjobs')
            ->select('table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_jobs.ngaydang', 'table_jobs.created_at', 'table_jobs.hannhanhoso', 'table_jobs.views', 'table_jobs.trangthai', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_jobs.ngaydang', 'table_jobs.created_at', 'table_jobs.hannhanhoso', 'table_jobs.views', 'table_jobs.trangthai')
            ->rightjoin('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->where('hannhanhoso', '>=', Carbon::now('Asia/Ho_Chi_Minh'))
            ->where('trangthai', '!=', 0)
            ->where('trangthai', '!=', 2)
            ->orderBy('ngaydang', 'desc')->take(4)->get();

        $listUV = DB::table('table_applyforjobs')
            ->select('table_applyforjobs.idApply', 'table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV as fileCVdatailen', 'table_cv.nameCV', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_applyforjobs.idApply', 'table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV', 'table_cv.nameCV')
            ->join('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->join('table_jobseeker', 'table_jobseeker.id', '=', 'table_applyforjobs.idAccount')
            ->leftjoin('table_cv', 'table_cv.idCV', '=', 'table_applyforjobs.idCV')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->orderBy('created_at', 'desc')->take(4)->get();

        $data['listJobPosting'] = $listJobPosting;
        $data['listUV'] = $listUV;

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
        $check = DB::table('table_jobs')
            ->where('id', '=', $id)
            ->select('hannhanhoso')->first()->hannhanhoso;
        if ($check < Carbon::now('Asia/Ho_Chi_Minh')) {
            return redirect()->route('employer.view_waitPostJob')->with('norole', 'Vui lòng cập nhật hạn nhận hồ sơ');
        }
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

    public function deleteJob($id)
    {
        Job::find($id)->delete();
        return redirect()->back();
    }

    public function viewManageResume()
    {
        $listUV = DB::table('table_applyforjobs')
            ->select('table_applyforjobs.idApply', 'table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV as fileCVdatailen', 'table_cv.nameCV', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_applyforjobs.idApply', 'table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV', 'table_cv.nameCV')
            ->join('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->join('table_jobseeker', 'table_jobseeker.id', '=', 'table_applyforjobs.idAccount')
            ->leftjoin('table_cv', 'table_cv.idCV', '=', 'table_applyforjobs.idCV')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->orderBy('created_at')->paginate(10)->withQueryString();
//        dd($listUV);
        $listJob = DB::table('table_applyforjobs')
            ->select('table_applyforjobs.idApply', 'table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV as fileCVdatailen', 'table_cv.nameCV', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_applyforjobs.idApply', 'table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV', 'table_cv.nameCV')
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
            ->select('table_applyforjobs.idApply', 'table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV as fileCVdatailen', 'table_cv.nameCV', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_applyforjobs.idApply', 'table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV', 'table_cv.nameCV')
            ->join('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->join('table_jobseeker', 'table_jobseeker.id', '=', 'table_applyforjobs.idAccount')
            ->leftjoin('table_cv', 'table_cv.idCV', '=', 'table_applyforjobs.idCV')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->orderBy('created_at')->paginate(10)->withQueryString();
//        dd($listUV);
//        dd($request -> idJob);
        $listUV = DB::table('table_applyforjobs')
            ->select('table_applyforjobs.idApply', 'table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV as fileCVdatailen', 'table_cv.nameCV', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_applyforjobs.idApply', 'table_jobseeker.ten', 'table_jobseeker.phone', 'table_jobseeker.email', 'table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_applyforjobs.created_at', 'table_applyforjobs.idAccount', 'table_applyforjobs.fileCV', 'table_applyforjobs.status', 'table_cv.fileCV', 'table_cv.nameCV')
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

    public function viewCV($idApply)
    {
//        dd($idApply);
        DB::table('table_applyforjobs')->where('idApply', $idApply)->where('status', 0)->update([
            'status' => 1
        ]);
        $filename = DB::table('table_applyforjobs')->where('idApply', $idApply)->first()->fileCV;
//        dd($filename);

        if ($filename != null) {
            return response()->file('public/CV/' . $filename);
        } else {
            $idCV = DB::table('table_applyforjobs')->where('idApply', $idApply)->first()->idCV;
            $CV = DB::table('table_cv')->where('idCV', $idCV)->first()->fileCV;
            return response()->file('public/CV/' . $CV);
        }
//        return asset('public/CV/'. $filename);
//        return response()->file('public/CV/'. $filename);
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
            $listJobs->where('table_jobs.id', $request->id);
            $nameJob = DB::table('table_jobs')->where('table_jobs.id', $request->id)->first()->tenkhongdau;

            $filePath = public_path('/applications_for_job_' . $nameJob . time() . '.xlsx');

        }
        if ($request->status != 5) {
            $listJobs->where('status', $request->status);
        }
        $listJobs = $listJobs->get();

        // Lấy danh sách sinh viên từ model

        // Tạo đối tượng Writer
        $writer = WriterEntityFactory::createXLSXWriter();

        // $writer = WriterEntityFactory::createWriter(Type::XLSX);

        // Mở file để ghi dữ liệu

        $writer->openToFile($filePath);

        $nameCompany = DB::table('table_employers')->where('id', Auth::id())->first()->ten;

        // Ghi tiêu đề cột
        $timeExport = Carbon::now('Asia/Ho_Chi_Minh');
        $title = ['', 'Tên công ty', '' . $nameCompany];
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
            if ($listJob->status == 0) {
                $nameStatus = 'Chưa xem';
            }
            if ($listJob->status == 1) {
                $nameStatus = 'Đã xem';
            }
            if ($listJob->status == 2) {
                $nameStatus = 'Đã gửi mail';
            }
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
                    $nameStatus]);
            $writer->addRow($dataRow);
        }

        // Đóng đối tượng Writer
        $writer->close();

        // Trả về file đính kèm
        return response()->download($filePath)->deleteFileAfterSend(true);
    }

    public function viewEmailConfig()
    {
        $listLetter = DB::table('table_letters')->get();
        return view('employer.pages.emailConfig.index', compact('listLetter'));
    }

    public function viewUpdateEmail($id)
    {
        $listLetter = DB::table('table_letters')->get();
        $letterUpdate = DB::table('table_letters')->where('idLetter', $id)->first();
        return view('employer.pages.emailConfig.edit', compact('listLetter', 'letterUpdate'));
    }

    public function updateEmail($id, Request $request)
    {
        $listLetter = DB::table('table_letters')->get();

        $letterUpdate = DB::table('table_letters')->where('idLetter', $id)->update([
            'title' => $request->letter_title,
            'content' => $request->letter_content_update,
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        return redirect()->route('employer.viewEmailConfig', compact('listLetter', 'letterUpdate'));
    }

    public function postEmailConfig(Request $request)
    {
        DB::table('table_letters')->insert([
            'idEmployer' => Auth::id(),
            'title' => $request->letter_title,
            'content' => $request->letter_content,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        $listLetter = DB::table('table_letters')->get();

        return redirect()->route('employer.viewEmailConfig', compact('listLetter'));
    }

    public function delEmail($id)
    {
        DB::table('table_letters')->where('idLetter', $id)->delete();
        return redirect()->route('employer.viewEmailConfig');
    }

    //Gửi email thông báo đến ứng viên
    public function sendLetter(Request $request)
    {
//        dd($request->all());
        DB::table('table_applyforjobs')->where('idApply', $request->idApply)->update([
            'status' => 2
        ]);
        $emailUngVien = User::find($request->idUngVien)->email;
        $letter = DB::table('table_letters')->where('idLetter', $request->idLetter)->first();

        Mail::send('employer.emails.inviteLetter', compact('letter', 'emailUngVien'), function ($email) use ($letter, $emailUngVien) {
            $email->subject('' . $letter->title);
            $email->to($emailUngVien);
        });

        return redirect()->back();
    }
}
