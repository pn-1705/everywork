<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\ApplyJobRequest;
use App\Models\City;
use App\Models\DanhMucNganhNghe;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use function back;
use function redirect;
use function view;
use PDF;

class UserController extends Controller
{
    public function quen_mk_view()
    {
        if (Session('id') == null) {
            return view('user.pages.quen_mk');
        } else {
            return redirect()->intended('/');
        }
    }

    public function doi_mk_view()
    {
        if (Session('id') == null) {
            return redirect()->intended('/login');
        } else {
            $result = DB::table('nguoidung')->where('id', Session('id'))->first();
            return view('user.pages.doi_mk', ['email' => $result->email]);
        }
    }

    public function doi_mk(Request $rq)
    {
        // kiểm tra mật khẩu cũ
        if (Session()->get('id') != null) {
            $result = DB::table('nguoidung')->where('email', $rq->email)->first();
            if (md5($rq->password_old) != $result->password) {
                return view('user.pages.doi_mk', ['error' => 'Mật khẩu cũ không đúng', 'email' => $rq->email]);
            }
        }
        // kiểm tra mật khẩu mới
        if ($rq->password != $rq->password_kt) {
            return view('user.pages.doi_mk', ['error' => 'Mật khẩu xác nhận không đúng', 'email' => $rq->email]);
        } else {
            $password = md5($rq->password);
            $updated = DB::update('update nguoidung set password = ? where email = ?', [$password, $rq->email]);
            return redirect()->intended('/login');
        }
    }

    public function user_inf()
    {
        if (Session()->get('id') == null)
            return redirect()->intended('/login');
        else {
            $result = DB::table('nguoidung')->where('id', Session()->get('id'))->first();
            return view('user.pages.information', ['user' => $result]);
        }
    }

    public function user_inf_edid(Request $rq)
    {
        DB::table('nguoidung')
            ->where('id', Session()->get('id'))
            ->update(['Ho' => $rq->ho,
                'Ten' => $rq->ten,
                'SDT' => $rq->sdt,
                'GioiTinh' => $rq->gt,
                'id_tinh' => $rq->id_tinh,
                'DiaChi' => $rq->dia_chi
            ]);
        return back()->with('mes', 'Sửa đổi thông tin thành công');
    }

    public function don_mua()
    {
        if (Session()->get('id') == null)
            return redirect()->intended('/login');
        else {
            $result = DB::table('hoadon')
                ->where('MaND', Session()->get('id'))
                ->orderBy('id', 'desc')
                ->get();
            return view('user.pages.don_mua', ['don_mua' => $result]);
        }
    }

