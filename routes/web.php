<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'User\UserController@home_page')->name('user.pages.home');
Route::get('/home', 'User\UserController@home_page')->name('user.pages.home');


//Route::get('/user/inf', 'User\UserController@user_inf')->name('user.inf');
//Route::post('/user/inf/edid', 'User\UserController@user_inf_edid')->name('user_inf_edid');
//Route::get('/user/don_mua', 'User\UserController@don_mua')->name('don_mua');

Route::get('/login', 'User\LoginController@view_loginpage')->name('user.pages.login_page');
Route::post('/post_login', 'User\LoginController@post_login')->name('user.post_login');
Route::get('/logout', 'User\LoginController@logout')->name('logout');

Route::post('/post_register', 'User\LoginController@post_register')->name('user.post_register');
Route::get('/active/{token}', 'User\LoginController@active_acount')->name('user.active_acount');
Route::get('/testMail', 'User\LoginController@sendMail')/*->name('user.post_register')*/;
Route::get('auth/google', 'User\LoginController@redirectToGoogle')->name('login-by-google');
Route::get('auth/google/callback', 'User\LoginController@handleGoogleCallback');

Route::get('/register', 'User\LoginController@get_register')->name('user.pages.register_page');
Route::post('/register', 'User\LoginController@post_register')->name('user.post_register');


Route::get('/viec-lam', 'User\UserController@vieclam_page')->name('user.pages.viec-lam');
Route::get('/viec-lam/search', 'User\UserController@filterJobs')->name('filterJobs');
Route::get('/viec-lam/{id}', 'User\UserController@viewDetailJob')->name('user.pages.viewDetailJob');

//Nhà tuyển dụng hàng đầu
Route::get('/nha-tuyen-dung-hang-dau', 'User\UserController@nhatuyendung_page')->name('pages.nha-tuyen-dung');
Route::get('/nha-tuyen-dung/{ten}', 'User\UserController@nhatuyendung_view')->name('pages.nha-tuyen-dung.detail');

//Typeahead
Route::get('autocomplete', 'User\UserController@autocompleteSearch')->name('autocompleteSearch');


//Ứng viên tìm việc làm
Route::group(['middleware' => 'checkUserRole', 'prefix' => 'user'], function () {
    Route::get('/infomation', 'User\UserController@viewInformation')->name('information');
    Route::post('/update_information', 'User\UserController@updateInformation')->name('update_information');
    Route::get('/jobsaved', 'User\UserController@view_jobsaved')->name('viec-lam-da-luu');
    Route::get('/delete_jobsaved/{id}', 'User\UserController@delete_jobsaved')->name('xoa-viec-lam-da-luu');
    Route::get('/jobapplied', 'User\UserController@view_jobapplied')->name('viec-lam-da-nop');
    Route::get('/profile', 'User\UserController@view_profile')->name('profile');
    Route::get('/CV', 'User\UserController@view_CV')->name('CV');
    Route::post('/uploadCV', 'User\UserController@upload_CV')->name('tai-len-ho-so');
    Route::get('/deleteCV/{id}', 'User\UserController@delete_CV')->name('xoa-CV');

});
//Lưu việc làm
Route::get('/saveJob/{id}/{type}', 'User\UserController@saveJob');
Route::post('/applyJob/{id}', 'User\UserController@applyJob')->name('nop-don-ung-tuyen');

//Trang dành cho nhà tuyển dụng
Route::get('/employer', 'User\EmployerController@home')->name('employer.home');
Route::get('/employer/login', 'User\EmployerController@login')->name('employer.login');
Route::post('/employer/post_login', 'User\EmployerController@post_login')->name('employer.post_login');
Route::get('/employer/register', 'User\EmployerController@register')->name('employer.register');
Route::post('/employer/post_register', 'User\EmployerController@post_register')->name('employer.post_register');
Route::get('/active/{token}', 'User\EmployerController@active_acount')->name('employer.active_acount');

