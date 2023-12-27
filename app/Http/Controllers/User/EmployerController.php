<?php

namespace App\Http\Controllers\User;


use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\EmployerRegisterRequest;
use App\Http\Requests\JobRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Benefit;
use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class EmployerController extends Controller
{
    public function home()
    {
        return view('employer.home');
    }

    public function login()
    {
        if (Auth::check() == false || Auth::user()->id_nhomquyen == 0 || Auth::user()->id_nhomquyen == 2) {
            return view('employer.login');
        }
        return redirect()->route('employer.home');

    }

    public function post_login(LoginRequest $request)
    {
        $users = DB::table('table_user')->where('id_nhomquyen', '=', 1)->get();
        $accountStatus = 0;
        $count = 0;
        foreach ($users as $user) {
            if (Hash::check($request->password, $user->password) && $request->email == $user->email) {
                $count++;
                $accountStatus = $user->status;
            }
        }
        $data = $request->only('email', 'password');
        if ($count == 1) {
            if ($accountStatus == 1) {
                if (Auth::attempt($data)) {
                    return redirect()->route('employer.viewDashboard');
                }
            } else {
                return back()->with('error', 'Tài khoản hoặc mật khẩu không đúng !');
            }
        }
        return back()->with('error', 'Tài khoản hoặc mật khẩu không đúng !');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('employer.login');
    }

    public function register()
    {
        return view('employer.register');
    }

    public function post_register(EmployerRegisterRequest $request)
    {
//        dd($request-> all());

        $id = DB::table('table_user')->max('id');
        $data['id'] = $id + 1;

        $token = strtoupper(Str::random(10));
        $data['token'] = $token;
        $data['ten'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['id_nhomquyen'] = 1;
        $password = $request->password;
        $password_h = bcrypt($request->password);
        $data['password'] = $password_h;
//dd($data);

        $dataEmployer['id'] = $id + 1;
        $dataEmployer['ten'] = $request->company_name;
        $dataEmployer['masothue'] = $request->taxid;
        $dataEmployer['diachi'] = $request->company_address;
        $dataEmployer['phone'] = $request->phone;
        $dataEmployer['email'] = $request->email;
        $dataEmployer['loaihinhhoatdong'] = $request->company_type;
        $dataEmployer['id_user'] = $id + 1;


        if ($customer = User::create($data)) {
            Employer::create($dataEmployer);
            Mail::send('employer.emails.active_account', compact('customer', 'password'), function ($email) use ($customer, $password) {
                $email->subject('Thông báo tạo tài khoản thành công');
                $email->to($customer->email, $customer->id_nhomquyen, $customer->id, $customer->token, $customer->ten, $password);
            });

            return view('employer.registersuccess');
        }
        return view('user.pages.login');
    }

    public function active_acount($token)
    {
//        $check = DB::table('table_user')->where('token', 123)->get();
//        dd($check);
        if (DB::table('table_user')->where('token', $token)->update(['token' => null, 'status' => 1])) {
            return redirect()->route('employer.login')->with('yes', 'Xác nhận tài khoản thành công! Bạn có thể đăng nhập.');
        } else {
            return redirect()->route('employer.register')->with('no', 'Đăng kí thất bại!');
        }
    }

    public function view_hrcentral()
    {
        return view('employer.hrcentral', $this->getDataJob());
    }
    public function view_waitPostJob()
    {
        return view('employer.waitPostJob', $this->getDataJob());
    }

    public function view_expJob()
    {
        return view('employer.expJob', $this->getDataJob());
    }
    public function view_addJob()
    {
        return view('employer.addJob');
    }

    public function addJob(JobRequest $request)
    {
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
        $phucloi = time();
        $newJob->phucloi = $phucloi;
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

        if ($request->has('img_banner')) {
            $file = $request->img_banner;
            $extension = $request->img_banner->extension();
            $filename = time() . '-banner-job.' . $extension;
            $file->move(public_path('banner_job'), $filename);
            $newJob->img_banner = $filename;
        }
        $newJob->id_nhatuyendung = Auth::id();
        $newJob->trangthai = 0;
        $newJob->tenkhongdau = $this->un_unicode($request->tencongviec);
        $newJob->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $newJob->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        $newJob->save();

        $newBenefit = new Benefit();
        $newBenefit->id = $phucloi;
        $newBenefit->chedobaohiem = $request->benefit1;
        $newBenefit->dulich = $request->benefit2;
        $newBenefit->chedothuong = $request->benefit3;
        $newBenefit->chamsocsuckhoe = $request->benefit4;
        $newBenefit->daotao = $request->benefit5;
        $newBenefit->tangluong = $request->benefit6;
        $newBenefit->laptop = $request->benefit7;
        $newBenefit->phucap = $request->benefit8;
        $newBenefit->xeduadon = $request->benefit9;
        $newBenefit->dulichnuocngoai = $request->benefit10;
        $newBenefit->dongphuc = $request->benefit11;
        $newBenefit->congtacphi = $request->benefit12;
        $newBenefit->phucapthuongnien = $request->benefit13;
        $newBenefit->nghiphepnam = $request->benefit14;
        $newBenefit->clbthethao = $request->benefit15;
        $newJob->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $newJob->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        $newBenefit->save();


        return redirect()->route('employer.view_waitPostJob')->with($this->getDataJob());
    }

    public function viewDetailJob($id)
    {
//        $list_benefits = \App\Models\Benefit::all()->where('id_phucloi', 123456)->first()->getOriginal();
//        dd($list_benefits);
        $job = Job::all()
            ->where('id_nhatuyendung', Auth::id())
            ->where('id', $id)->first();
        $data['job'] = $job;
        return view('employer.detailJob', $data);
    }

    public function duplicatedJob($id)
    {
        $job = Job::all()
            ->where('id_nhatuyendung', Auth::id())
            ->where('id', $id)->first()->getOriginal();
        unset($job['id']);
//        dd($job['tencongviec']);
        $job['tencongviec'] = $job['tencongviec'] . ' (Nhân bản)';
        $job['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        $id_phucloi = time();
        $phucloi = Benefit::all()
            ->where('id', $job['phucloi'])->first()->getOriginal();
        $phucloi['id'] = $id_phucloi;
//        dd($phucloi);
        Benefit::create($phucloi);

        $job['phucloi'] = $id_phucloi;
        Job::create($job);

        return redirect()->route('employer.view_waitPostJob')->with($this->getDataJob());
    }

    public function view_updateJob($id)
    {
        $job = Job::all()
            ->where('id_nhatuyendung', Auth::id())
            ->where('id', $id)->first();
        $data['job'] = $job;

        return view('employer.editJob', $data);
    }

    public function updateJob($id, JobRequest $request)
    {

        $newJob = Job::find($id);
//        dd($newJob);
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

        $banner_old = $newJob->img_banner;
        if ($request->has('img_banner')) {
            $file = $request->img_banner;
            $extension = $request->img_banner->extension();
            $filename = time() . '-img_banner.' . $extension;
            $file->move(public_path('banner_job'), $filename);
            File::delete('public/banner_job/' . $banner_old);
            $newJob->img_banner = $filename;
        }
//        $newJob->trangthai = 0;
        $newJob->tenkhongdau = $this->un_unicode($request->tencongviec);
//        $newJob->created_at = Carbon::now();
        $newJob->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        $newJob->update();

        $newBenefit = Benefit::find($newJob->phucloi);

        $newBenefit->chedobaohiem = $request->chedobaohiem;
        $newBenefit->dulich = $request->dulich;
        $newBenefit->chedothuong = $request->chedothuong;
        $newBenefit->chamsocsuckhoe = $request->chamsocsuckhoe;
        $newBenefit->daotao = $request->daotao;
        $newBenefit->tangluong = $request->tangluong;
        $newBenefit->laptop = $request->laptop;
        $newBenefit->phucap = $request->phucap;
        $newBenefit->xeduadon = $request->xeduadon;
        $newBenefit->dulichnuocngoai = $request->dulichnuocngoai;
        $newBenefit->dongphuc = $request->dongphuc;
        $newBenefit->congtacphi = $request->congtacphi;
        $newBenefit->phucapthuongnien = $request->phucapthuongnien;
        $newBenefit->nghiphepnam = $request->nghiphepnam;
        $newBenefit->clbthethao = $request->clbthethao;
//        $newJob->created_at = Carbon::now();
        $newJob->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        $newBenefit->update();

        return redirect()->route('employer.view_hrcentral')->with($this->getDataJob());
    }

    public function getDataJob()
    {
        //Việc làm đang đăng
        $listJobs = DB::table('table_jobs')
            ->leftJoin('table_benefits', 'table_jobs.phucloi', '=', 'table_benefits.id')
            ->select('table_benefits.*', 'table_jobs.*')
            ->where('id_nhatuyendung', Auth::id())
            ->where('hannhanhoso', '>=', Carbon::now()->toDateString())
            ->where('trangthai', 1)
            ->orderBy('tencongviec')->paginate(10)->withQueryString();

        $listJobs = DB::table('table_applyforjobs')
            ->select('table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_jobs.ngaydang', 'table_jobs.created_at', 'table_jobs.hannhanhoso', 'table_jobs.views', 'table_jobs.trangthai', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_jobs.ngaydang', 'table_jobs.created_at', 'table_jobs.hannhanhoso', 'table_jobs.views', 'table_jobs.trangthai')
            ->rightjoin('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->where('hannhanhoso', '>=', Carbon::now()->toDateString())
            ->where('trangthai', '!=', 0)
            ->where('trangthai', '!=', 2)
            ->orderBy('ngaydang', 'desc')->paginate(10)->withQueryString();

        //Việc làm chở chờ đăng (nháp)
        $listJobsWait = DB::table('table_applyforjobs')
            ->select('table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_jobs.created_at', 'table_jobs.hannhanhoso', 'table_jobs.views', 'table_jobs.trangthai', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_jobs.created_at', 'table_jobs.hannhanhoso', 'table_jobs.views', 'table_jobs.trangthai')
            ->rightjoin('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->where('table_jobs.trangthai', 0)
            ->orderBy('created_at', 'desc')->paginate(5)->withQueryString();

        //Việc làm hết hạn
        $listJobsExp = DB::table('table_applyforjobs')
            ->select('table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_jobs.created_at', 'table_jobs.hannhanhoso', 'table_jobs.views', DB::raw('count(table_applyforjobs.idJob) as danop'))
            ->groupBy('table_jobs.id', 'table_jobs.tencongviec', 'table_jobs.id_nhatuyendung', 'table_jobs.created_at', 'table_jobs.hannhanhoso', 'table_jobs.views')
            ->rightjoin('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
            ->where('table_jobs.id_nhatuyendung', Auth::id())
            ->where('table_jobs.hannhanhoso', '<', Carbon::now()->toDateString())
            ->orderBy('created_at', 'desc')->paginate(10)->withQueryString();
//        dd($jobHot);

        $data['listJobs'] = $listJobs;
        $data['listJobsExp'] = $listJobsExp;
        $data['listJobsWait'] = $listJobsWait;

        return ($data);
    }

    public function view_company_info()
    {
        $info = Employer::where('id', Auth::id())->first();
//        dd($info);
        $data['info'] = $info;
        return view('employer.company_info', $data);
    }

    public function post_company_info(Request $request)
    {
        $employer = Employer::find(Auth::id());

        $avt_old = $employer->avt;
        $banner_old = $employer->banner;

        if ($employer) {
            if ($request->has('avt')) {
                $file = $request->avt;
                $extension = $request->avt->extension();
                $filename = time() . '-avatar.' . $extension;
                $file->move(public_path('avatar'), $filename);
                $employer->avt = $filename;
                File::delete('public/avatar/' . $avt_old);

            }
            if ($request->has('banner')) {
                $file = $request->banner;
                $extension = $request->banner->extension();
                $filename = time() . '-banner.' . $extension;
                $file->move(public_path('banner'), $filename);
                $employer->banner = $filename;
                File::delete('public/banner/' . $banner_old);
            }
            $employer->ten = $request->ten;
            $employer->loaihinhhoatdong = $request->loaihinhhoatdong;
            $employer->website = $request->website;
            $employer->masothue = $request->masothue;
            $employer->thongtin = $request->thongtin;
            $employer->thongdiep = $request->thongdiep;
            $employer->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

            $employer->update();
        }

        $info = Employer::where('id', Auth::id())->first();
//        dd($info);
        $data['info'] = $info;
        return back()->with($data);
    }

    public function view_account()
    {
        $employer = User::find(Auth::id());
//        dd($employer);
        $data['employer'] = $employer;
        return view('employer.account_info', $data);
    }

    public function post_account(Request $request)
    {
//        dd($request);
        $employer = User::find(Auth::id());
//        dd($employer);
        $employer->ten = $request->ten;
        $employer->diachi = $request->diachi;
        $employer->city = $request->city;
        $employer->phone = $request->phone;
        $employer->save();
        $data['employer'] = $employer;
        return redirect()->route('employer.view_account')->with('succes', 'Cập nhật thông tin thành công !');
    }

    public function changepassword(Request $request)
    {
        $employer = User::find(Auth::id());
        $data['employer'] = $employer;
        return view('employer.changepassword', $data);
    }

    public function post_changepassword(ChangePasswordRequest $request)
    {
        $employer = User::find(Auth::id());
//        dd($employer);
        $employer->password = bcrypt($request->newpass);
        $employer->save();
        return redirect()->route('employer.changepassword')->with('succes', 'Đổi mật khẩu thành công !');
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
}
