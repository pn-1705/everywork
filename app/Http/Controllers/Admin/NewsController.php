<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use App\Http\Controllers\User\EmployerController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('table_news')
            ->join('table_news_cate', 'table_news_cate.id', '=','table_news.idDanhMuc')
            ->select('table_news.*', 'table_news_cate.tendaydu as danhmuc')
            ->get();
        $data['news'] = $news;
        return view('admin.pages.news.index', $data);
    }

    public function add()
    {
        $cate = DB::table('table_news_cate')->get();
        return view('admin.pages.news.add', compact('cate'));
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
            'idDanhMuc' => $request->danhmuc,
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
        $cate = DB::table('table_news_cate')->get();

        $data['new'] = $new;
        $data['cate'] = $cate;

        return view('admin.pages.news.edit', $data);
    }
    public function update($id, Request $request)
    {
        $hienthi = 0;
        $noibat = 0;
        if ($request->hienthi == 'on') {
            $hienthi = 1;
        }
        if ($request->noibat == 'on') {
            $noibat = 1;
        }
        if ($request->file('hinhanh') != null) {
            $image = $request->file('hinhanh');
            $ram = strtoupper(Str::random(5));
            $input['imagename'] = $ram . time() . '.' . $image->extension();
            $img = Image::make($image->path());

            $filePath = public_path('imgs/news');
            $img->save($filePath . '/' . $input['imagename']);

            DB::table('table_news')->where('id', $id)->update([
                'hinhanh' => $input['imagename']
            ]);
        } else {
            $input['imagename'] = null;
        }

        DB::table('table_news')->where('id', $id)->update([
            'tieude' => $request->tieude,
            'noidung' => $request->noidung,
            'idDanhMuc' => $request->danhmuc,
            'hienthi' => $hienthi,
            'noibat' => $noibat,
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        return redirect()->route('admin.news');
    }

    public function del($id)
    {
        DB::table('table_news')->where('id', $id)->delete();

        return redirect()->back();
    }

    public function viewNewsCategory()
    {
        $news = DB::table('table_news_cate')->get();
        $data['news'] = $news;
        return view('admin.pages.news.news-category', $data);
    }

    public function createNewsCategory(Request $request)
    {
        $validatedData = $request->validate([
            'tendaydu' => 'required',
        ]);

        $tenkhongdau = $this->un_unicode($request->tendaydu);
        DB::table('table_news_cate')->insert([
            'tendaydu' => $request->tendaydu,
            'tenkhongdau' => $tenkhongdau
        ]);

        return redirect()->back();
    }
    public function delNewsCategory($id)
    {
        DB::table('table_news_cate')->where('id', $id)->delete();

        return redirect()->back();
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