Route::group(['middleware' => 'checkEmployerRole', 'prefix' => 'employer'], function () {
    Route::get('/hrcentral', 'User\EmployerController@view_hrcentral')->name('employer.view_hrcentral');
    Route::get('/postJob', 'User\EmployerController@view_postJob')->name('employer.view_postJob');
    Route::post('/postJob', 'User\EmployerController@postJob')->name('employer.postJob');
    Route::get('/hrcentral/update/{id}', 'User\EmployerController@view_updateJob')->name('employer.view_updateJob');
    Route::post('/hrcentral/update/{id}', 'User\EmployerController@updateJob')->name('employer.updateJob');
    Route::get('/hrcentral/viewjob/{id}', 'User\EmployerController@viewDetailJob')->name('employer.view_detailJob');
    Route::get('/hrcentral/{id}', 'User\EmployerController@duplicatedJob')->name('employer.duplicatedJob');

    Route::get('/company_info', 'User\EmployerController@view_company_info')->name('employer.view_company_info');
    Route::post('/', 'User\EmployerController@post_company_info')->name('employer.post_company_info');
    Route::get('/account', 'User\EmployerController@view_account')->name('employer.view_account');
    Route::post('/account', 'User\EmployerController@post_account')->name('employer.post_account');
    Route::get('/changepassword', 'User\EmployerController@changepassword')->name('employer.changepassword');
    Route::post('/changepassword', 'User\EmployerController@post_changepassword')->name('employer.post_changepassword');
    Route::get('/manageresume', 'User\EmployerController@manageresume')->name('employer.manageresume');

    Route::get('/logout', 'User\EmployerController@logout')->name('employer.logout');
});




Route::get('/quen_mk/view', 'User\UserController@quen_mk_view')->name('quen_mk_view');
Route::get('/doi_mk', 'User\UserController@doi_mk_view')->name('doi_mk_view');
Route::post('/doi_mk', 'User\UserController@doi_mk')->name('doi_mk');

Route::get('/cart', 'User\HomeController@cart')->name('cart');
Route::get('/cart/up_sl/{sl}/{id_sp}/{don_gia}', 'User\AjaxController@up_sl')->name('up_sl');
Route::get('/cart/xoa_sp/{id_nd}/{id_sp}', 'User\AjaxController@xoa_sp');

Route::get('/product/category_brand/view/{DM_id}/{TH_id}', 'User\ProductController@user_viewProductCategoryBrand')->name('user.product.category_brand.view');
Route::get('/product/view/{id}', 'User\ProductController@view_product')->name('product.view');
Route::get('/product/add_cart/{id_nd}/{id_product}/{so_luong}', 'User\AjaxController@add_cart')->name('add_cart');
Route::get('/product/sp_khuyen_mai', 'User\ProductController@sp_khuyen_mai')->name('sp_khuyen_mai');

Route::get('/user/kt_email/{email}', 'User\AjaxController@kt_email');
Route::get('/user/kt_ma_xn/{ma_xn}/{email}', 'User\AjaxController@kt_ma_xn');

Route::get('/thanh_toan/view/{sp_thanh_toan}', 'User\HomeController@thanh_toan_view')->name('thanh_toan_view');
Route::post('/thanh_toan', 'User\HomeController@thanh_toan')->name('thanh_toan');


Route::get('/phan_trang/{i}/{mes}', 'User\AjaxController@phan_trang');
Route::get('/bo_loc/{sx}/{gia}/{ram}/{rom}/{tu_khoa}', 'User\AjaxController@bo_loc');

Route::get('/search', 'User\HomeController@search')->name('search');

Route::post('/danh_gia', 'User\AjaxController@danh_gia');
Route::post('/tl_danh_gia', 'User\AjaxController@tl_danh_gia');

Route::get('/in_don_hang/{id_hd}', 'User\UserController@in_don_hang')->name('in_don_hang');