    public function in_don_hang($id_hd)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->in_don_hang_noi_dung($id_hd));
        return $pdf->stream();
    }

    public function in_don_hang_noi_dung($id_hd)
    {
        $nguoi_dung = DB::table('hoadon')->where('id', $id_hd)->first();
        $van_chuyen = $nguoi_dung->id_tinh = 15 ? 20000 : 35000;

        $sp_thanh_toan = DB::table('chitiethoadon')->where('MaHD', $id_hd)->get();
        $san_pham = array();
        $gia = 0;
        $i = 0;
        foreach ($sp_thanh_toan as $value) {
            $sp = DB::table('sanpham')->where('id', $value->MaSP)->first();
            $khuyen_mai = DB::table('khuyenmai')->where('id', $sp->KM_id)->first();
            $sl = $value->SoLuong;
            $gia += $sp->DonGia * $sl;


            $san_pham[$i]['ten'] = $sp->TenSP;
            $san_pham[$i]['DonGia'] = $sp->DonGia;
            $san_pham[$i]['so_luong'] = $sl;
            if ($khuyen_mai->don_vi == 'VNĐ') {
                $san_pham[$i]['khuyen_mai'] = $khuyen_mai->GiaTriKM * $sl;
            } else {
                $san_pham[$i]['khuyen_mai'] = ($sp->DonGia * $khuyen_mai->GiaTriKM / 100) * $sl;
            }
            $i++;
        }
        return view('user.pages.xuat_hoa_don', ['id_hd' => $id_hd, 'nguoi_dung' => $nguoi_dung, 'san_pham' => $san_pham, 'gia' => $gia, 'van_chuyen' => $van_chuyen]);
    }

    //mới
    public function vieclam_page()
    {
//        dd(Auth::check());
        $jobs = DB::table('table_jobs')
            ->leftJoin('table_danhmucnganhnghe', 'table_jobs.id_nganhnghe', '=', 'table_danhmucnganhnghe.id')
            ->leftJoin('table_ranks', 'table_jobs.capbac', '=', 'table_ranks.id')
            ->leftJoin('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->leftJoin('table_city', 'table_jobs.noilamviec', '=', 'table_city.id')
            ->where('table_jobs.trangthai', 1)
            ->select('table_jobs.*', 'table_employers.ten', 'table_city.tendaydu', 'table_employers.avt');

        $totalJobs = $jobs->count();
        $jobs = $jobs->paginate(20)->withQueryString();

        $data['jobs'] = $jobs;
        $data['totalJobs'] = $totalJobs;

        if (isset(Auth::user()->id)){
            $idAccount = Auth::user()->id;
            $jobSaved = DB::table('table_savejobs')->where('idAccount', $idAccount)->get();
            $data['jobSaved'] = $jobSaved;
//            dd($jobSaved);
        }

        return view('user.pages.user.vieclam', $data);
    }

    public function filterJobs(Request $request)
    {
//        dd($request -> all());
        $jobs = DB::table('table_jobs')
            ->leftJoin('table_danhmucnganhnghe', 'table_jobs.id_nganhnghe', '=', 'table_danhmucnganhnghe.id')
            ->leftJoin('table_ranks', 'table_jobs.capbac', '=', 'table_ranks.id')
            ->leftJoin('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->leftJoin('table_city', 'table_jobs.noilamviec', '=', 'table_city.id')
            ->where('table_jobs.trangthai', 1)
            ->select('table_jobs.*', 'table_employers.ten', 'table_city.tendaydu', 'table_city.tenkhongdau', 'table_employers.avt',
                'table_danhmucnganhnghe.tenkhongdau');

        if ($request->keySearch != null) {
            $jobs->where('table_jobs.tencongviec', 'like', '%' . $request->keySearch . '%');
        }
        if ($request->career != 0) {
            $jobs->where('table_danhmucnganhnghe.tenkhongdau', $request->career);
        }
        if ($request->location != 0) {
            $jobs->where('table_city.tenkhongdau', $request->location);
        }
        $salary = $request->salary;
        if ($request->salary != 0) {
            $jobs->where('table_jobs.minluong', '>=', $salary);
        }
        if ($request->level != 0) {
            $jobs->where('table_jobs.capbac', '=', $request->level);
        }

        $days = strtotime('-' . $request->days . ' day', strtotime(Carbon::now('Asia/Ho_Chi_Minh')));
        $days = date('Y-m-j', $days);
        if ($request->days != 0) {
            $jobs->where('table_jobs.created_at', '<=', $days);
        }
        if ($request->job_type != 0) {
            $jobs->where('table_jobs.hinhthuc', '=', $request->job_type);
        }

        $totalJobs = $jobs->count();
        $jobs = $jobs->paginate(20)->withQueryString();
        $data['jobs'] = $jobs;
        $data['totalJobs'] = $totalJobs;

        $keySearch = $request->keySearch;
        $career = $request->career;
        $location = $request->location;
        $salary = $request->salary;
        $level = $request->level;
        $days = $request->days;
        $job_type = $request->job_type;
        $data['keySearch'] = $keySearch;
        $data['career'] = $career;
        $data['location'] = $location;
        $data['salary'] = $salary;
        $data['level'] = $level;
        $data['days'] = $days;
        $data['job_type'] = $job_type;

        if (isset(Auth::user()->id)){
            $idAccount = Auth::user()->id;
            $jobSaved = DB::table('table_savejobs')->where('idAccount', $idAccount)->get();
            $data['jobSaved'] = $jobSaved;
//            dd($jobSaved);
        }


        return view('user.pages.user.vieclam', $data);
    }

    public function viewDetailJob($id)
    {
//        dd($id);
        //$job = Job::find($tencongviec)->get();
        $city = City::all()->where('trangthai', 1);
        $work = DanhMucNganhNghe::all()->where('trangthai', 1);


        $job = DB::table('table_jobs')
            ->leftJoin('table_danhmucnganhnghe', 'table_jobs.id_nganhnghe', '=', 'table_danhmucnganhnghe.id')
            ->leftJoin('table_ranks', 'table_jobs.capbac', '=', 'table_ranks.id')
            ->leftJoin('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->leftJoin('table_city', 'table_jobs.noilamviec', '=', 'table_city.id')
            ->where('table_jobs.trangthai', 1)
            ->where('table_jobs.id', $id)
            ->select('table_jobs.*', 'table_employers.*', 'table_danhmucnganhnghe.tendaydu', 'table_jobs.id as idJob')
            ->get()
            ->first();
        $data['job'] = $job;
//        dd($job);
        if (isset(Auth::user()->id)){
            $idAccount = Auth::user()->id;
            $jobSaved = DB::table('table_savejobs')->where('idAccount', $idAccount)->get();
            $data['jobSaved'] = $jobSaved;
//            dd($jobSaved);
        }

//        $data = ['job']
//        dd($jobs);
        return view('user.pages.user.viewDetailJob', $data);
    }

    public function viewInformation()
    {
        if (isset(Auth::user()->id)) {
            $user = Auth::user();
//            dd($user);
            return view('user.pages.user.information')->with('info', $user);
        } else {
            return redirect()->intended('login');
        }
    }

    public function updateInformation(Request $request)
    {
//            dd(Carbon::now()->toDateTimeString());
        $user = Auth::user();
        if ($user) {
            if ($request->has('fileAvatar')) {
                $file = $request->fileAvatar;
                $extension = $request->fileAvatar->extension();
                $filename = time() . '-avatar.' . $extension;
                $file->move(public_path('avatar'), $filename);
                $user->avatar = $filename;
            }
            $user->ten = $request->ten;
            $user->phone = $request->phone;
            $user->diachi = $request->diachi;
            $user->ngaysinh = $request->ngaysinh;
            $user->gioitinh = $request->gioitinh;
            $user->updated_at = Carbon::now()->toDateTimeString();

            $user->save();
        }
        return redirect()->route('information')->with('succes', 'Cập nhật thông tin thành công !');
    }

    public function saveJob($idJob, $type)
    {

        if (isset(Auth::user()->id)) {
            $idAccount = Auth::user()->id;
            if ($type == 0) {
                DB::table('table_savejobs')->insert(
                    array(
                        'idJob' => $idJob,
                        'idAccount' => $idAccount
                    )
                );
            } elseif ($type == 1) {
                DB::table('table_savejobs')
                    ->where('idJob', $idJob)
                    ->where('idAccount', $idAccount)
                    ->delete();
            }

        } else {
            return redirect()->intended('login');
        }
        return redirect()->intended('login');
    }

    public function applyJob($id, ApplyJobRequest $request){

        $idAccount = Auth::id();
        $idJob = $id;
        $letter = $request -> letter;
        $created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $updated_at = Carbon::now('Asia/Ho_Chi_Minh');

//        DB::table('table_applyforjobs')->insert(
//            ['idAccount' => $idAccount,
//            'idJob' => $idJob,
//            'idCV' => 0,
//            'letter' => $letter,
//            'created_at' => $created_at,
//            'updated_at' => $updated_at
//            ]
//        );
        return redirect()->back()->with('alert', 'Hoàn tất');
    }

    public function view_jobsaved()
    {
        if (isset(Auth::user()->id)) {
            $jobs = DB::table('table_savejobs')
                ->where('idAccount', Auth::user()->id)
                ->join('table_jobs', 'table_jobs.id', '=', 'table_savejobs.idJob')
                ->join('table_employers', 'table_employers.id', '=', 'table_jobs.id_nhatuyendung')
                ->join('table_city', 'table_city.id', '=', 'table_jobs.noilamviec')
                ->get();
//            dd($jobs);
            $data['jobs'] = $jobs;
            return view('user.pages.user.saveJobs', $data);
        } else {
            return redirect()->intended('login');
        }
    }public function delete_jobsaved($id)
    {
        if (isset(Auth::user()->id)) {
            DB::table('table_savejobs')
                ->where('idJob', $id)
                ->delete();
            return redirect()->back();
        } else {
            return redirect()->intended('login');
        }
    }

    public function view_jobapplied()
    {
        if (isset(Auth::user()->id)) {
            $user = Auth::user();
//            dd($user);
            return view('user.pages.user.applyJobs')->with('info', $user);
        } else {
            return redirect()->intended('login');
        }
    }

    public function home_page()
    {

        $jobHot = DB::table('table_jobs')
            ->select('table_jobs.id_nganhnghe', 'table_danhmucnganhnghe.tenkhongdau', 'table_danhmucnganhnghe.tendaydu', DB::raw('count(*) as total'))
            ->groupBy('id_nganhnghe', 'table_danhmucnganhnghe.tenkhongdau', 'table_danhmucnganhnghe.tendaydu')
            ->join('table_danhmucnganhnghe', 'table_danhmucnganhnghe.id', '=', 'table_jobs.id_nganhnghe')
            ->orderBy('total', 'desc')
            ->take(10)
            ->get();
        $data['jobHot'] = $jobHot;
        return view('user.pages.user.home', $data);
    }

    public function autocompleteSearch(Request $request)
    {
        $data = Job::select('tencongviec')
            ->where('tencongviec', 'like', '%' . $request->get('q') . '%')
            ->get();
//        dd($data);
        return response()->json($data);
    }

    public function nhatuyendung_page()
    {
        return view('user.pages.employer.index');
    }

    public function nhatuyendung_view($id)
    {
        $employer = Employer::find($id);
        $jobOfEmployer = DB::table('table_jobs')
            ->leftJoin('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->leftJoin('table_city', 'table_jobs.noilamviec', '=', 'table_city.id')
            ->where('table_jobs.trangthai', 1)
            ->where('table_jobs.id_nhatuyendung', $id)
            ->select('table_jobs.*', 'table_employers.ten', 'table_city.tendaydu', 'table_employers.avt')
            ->paginate(5)->withQueryString();;
//                dd($jobOfEmployer);
        $data['employer'] = $employer;
        $data['jobOfEmployer'] = $jobOfEmployer;
        return view('user.pages.employer.viewDetailEmployer', $data);
    }
}
