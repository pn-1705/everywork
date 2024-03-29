<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\ApplyJobRequest;
use App\Models\City;
use App\Models\DanhMucNganhNghe;
use App\Models\Employer;
use App\Models\Job;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use function back;
use function redirect;
use function view;

class UserController extends Controller
{
    public function vieclam_page()
    {
        /*        DB::table('table_jobs')
                    ->where('trangthai', '=', 1)
                    ->update(['hannhanhoso' => '2024-02-01']);*/

//        $jobs = DB::table('table_jobs')
//            ->leftJoin('table_careers', 'table_jobs.id_nganhnghe', '=', 'table_careers.id')
//            ->leftJoin('table_ranks', 'table_jobs.capbac', '=', 'table_ranks.id')
//            ->leftJoin('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
//            ->leftJoin('table_district', 'table_jobs.noilamviec', '=', 'table_district.id')
//            ->where('table_jobs.trangthai', '=', 1)
//            ->where('table_jobs.hannhanhoso', '>=', Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d'))
//            ->where('table_employers.trangthai', 2)
//            ->select('table_jobs.*', 'table_employers.ten', 'table_district.tendaydu', 'table_employers.avt', 'table_employers.tenkhongdau as employer_tenkhongdau', 'table_employers.trangthai');

        $jobs = DB::table('table_jobs')
            ->leftJoin('table_careers', 'table_jobs.id_nganhnghe', '=', 'table_careers.id')
            ->leftJoin('table_ranks', 'table_jobs.capbac', '=', 'table_ranks.id')
            ->leftJoin('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->leftJoin('table_district', 'table_jobs.noilamviec', '=', 'table_district.id')
            ->where('table_jobs.trangthai', '=', 1)
            ->where('table_jobs.hannhanhoso', '>=', Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d'))
            ->where('table_employers.trangthai', 2)
            ->select('table_jobs.*', 'table_employers.ten', 'table_district.tendaydu', 'table_district.tenkhongdau as tenkhongdauDistrict', 'table_employers.avt',
                'table_careers.tenkhongdau as employer_tenkhongdau')
            ->orderBy('table_jobs.ngaydang', 'desc');

        $totalJobs = $jobs->count();
        $jobs = $jobs->paginate(20)->withQueryString();

        $data['jobs'] = $jobs;
        $data['totalJobs'] = $totalJobs;

        if (isset(Auth::user()->id)) {
            $idAccount = Auth::user()->id;
            $jobSaved = DB::table('table_savejobs')->where('idAccount', $idAccount)->get();
            $data['jobSaved'] = $jobSaved;
//            dd($jobSaved);
        }

        return view('user.pages.user.vieclam', $data);
    }

    public function filterJobs(Request $request)
    {
//        DB::table('table_jobs')-> where('ngaydang', '=', null)-> update(['ngaydang' => '2024-01-10']);
//        dd($request -> all());
        $jobs = DB::table('table_jobs')
            ->leftJoin('table_careers', 'table_jobs.id_nganhnghe', '=', 'table_careers.id')
            ->leftJoin('table_ranks', 'table_jobs.capbac', '=', 'table_ranks.id')
            ->leftJoin('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->leftJoin('table_district', 'table_jobs.noilamviec', '=', 'table_district.id')
            ->where('table_jobs.trangthai', '=', 1)
            ->where('table_jobs.hannhanhoso', '>=', Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d'))
            ->where('table_employers.trangthai', 2)
            ->select('table_jobs.*', 'table_employers.ten', 'table_district.tendaydu', 'table_district.tenkhongdau as tenkhongdauDistrict', 'table_employers.avt',
                'table_careers.tenkhongdau as employer_tenkhongdau')
            ->orderBy('table_jobs.ngaydang', 'desc');

        if ($request->keySearch != null) {
            $jobs->where('table_jobs.tencongviec', 'like', '%' . $request->keySearch . '%');
        }
        if ($request->career != 0) {
            $jobs->where('table_careers.tenkhongdau', $request->career);
        }
        if ($request->location != 0) {
            $jobs->where('table_district.tenkhongdau', $request->location);
        }
        if ($request->career_mobile != 0) {
            $jobs->where('table_careers.tenkhongdau', $request->career);
        }
        if ($request->location_mobile != 0) {
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
//        dd($days);
        if ($request->days != 0) {
            $jobs->where('table_jobs.ngaydang', '>=', $days);
        }
        if ($request->job_type != 0) {
            $jobs->where('table_jobs.hinhthuc', '=', $request->job_type);
        }
        if (isset($request->wfh)) {
            if ($request->wfh == 'on') {
                $jobs->where('table_jobs.workforhome', '=', 1);
            }
        }

        if ($request->keySearch != null) {
            $employer = DB::table('table_jobs')
                ->leftJoin('table_careers', 'table_jobs.id_nganhnghe', '=', 'table_careers.id')
                ->leftJoin('table_ranks', 'table_jobs.capbac', '=', 'table_ranks.id')
                ->leftJoin('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
                ->leftJoin('table_district', 'table_jobs.noilamviec', '=', 'table_district.id')
                ->where('table_jobs.trangthai', '=', 1)
                ->where('table_jobs.hannhanhoso', '>=', Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d'))
                ->where('table_employers.trangthai', 2)
                ->where('table_employers.ten', 'like', '%' . $request->keySearch . '%')
                ->select('table_jobs.*', 'table_employers.ten', 'table_district.tendaydu', 'table_district.tenkhongdau as tenkhongdauDistrict', 'table_employers.avt',
                    'table_careers.tenkhongdau as employer_tenkhongdau')
                ->orderBy('table_jobs.ngaydang', 'desc');
        }
//        dd($employer->get());


        if (isset($employer)) {
            $jobs->union($employer);
        }
        $totalJobs = $jobs->count();
        $jobs = $jobs->paginate(20)->withQueryString();
        $data['jobs'] = $jobs;
        $data['totalJobs'] = $totalJobs;

        $keySearch = $request->keySearch;
        $career = $request->career;
        $career_mobile = $request->career_mobile;
        $location = $request->location;
        $location_mobile = $request->location_mobile;
        $salary = $request->salary;
        $level = $request->level;
        $days = $request->days;
        $job_type = $request->job_type;
        $wfh = $request->wfh;
        $data['keySearch'] = $keySearch;
        $data['career'] = $career;
        $data['career_mobile'] = $career_mobile;
        $data['location'] = $location;
        $data['location_mobile'] = $location_mobile;
        $data['salary'] = $salary;
        $data['level'] = $level;
        $data['days'] = $days;
        $data['job_type'] = $job_type;
        $data['wfh'] = $wfh;

        if (isset(Auth::user()->id)) {
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
            ->leftJoin('table_careers', 'table_jobs.id_nganhnghe', '=', 'table_careers.id')
            ->leftJoin('table_ranks', 'table_jobs.capbac', '=', 'table_ranks.id')
            ->leftJoin('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->leftJoin('table_district', 'table_jobs.noilamviec', '=', 'table_district.id')
            ->where('table_jobs.trangthai', 1)
            ->where('table_jobs.id', $id)
            ->select('table_jobs.*', 'table_employers.*', 'table_careers.id as idJob_Cate', 'table_careers.tendaydu', 'table_jobs.id as idJob')
            ->get()
            ->first();

//        dd($jobForCate);

        $viewJob = Job::find($id);
        if ($viewJob) {
            $viewJob->views++;
            $viewJob->save();
        }

        $data['job'] = $job;
//        dd($job);
        if (isset(Auth::user()->id)) {
            $idAccount = Auth::user()->id;
            $jobSaved = DB::table('table_savejobs')->where('idAccount', $idAccount)->get();
            $data['jobSaved'] = $jobSaved;

            $myCV = DB::table('table_cv')->where('idAccount', Auth::id())->get();

            $data['myCV'] = $myCV;
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
        $avatar_old = Auth::user()->avatar;
//        dd($avatar_old);
        if ($user) {
            if ($request->has('fileAvatar')) {
                $file = $request->fileAvatar;
                $extension = $request->fileAvatar->extension();
                $filename = time() . '-avatar.' . $extension;
                $file->move(public_path('avatar'), $filename);
                $user->avatar = $filename;
                File::delete('public/avatar/' . $avatar_old);

            }
            $user->ten = $request->ten;
            $user->phone = $request->phone;
            $user->diachi = $request->diachi;
            $user->city = $request->city;
            $user->ngaysinh = $request->ngaysinh;
            $user->gioitinh = $request->gioitinh;
            $user->updated_at = Carbon::now()->toDateTimeString();

            $user->save();
        }
        return redirect()->route('profile')->with('succes', 'Cập nhật thông tin thành công !');
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

    public function applyJob($id, ApplyJobRequest $request)
    {
//        dd($request->all());
        $idAccount = Auth::id();
        $idJob = $id;
        $idCV = $request->fileCV_select;
        $letter = $request->letter;
        $created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $updated_at = Carbon::now('Asia/Ho_Chi_Minh');
//        $fileCV = $request->fileCV;
        if ($request->has('fileCV')) {
            $file = $request->fileCV;
            $extension = $request->fileCV->extension();
            $filename = time() . '-CV-' . $idAccount . '.' . $extension;
            $file->move(public_path('CV'), $filename);

            DB::table('table_applyforjobs')->insert(
                ['idAccount' => $idAccount,
                    'idJob' => $idJob,
//                    'idCV' => $idCV,
                    'fileCV' => $filename,
                    'letter' => $letter,
                    'created_at' => $created_at,
                    'updated_at' => $updated_at
                ]
            );
            return redirect()->back()->with('alert', 'Hoàn tất');
        }
//        dd($request-> fileCV);


        DB::table('table_applyforjobs')->insert(
            ['idAccount' => $idAccount,
                'idJob' => $idJob,
                'idCV' => $idCV,
//                'fileCV' => $filename,
                'letter' => $letter,
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ]
        );
        return redirect()->back()->with('alert', 'Hoàn tất');
    }

    public function view_jobsaved()
    {
        if (isset(Auth::user()->id)) {
            $jobs = DB::table('table_savejobs')
                ->where('idAccount', Auth::user()->id)
                ->join('table_jobs', 'table_jobs.id', '=', 'table_savejobs.idJob')
                ->join('table_employers', 'table_employers.id', '=', 'table_jobs.id_nhatuyendung')
                ->join('table_district', 'table_district.id', '=', 'table_jobs.noilamviec')
                ->where('hannhanhoso','>=', Carbon::now('Asia/Ho_Chi_Minh'))
                ->select('table_jobs.*', 'table_district.tendaydu', 'table_savejobs.idJob', 'table_employers.ten', 'table_employers.tenkhongdau')
                ->get();
//            dd($jobs);
            $data['jobs'] = $jobs;
            return view('user.pages.user.saveJobs', $data);
        } else {
            return redirect()->intended('login');
        }
    }

    public function delete_jobsaved($id)
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
            $jobsApplied = DB::table('table_applyforjobs')
                ->where('table_applyforjobs.idAccount', Auth::id())
                ->leftJoin('table_jobs', 'table_jobs.id', '=', 'table_applyforjobs.idJob')
                ->leftJoin('table_cv', 'table_cv.idCV', '=', 'table_applyforjobs.idCV')
                ->join('table_employers', 'table_employers.id', '=', 'table_jobs.id_nhatuyendung')
                ->select('table_applyforjobs.*', 'table_employers.id as idEmployer', 'table_employers.ten', 'table_employers.tenkhongdau as tenkhongdauNTD', 'table_employers.avt', 'table_jobs.tencongviec', 'table_cv.nameCV')
                ->get();
//            dd($jobsApplied);
            return view('user.pages.user.applyJobs')->with('jobsApplied', $jobsApplied);
        } else {
            return redirect()->intended('login');
        }
    }

    public function view_profile()
    {
        if (Auth::check()) {
            $user = Auth::user();
//            dd($user);
            return view('user.pages.user.profile')->with('info', $user);
        } else {
            return redirect()->intended('login');
        }
    }

    public function view_CV()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $cv = DB::table('table_CV')->where('idAccount', '=', Auth::id())->get();
//            dd($user);
            return view('user.pages.user.CV')->with('cv', $cv);
        } else {
            return redirect()->intended('login');
        }
    }

    public function upload_CV(Request $request)
    {
//        dd($request->all());
        if (Auth::check()) {
            $idAccount = Auth::id();
            $cv = DB::table('table_CV')->where('idAccount', '=', Auth::id())->get();

            if ($request->has('fileCV')) {
                $file = $request->fileCV;
                $extension = $request->fileCV->extension();
                $filename = time() . '-CV-' . $idAccount . '.' . $extension;
                $file->move(public_path('CV'), $filename);
            }
            DB::table('table_CV')->insert(
                array(
                    'fileCV' => $filename,
                    'idAccount' => $idAccount,
                    'nameCV' => $file->getClientOriginalName(),
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                    'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
                )
            );
//            dd($user);
            return redirect()->back()->with('cv', $cv);
        } else {
            return redirect()->intended('login');
        }
    }

    public function delete_CV($id)
    {
//        dd($request->all());
        if (Auth::check()) {
            $old_CV = DB::table('table_CV')
                ->where('idCV', $id)->select('fileCV')->first();
            File::delete('public/CV/' . $old_CV->fileCV);

            DB::table('table_CV')
                ->where('idCV', $id)
                ->delete();

            $idAccount = Auth::id();
            $cv = DB::table('table_CV')->where('idAccount', '=', Auth::id())->get();

            return redirect()->back()->with('cv', $cv);
        } else {
            return redirect()->intended('login');
        }
    }

    public function home_page()
    {

        $jobHot = DB::table('table_jobs')
            ->select('table_jobs.id_nganhnghe', 'table_careers.tenkhongdau', 'table_careers.tendaydu', DB::raw('count(*) as total'))
            ->groupBy('id_nganhnghe', 'table_careers.tenkhongdau', 'table_careers.tendaydu')
            ->join('table_careers', 'table_careers.id', '=', 'table_jobs.id_nganhnghe')
            ->orderBy('total', 'desc')
            ->take(10)
            ->get();
        $data['jobHot'] = $jobHot;

        $topEmployer = DB::table('table_jobs')
            ->select('id_nhatuyendung', 'ten', 'table_employers.tenkhongdau', 'avt', DB::raw('count(*) as total'))
            ->groupBy('id_nhatuyendung', 'ten', 'table_employers.tenkhongdau', 'avt')
            ->join('table_employers', 'table_employers.id', '=', 'table_jobs.id_nhatuyendung')
            ->orderBy('total', 'desc')
            ->take(6)
            ->get();
//        dd($topEmployer);
        $data['topEmployer'] = $topEmployer;

        $countjobs = DB::table('table_jobs')
            ->leftJoin('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->where('table_jobs.trangthai', 1)
            ->where('table_jobs.hannhanhoso', '>=', Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d'))
            ->where('table_employers.trangthai', 2)->count();
        $data['countjobs'] = $countjobs;


        $news = DB::table('table_news')
            ->where('noibat', '=', 1)
            ->where('hienthi', '=', 1)
            ->get();
//        dd($news);
        $data['news'] = $news;
        return view('user.pages.user.home', $data);
    }

    public function autocompleteSearch(Request $request)
    {
        $data = DB::table('table_jobs')->select('tencongviec')
            ->where('trangthai', 1)
            ->where('tencongviec', 'like', '%' . $request->get('q') . '%')
            ->get();
//        dd(json($data);
        return response()->json($data);
    }

    public function autocompleteSearch2(Request $request)
    {
        $data = Employer::select('ten')
            ->where('trangthai', 2)
            ->where('ten', 'like', '%' . $request->get('q') . '%')
            ->get();
//        dd($data);
        return response()->json($data);
    }

    public function nhatuyendung_page()
    {
        $employers = DB::table('table_employers')
            ->select('table_employers.ten', 'table_employers.avt', 'table_employers.tenkhongdau', 'table_employers.city', DB::raw('count(table_jobs.id) as dangtuyen'))
            ->rightJoin('table_jobs', 'table_employers.id', '=', 'table_jobs.id_nhatuyendung')
            ->where('table_jobs.trangthai', 1)
            ->groupBy('table_employers.ten', 'table_employers.avt', 'table_employers.tenkhongdau', 'table_employers.city')->get();
        return view('user.pages.employer.index', compact('employers'));
    }

    public function searchNhatuyendung(Request $request)
    {
        $employers = DB::table('table_employers')
            ->select('table_employers.ten', 'table_employers.avt', 'table_employers.tenkhongdau', 'table_employers.city', DB::raw('count(table_jobs.id) as dangtuyen'))
            ->rightJoin('table_jobs', 'table_employers.id', '=', 'table_jobs.id_nhatuyendung')
            ->where('table_jobs.trangthai', 1)
            ->where('table_employers.ten', 'like', '%' . $request->keyword . '%')
            ->groupBy('table_employers.ten', 'table_employers.avt', 'table_employers.tenkhongdau', 'table_employers.city')->get();

        $key = $request->keyword;
        return view('user.pages.employer.index', compact('employers', 'key'));
    }

    public function nhatuyendung_view($id)
    {
        $employer = DB::table('table_employers')->where('tenkhongdau', '=', $id)->first();
//        dd($employer);
        $jobOfEmployer = DB::table('table_jobs')
            ->leftJoin('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->leftJoin('table_district', 'table_jobs.noilamviec', '=', 'table_district.id')
            ->where('table_jobs.trangthai', 1)
            ->where('table_employers.tenkhongdau', $id)
            ->select('table_jobs.*', 'table_employers.ten', 'table_district.tendaydu', 'table_employers.avt')
            ->paginate(5)->withQueryString();;
//                dd($jobOfEmployer);
        $data['employer'] = $employer;
        $data['jobOfEmployer'] = $jobOfEmployer;
        return view('user.pages.employer.viewDetailEmployer', $data);
    }

    //Cẩm nang - tin tức
    public function viewNews()
    {
        $newsBig = DB::table('table_news')->inRandomOrder()->take(1)->get();
        $newsBig2 = DB::table('table_news')->inRandomOrder()->skip(1)->take(1)->get();
        $news = DB::table('table_news')->inRandomOrder()->skip(1)->take(4)->get();
        $data['newsB1'] = $newsBig;
        $data['newsB2'] = $newsBig2;
        $data['news4'] = $news;
//        dd(htmlspecialchars_decode($newsBig[0]->noidung));
        return view('user.pages.news.index', $data);
    }

    public function viewNewsCate($ten)
    {
        $nameCate = DB::table('table_news_cate')
            ->where('table_news_cate.tenkhongdau', $ten)
            ->select('tendaydu')
            ->first()->tendaydu;
//        dd($nameCate);
        $listNews = DB::table('table_news')
            ->join('table_news_cate', 'table_news.idDanhMuc', '=', 'table_news_cate.id')
            ->where('table_news_cate.tenkhongdau', $ten)
            ->inRandomOrder()
            ->paginate(15)->withQueryString();
//dd($listNews);
        return view('user.pages.news.newsCategory', compact('listNews', 'nameCate'));
    }

    public function viewNewDetail($ten)
    {
        $news = DB::table('table_news')
            ->where('table_news.tieudekhongdau', $ten)
            ->first();

        $view = News::where('tieudekhongdau', $ten)->first()->luotxem;
        $view++;
        News::where('tieudekhongdau', $ten)->update(['luotxem' => $view]);

        return view('user.pages.news.newsDetail', compact('news'));
    }
}
