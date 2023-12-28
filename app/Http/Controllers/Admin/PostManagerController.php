<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
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
        $data['newJobs'] = $newJobs;
        return view('admin.pages.posts.newPost', $data);
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
                $email->subject('EveryWork - Email tự động');
                $email->to($job->email, $job->tencongviec, $job->id);
            });
        }
        return redirect()->back();
    }
}
