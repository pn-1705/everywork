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
Route::get('user/active/{token}', 'User\LoginController@active_acount')->name('user.active_account');
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

Route::get('/tin-tuc', 'User\UserController@viewNews')->name('user.tin-tuc');


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
    Route::get('/dashboard', 'Employer\ManagerController@viewDashboard')->name('employer.viewDashboard');
    Route::get('/hrcentral', 'User\EmployerController@view_hrcentral')->name('employer.view_hrcentral');
    Route::get('/hrcentral/waitPostJob', 'User\EmployerController@view_waitPostJob')->name('employer.view_waitPostJob');
    Route::get('/hrcentral/expJob', 'User\EmployerController@view_expJob')->name('employer.view_expJob');

    Route::get('/addJob', 'User\EmployerController@view_addJob')->name('employer.view_addJob');
    Route::post('/addJob', 'User\EmployerController@addJob')->name('employer.addJob');
    Route::get('/postJob/{id}', 'Employer\ManagerController@postJob')->name('employer.postJob');
    Route::get('/hrcentral/update/{id}', 'User\EmployerController@view_updateJob')->name('employer.view_updateJob');
    Route::post('/hrcentral/update/{id}', 'User\EmployerController@updateJob')->name('employer.updateJob');
    Route::get('/hrcentral/viewjob/{id}', 'User\EmployerController@viewDetailJob')->name('employer.view_detailJob');
    Route::get('/hrcentral/duplicatedJob/{id}', 'User\EmployerController@duplicatedJob')->name('employer.duplicatedJob');


    Route::get('/company_info', 'User\EmployerController@view_company_info')->name('employer.view_company_info');
    Route::get('/emailsetting', 'Employer\ManagerController@viewEmailConfig')->name('employer.viewEmailConfig');
    Route::post('/emailsetting', 'Employer\ManagerController@postEmailConfig')->name('employer.postEmailConfig');
    Route::post('/sendLetter', 'Employer\ManagerController@sendLetter')->name('employer.sendLetter');
    Route::post('/', 'User\EmployerController@post_company_info')->name('employer.post_company_info');
    Route::get('/account', 'User\EmployerController@view_account')->name('employer.view_account');
    Route::post('/account', 'User\EmployerController@post_account')->name('employer.post_account');
    Route::get('/changepassword', 'User\EmployerController@changepassword')->name('employer.changepassword');
    Route::post('/changepassword', 'User\EmployerController@post_changepassword')->name('employer.post_changepassword');
    Route::get('/manageresume', 'Employer\ManagerController@viewManageResume')->name('employer.manageresume');
    Route::get('/manageresume/CV/{filename}', 'Employer\ManagerController@viewCV')->name('employer.viewCV');
    Route::get('/manageresume/job', 'Employer\ManagerController@locUngVien')->name('employer.locUngVien');
    Route::get('/manageresume/viewCV/{id}', 'Employer\ManagerController@viewCV')->name('employer.viewCV');
    Route::get('/manageresume/exportFileJobSeeker', 'Employer\ManagerController@exportFileJobSeeker')->name('employer.exportFileJobSeeker');

    Route::get('/logout', 'User\EmployerController@logout')->name('employer.logout');

    //Yêu cầu cấp quyền đăng bài
    Route::get('/sendRequestRole', 'Employer\ManagerController@sendRequestRole')->name('employer.sendRequestRole');

});

// admin

Route::get('/admin', 'Admin\LoginController@index')->name('admin.login');
Route::get('/admin/login', 'Admin\LoginController@index')->name('admin.login');
Route::post('/admin/login', 'Admin\LoginController@login')->name('admin.login');

Route::group(['middleware' => 'checklogin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', 'Admin\HomeController@dashboard')->name('admin.dashboard');
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');

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
    //Quản lí bài viết
    Route::get('/news', ['as' => 'admin.news', 'uses' => 'Admin\NewsController@index']);
    Route::get('/news/create', ['as' => 'admin.news.add', 'uses' => 'Admin\NewsController@add']);
    Route::post('/news/post', ['as' => 'admin.news.post', 'uses' => 'Admin\NewsController@postNews']);
    Route::get('/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
    Route::post('/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);
    Route::get('/news/del/{id}', ['as' => 'admin.news.del', 'uses' => 'Admin\NewsController@del']);

    //Quản lí nhà tuyển dụng
    Route::get('/employers/employer', ['as' => 'admin.employers.index', 'uses' => 'Admin\EmployerManagerController@index']);
    Route::get('/employers/new-employer', ['as' => 'admin.employers.newRegister', 'uses' => 'Admin\EmployerManagerController@indexNewRegister']);
    Route::get('/employers/grantPermissions/{id}', ['as' => 'admin.employers.grantPermissions', 'uses' => 'Admin\EmployerManagerController@grantPermissions']);
    Route::get('/employers/refusePermissions/{id}', ['as' => 'admin.employers.refusePermissions', 'uses' => 'Admin\EmployerManagerController@refusePermissions']);
    //Quản lí tin tuyển dụng
    Route::get('/jobs/new-job', ['as' => 'admin.posts.newPost', 'uses' => 'Admin\PostManagerController@viewNewPost']);
    Route::get('/jobs/accept/{id}', ['as' => 'admin.posts.acceptJob', 'uses' => 'Admin\PostManagerController@acceptJob']);
    Route::get('/jobs/view/{id}', ['as' => 'admin.posts.viewDetailJob', 'uses' => 'Admin\PostManagerController@viewDetailJob']);

});

//Login facebook
Route::get('login-facebook','User\LoginController@login_facebook')->name('login-by-facebook');
Route::get('auth/facebook/callback','User\LoginController@callback_facebook');

//Lấy danh mục nghề
Route::get('/danhmuc','Admin\CateController@lay_cate');
Route::get('/city','Admin\CateController@lay_city');











