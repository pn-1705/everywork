<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use App\Models\City;
use App\Models\DanhMucNganhNghe;
use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PostManagerController extends Controller
{
    public function viewNewPost()
    {
        $newJobs = DB::table('table_jobs')
            ->join('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->join('table_careers', 'table_jobs.id_nganhnghe', '=', 'table_careers.id')
            ->where('table_jobs.trangthai', '=', 3)
            ->select('table_employers.id as idEmployer', 'table_employers.ten as tenNTD', 'table_employers.avt', 'table_employers.email', 'table_jobs.*', 'table_careers.tendaydu as tenNganhNghe')
            ->get();
//        dd($newJobs);
        $total = $newJobs -> count();
//        dd($total);
        return view('admin.pages.posts.newPost', compact('newJobs', 'total'));
    }

    public function acceptJob($id)
    {
        DB::table('table_jobs')->where('id', $id)->update([
            'trangthai' => 1]);

        $email = DB::table('table_jobs')
            ->join('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->where('table_jobs.id', $id)->first()->email;
//        dd($email);

        $job = DB::table('table_jobs')
            ->join('table_employers', 'table_jobs.id_nhatuyendung', '=', 'table_employers.id')
            ->where('table_jobs.id', $id)
            ->select('table_employers.email', 'table_jobs.*')
            ->first();
        if ($job) {
            Mail::send('admin.emails.acceptJob', compact('job'), function ($email) use ($job) {
                $email->subject('[EveryWork]_Email tự động.');
                $email->to($job->email, $job->tencongviec, $job->id);
            });
        }
        return redirect()->back();
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

}
