<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\City;
use App\Models\DanhMucNganhNghe;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;
use function redirect;
use function view;

class CateController extends Controller
{
    public function index()
    {
        $cate = DB::table('danhmuc')->get();
        return view('admin.pages.category.index', ['list_cate' => $cate]);
    }

    public function addCate()
    {
        return view('admin.pages.category.add');
    }

    public function addCatePost(Request $request)
    {
        $data = $request->all();
        $new = new Category();
        $new->TenDM = $request->TenDM;
        $new->save();
        return redirect()->route("admin.category.index")->with('add', 'Data inserted thành công');
    }

    public function edit($id)
    {
        $cate = Category::find($id);
        $data['cate'] = $cate;
        return view('admin.pages.category.edit', $data);
    }

    public function update($id, Request $request)
    {
        $new = Category::find($id);
        $new->TenDM = $request->TenDM;
        $new->save();
        return redirect()->route("admin.category.index")->with('updated', 'Data updted thành công');
    }

    public function destroy($id)
    {
        $cate = Category::find($id);
        $cate->delete();
        return redirect()->route("admin.category.index")->with('del', 'Data deleted thành công');
    }
//    public function lay_cate()
//    {
//        $response = Http::get('https://careerbuilder.vn/viec-lam/da-nang-l511e1-vi.html');
//
//        if ($response->successful()) {
//            $html = $response->body();
//
//            // Sử dụng thư viện Symfony DomCrawler để phân tích HTML
//            $crawler = new Crawler($html);
////dd($crawler);
//            // Trích xuất tên ngành nghề bằng cách chọn phần tử HTML chứa thông tin ngành nghề
//            $jobCategories = $crawler->filter('.form-select-chosen #industry_mb option')->each(function (Crawler $node) {
//                return $node->text();
//            });
//            // Hiển thị tên ngành nghề
//            foreach ($jobCategories as $category) {
//                $tencodau = $category;
//                $category = strtolower($category); //chuyển chữ hoa thành chữ thường
//                $unicode = array(
//                    'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
//                    'd'=>'đ',
//                    'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
//                    'i'=>'í|ì|ỉ|ĩ|ị',
//                    'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
//                    'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
//                    'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
//                    'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
//                    'D'=>'Đ',
//                    'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
//                    'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
//                    'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
//                    'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
//                    'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
//                );
//                foreach($unicode as $nonUnicode=>$uni){
//                    $category = preg_replace("/($uni)/i", $nonUnicode, $category);
//                }
//                $category = str_replace('/','',$category);
//                $category = str_replace('-','',$category);
//                $category = str_replace('  ',' ',$category);
//                $category = str_replace(' ','-',$category);
//
//                $add = new DanhMucNganhNghe();
//
//                $add->tenkhongdau = $category;
//                $add->tendaydu = $tencodau;
//                $add->trangthai = 1;
//
//                $add->save();
//                echo  $tencodau. "<br>";
//            }
////            dd($jobCategories);
//        } else {
//            // Xử lý lỗi nếu có.
//            echo 'Lỗi: Không thể truy cập trang web.';
//        }
//    }
//    public function lay_city()
//    {
//        $response = Http::get('https://careerbuilder.vn/viec-lam/da-nang-l511e1-vi.html');
//
//        if ($response->successful()) {
//            $html = $response->body();
//
//            // Sử dụng thư viện Symfony DomCrawler để phân tích HTML
//            $crawler = new Crawler($html);
//            // Trích xuất tên ngành nghề bằng cách chọn phần tử HTML chứa thông tin ngành nghề
//            $jobCategories = $crawler->filter('.form-select-chosen #location option')->each(function (Crawler $node) {
//                return $node->text();
//            });
//            // Hiển thị tên ngành nghề
//            foreach ($jobCategories as $category) {
//                $tencodau = $category;
//                $category = strtolower($category); //chuyển chữ hoa thành chữ thường
//                $unicode = array(
//                    'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
//                    'd'=>'đ',
//                    'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
//                    'i'=>'í|ì|ỉ|ĩ|ị',
//                    'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
//                    'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
//                    'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
//                    'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
//                    'D'=>'Đ',
//                    'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
//                    'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
//                    'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
//                    'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
//                    'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
//                );
//                foreach($unicode as $nonUnicode=>$uni){
//                    $category = preg_replace("/($uni)/i", $nonUnicode, $category);
//                }
//                $category = str_replace('/','',$category);
//                $category = str_replace('-','',$category);
//                $category = str_replace('  ',' ',$category);
//                $category = str_replace(' ','-',$category);
//
//                $add = new City();
//
//                $add->tenkhongdau = $category;
//                $add->tendaydu = $tencodau;
//                $add->trangthai = 1;
//
//                $add->save();
//                echo  $tencodau. "<br>";
//            }
////            dd($jobCategories);
//        } else {
//            // Xử lý lỗi nếu có.
//            echo 'Lỗi: Không thể truy cập trang web.';
//        }
//    }


}
