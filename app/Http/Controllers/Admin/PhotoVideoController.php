<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoVideoController extends Controller
{
    public function index(){
        $social = DB::table('table_photo') ->where('type', '=', 'social')-> get();
        $data['social'] =$social;
        return view('admin.pages.photo-video.index', $data);
    }

    public function add(Request $request)
    {
//        dd($request->all());
        $hienthi = 0;
        if ($request -> hienthi == 'on'){
            $hienthi = 1;
        }
        DB::table('table_photo')->insert([
            'hinhanh' => $request -> bieutuong,
            'tieude' => $request -> tieude,
            'link' => $request -> link,
            'type' => 'social',
            'hienthi' => $hienthi
        ]);
//        $data['social'] = $social;
        return redirect() -> route('admin.photo-video.social');
    }
    public function update($id, Request $request)
    {
//        dd($request->all());
        $hienthi = 0;
        if ($request -> hienthi == 'on'){
            $hienthi = 1;
        }
        DB::table('table_photo')->where('id', '=', $id)->update([
            'hinhanh' => $request -> bieutuong,
            'tieude' => $request -> tieude,
            'link' => $request -> link,
            'hienthi' => $hienthi
        ]);
//        $data['social'] = $social;
        return redirect() -> route('admin.photo-video.social');
    }

    public function del($id)
    {
//        dd($request->all());
        DB::table('table_photo')->where('id', '=', $id)->delete();
//        $data['social'] = $social;
        return redirect()->route('admin.photo-video.social');
    }
    public function indexSlideshow(){
        $social = DB::table('table_photo')->where('type', '=', 'slideshow-ungvien') -> get();
        $data['social'] =$social;
        return view('admin.pages.photo-video.slideshow', $data);
    }
    public function addSlideShowUngVien(Request $request)
    {
        $image = $request->file('bieutuong');
        $input['imagename'] = time().'.'.$image->extension();
        $img = Image::make($image->path());

        $filePath = public_path('imgs/photo');
        $img->resize(1900,570, function ($const) {
            $const->aspectRatio();
        })->save($filePath.'/'.$input['imagename']);

        $hienthi = 0;
        if ($request -> hienthi == 'on'){
            $hienthi = 1;
        }
        DB::table('table_photo')->insert([
            'hinhanh' => $input['imagename'],
            'tieude' => $request -> tieude,
            'link' => $request -> link,
            'type' => 'slideshow-ungvien',
            'hienthi' => $hienthi
        ]);
//        $data['social'] = $social;
        return redirect() -> route('admin.photo-video.slideshow');
    }
    public function updateSlideshowUngvien($id, Request $request)
    {
//        dd($request->all());
        $hienthi = 0;
        if ($request -> hienthi == 'on'){
            $hienthi = 1;
        }
        DB::table('table_photo')->where('id', '=', $id)->update([
            'tieude' => $request -> tieude,
            'link' => $request -> link,
            'hienthi' => $hienthi
        ]);
//        $data['social'] = $social;
        return redirect() -> route('admin.photo-video.slideshow');
    }
    public function delSlideshowUngvien($id)
    {
//        dd($request->all());
        $slideshow_old = DB::table('table_photo')->where('id', '=', $id)->first()->hinhanh;
//        dd($slideshow_old);

        DB::table('table_photo')->where('id', '=', $id)->delete();
        File::delete('public/imgs/photo/' . $slideshow_old);

        return redirect()->route('admin.photo-video.slideshow');
    }
}