// admin

Route::get('/admin', 'Admin\LoginController@index')->name('admin.login');
Route::get('/admin/login', 'Admin\LoginController@index')->name('admin.login');
Route::post('/admin/login', 'Admin\LoginController@login')->name('admin.login');

Route::group(['middleware' => 'checklogin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', 'Admin\HomeController@dashboard')->name('admin.dashboard');
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::get('/product', ['as' => 'admin.product.index', 'uses' => 'Admin\ProductController@index']);
    Route::get('/product/add', ['as' => 'admin.product.add', 'uses' => 'Admin\ProductController@addProduct']);
    Route::post('/product/add', ['as' => 'admin.product.save', 'uses' => 'Admin\ProductController@addProductPost']);
    Route::get('/product/edit/{id}', ['as' => 'admin.product.edit', 'uses' => 'Admin\ProductController@edit']);
    Route::post('/product/edit/{id}', ['as' => 'admin.product.edit', 'uses' => 'Admin\ProductController@update']);
    Route::get('/product/destroy/{id}', ['as' => 'admin.product.getDestroy', 'uses' => 'Admin\ProductController@destroy']);
    Route::get('/product/{id}', ['as' => 'admin.product', 'uses' => 'Admin\ProductController@cate_product']);
    Route::get('/product/active/{id}', ['as' => 'admin.product.active', 'uses' => 'Admin\ProductController@active']);


    Route::get('/category', ['as' => 'admin.category.index', 'uses' => 'Admin\CateController@index']);
    Route::get('/category/add', ['as' => 'admin.category.add', 'uses' => 'Admin\CateController@addCate']);
    Route::post('/category/add', ['as' => 'admin.category.save', 'uses' => 'Admin\CateController@addCatePost']);
    Route::get('/category/edit/{id}', ['as' => 'admin.category.edit', 'uses' => 'Admin\CateController@edit']);
    Route::post('/category/edit/{id}', ['as' => 'admin.category.edit', 'uses' => 'Admin\CateController@update']);
    Route::get('/category/destroy/{id}', ['as' => 'admin.category.getDestroy', 'uses' => 'Admin\CateController@destroy']);

    Route::get('/brand', ['as' => 'admin.brand.index', 'uses' => 'Admin\BrandController@index']);
    Route::get('/brand/add', ['as' => 'admin.brand.add', 'uses' => 'Admin\BrandController@addBrand']);
    Route::post('/brand/add', ['as' => 'admin.brand.save', 'uses' => 'Admin\BrandController@addBrandPost']);
    Route::get('/brand/edit/{id}', ['as' => 'admin.brand.edit', 'uses' => 'Admin\BrandController@edit']);
    Route::post('/brand/edit/{id}', ['as' => 'admin.brand.edit', 'uses' => 'Admin\BrandController@update']);
    Route::get('/brand/destroy/{id}', ['as' => 'admin.brand.getDestroy', 'uses' => 'Admin\BrandController@destroy']);

    //khuyến mãi
    Route::get('/discount', ['as' => 'admin.discount.index', 'uses' => 'Admin\DiscountController@index']);
    Route::get('/discount/add', ['as' => 'admin.discount.add', 'uses' => 'Admin\DiscountController@addDiscount']);
    Route::post('/discount/add', ['as' => 'admin.discount.save', 'uses' => 'Admin\DiscountController@addDiscountPost']);
    Route::get('/discount/edit/{id}', ['as' => 'admin.discount.edit', 'uses' => 'Admin\DiscountController@edit']);
    Route::post('/discount/edit/{id}', ['as' => 'admin.discount.edit', 'uses' => 'Admin\DiscountController@update']);
    Route::get('/discount/destroy/{id}', ['as' => 'admin.discount.getDestroy', 'uses' => 'Admin\DiscountController@destroy']);

    Route::get('/order', ['as' => 'admin.order.index', 'uses' => 'Admin\OrderController@index']);
    Route::get('/order/add', ['as' => 'admin.order.add', 'uses' => 'Admin\OrderController@addOrder']);
//    Route::post('/admin/order/add', ['as' => 'admin.order.save', 'uses' => 'Admin\OrderController@addOrderPost']);
    Route::get('/order/detail/{id}', ['as' => 'admin.order.detail', 'uses' => 'Admin\OrderController@detail']);
    Route::get('/order/edit/{id}', ['as' => 'admin.order.edit', 'uses' => 'Admin\OrderController@edit']);
    Route::post('/order/edit/{id}', ['as' => 'admin.order.edit', 'uses' => 'Admin\OrderController@update']);
//    Route::get('/admin/order/detail/destroy/{id}', ['as' => 'admin.order.getDestroy', 'uses' => 'Admin\OrderController@destroy']);
    Route::get('/order/action/{id}', ['as' => 'admin.order.action', 'uses' => 'Admin\OrderController@action']);
    Route::get('/order/cancel/{id}', ['as' => 'admin.order.cancel', 'uses' => 'Admin\OrderController@cancel']);
    Route::get('/order/returns/{id}', ['as' => 'admin.order.returns', 'uses' => 'Admin\OrderController@returns']);
    Route::get('/order/del_product/{MaSP}/{MaHD}', ['as' => 'admin.order.getDestroy', 'uses' => 'Admin\OrderController@destroy']);
    Route::get('/order/detail/{MaSP}/{MaHD}/{sl}', 'Admin\OrderController@change_sl');

//
    Route::get('/user', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
    Route::get('/user/add', ['as' => 'admin.user.add', 'uses' => 'Admin\UserController@addUser']);
    Route::post('/user/add', ['as' => 'admin.user.save', 'uses' => 'Admin\UserController@addUserPost']);
    Route::get('/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit']);
    Route::post('/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@update']);
    Route::get('/user/destroy/{id}', ['as' => 'admin.user.getDestroy', 'uses' => 'Admin\UserController@destroy']);

    //Photo-video --Social
    Route::get('/photo-video/social', ['as' => 'admin.photo-video.social', 'uses' => 'Admin\PhotoVideoController@index']);
    Route::post('/photo-video/social/add', ['as' => 'admin.photo-video.social.add', 'uses' => 'Admin\PhotoVideoController@add']);
    Route::post('/photo-video/social/update/{id}', ['as' => 'admin.photo-video.social.update', 'uses' => 'Admin\PhotoVideoController@update']);
    Route::get('/photo-video/social/del/{id}', ['as' => 'admin.photo-video.social.del', 'uses' => 'Admin\PhotoVideoController@del']);
    //Photo-video --Slideshow
    Route::get('/photo-video/slideshow-ungvien', ['as' => 'admin.photo-video.slideshow', 'uses' => 'Admin\PhotoVideoController@indexSlideshow']);
    Route::post('/photo-video/slideshow-ungvien/add', ['as' => 'admin.photo-video.slideshow-ungvien.add', 'uses' => 'Admin\PhotoVideoController@addSlideshowUngvien']);
    Route::post('/photo-video/slideshow-ungvien/update/{id}', ['as' => 'admin.photo-video.slideshow-ungvien.update', 'uses' => 'Admin\PhotoVideoController@updateSlideshowUngvien']);
    Route::get('/photo-video/slideshow-ungvien/del/{id}', ['as' => 'admin.photo-video.slideshow-ungvien.del', 'uses' => 'Admin\PhotoVideoController@delSlideshowUngvien']);

});

//Login facebook
Route::get('login-facebook','User\LoginController@login_facebook')->name('login-by-facebook');
Route::get('auth/facebook/callback','User\LoginController@callback_facebook');

//Lấy danh mục nghề
Route::get('/danhmuc','Admin\CateController@lay_cate');
Route::get('/city','Admin\CateController@lay_city');











