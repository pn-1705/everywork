<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('table_news')->get();
        $data['news'] = $news;
        return view('admin.pages.news.index', $data);
    }

    public function add()
    {
        return view('admin.pages.news.add');
    }

    public function postNews(Request $request)
    {
        if ($request->file('hinhanh') != null) {
            $image = $request->file('hinhanh');
            $ram = strtoupper(Str::random(5));
            $input['imagename'] = $ram . time() . '.' . $image->extension();
            $img = Image::make($image->path());

            $filePath = public_path('imgs/news');
            $img->save($filePath . '/' . $input['imagename']);
        } else {
            $input['imagename'] = null;
        }


        $hienthi = 0;
        $noibat = 0;
        if ($request->hienthi == 'on') {
            $hienthi = 1;
        }
        if ($request->noibat == 'on') {
            $noibat = 1;
        }
        DB::table('table_news')->insert([
            'tieude' => $request->tieude,
            'noidung' => $request->noidung,
            'idDanhMuc' => 1,
            'hienthi' => $hienthi,
            'noibat' => $noibat,
            'hinhanh' => $input['imagename'],
            'ngaytao' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        return redirect()->route('admin.news');
    }

    public function edit($id)
    {
        $new = DB::table('table_news')->where('id', $id)->first();
        $data['new'] = $new;

        return view('admin.pages.news.edit', $data);
    }

    public function del($id)
    {
        DB::table('table_news')->where('id', $id)->delete();

        return redirect()->back();
    }
}
