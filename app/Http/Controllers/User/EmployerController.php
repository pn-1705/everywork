<?php

namespace App\Http\Controllers\User;


use App\Http\Requests\JobRequest;
use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function view_hrcentral()
    {
        $listJobs = Job::all()
            ->where('id_nhatuyendung', Auth::id())
            ->where('hannhanhoso', '>=', Carbon::now()->toDateString())
            ->where('trangthai', 1); //Việc làm đăng đăng
        $listJobsWait = Job::all()
            ->where('id_nhatuyendung', Auth::id())
            ->where('trangthai', 0); // Việc làm chờ đăng (nháp)
        $listJobsExp = Job::all()
            ->where('id_nhatuyendung', Auth::id())
            ->where('hannhanhoso', '<', Carbon::now()->toDateString()); //Việc làm hết hạn
        $data['listJobs'] = $listJobs;
        $data['listJobsExp'] = $listJobsExp;
        $data['listJobsWait'] = $listJobsWait;
//        dd($listJobsExp);

        return view('employer.hrcentral', $data);
    }

    public function view_postJob()
    {
        return view('employer.addJob');
    }

    public function un_unicode($istring)
    {
        $istring = strtolower($istring); //chuyển chữ hoa thành chữ thường
        $unicode = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd' => 'đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D' => 'Đ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach ($unicode as $nonUnicode => $uni) {
            $istring = preg_replace("/($uni)/i", $nonUnicode, $istring);
        }
        $istring = str_replace('/', '', $istring);
        $istring = str_replace('-', '', $istring);
        $istring = str_replace('  ', ' ', $istring);
        $istring = str_replace(' ', '-', $istring);
        return $istring;
    }

    public function postJob(JobRequest $request)
    {
//        dd($request-> all());
        $newJob = new Job();

        $newJob->tencongviec = $request->tencongviec;
        $newJob->id_nganhnghe = $request->id_nganhnghe;
        $newJob->noilamviec = $request->noilamviec;
        $newJob->diachilamviec = $request->diachilamviec;
        $newJob->mota = $request->mota;
        $newJob->yeucau = $request->yeucau;
        $newJob->donvitien = $request->donvitien;
        $newJob->minluong = $request->minluong;
        $newJob->maxluong = $request->maxluong;
        $newJob->hinhthuc = $request->hinhthuc;
        $newJob->hannhanhoso = $request->hannhanhoso;
        $newJob->gioitinh = $request->gioitinh;
        $newJob->minold = $request->minold;
        $newJob->maxold = $request->maxold;
        $newJob->kinhnghiem = $request->kinhnghiem;
        $newJob->kn_tunam = $request->tu_nam;
        $newJob->kn_dennam = $request->den_nam;
        $newJob->capbac = $request->capbac;
        $newJob->bangcap = $request->bangcap;
        $newJob->workforhome = $request->wfh;
        $newJob->link_youtube = $request->link_youtube;
        $newJob->img_banner = $request->img_banner;
        $newJob->id_nhatuyendung = Auth::id();
        $newJob->trangthai = 1;
        $newJob->tenkhongdau = $this->un_unicode($request->tencongviec);
        $newJob->created_at = Carbon::now();
        $newJob->updated_at = Carbon::now();

        $newJob->save();

        $listJobs = Job::all()
            ->where('id_nhatuyendung', Auth::id())
            ->where('hannhanhoso', '>=', Carbon::now()->toDateString())
            ->where('trangthai', 1); //Việc làm đăng đăng
        $listJobsWait = Job::all()
            ->where('id_nhatuyendung', Auth::id())
            ->where('trangthai', 0); // Việc làm chờ đăng (nháp)
        $listJobsExp = Job::all()
            ->where('id_nhatuyendung', Auth::id())
            ->where('hannhanhoso', '<', Carbon::now()->toDateString()); //Việc làm hết hạn

        $data['listJobs'] = $listJobs;
        $data['listJobsExp'] = $listJobsExp;
        $data['listJobsWait'] = $listJobsWait;

        return view('employer.hrcentral', $data);
    }

    public function viewDetailJob($id)
    {
//        dd($id);
        $job = Job::all()
            ->where('id_nhatuyendung', Auth::id())
            ->where('id', $id)->first();
        $data['job'] = $job;
        return view('employer.detailJob', $data);
    }

}
