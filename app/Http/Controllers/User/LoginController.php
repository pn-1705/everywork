<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\JobSeeker;
use App\Models\Social;
use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use function back;
use function redirect;
use function view;

class LoginController extends Controller
{
    public function login_facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook()
    {
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider', 'facebook')->where('provider_user_id', $provider->getId())->first();
        if ($account) {
            //login in vao trang quan tri
            $account_name = Login::where('admin_id', $account->user)->first();
            Session::put('admin_login', $account_name->admin_name);
            Session::put('admin_id', $account_name->admin_id);
            return redirect('/admin/dashboard')->with('message', 'Đăng nhập Admin thành công');
        } else {

            $hieu = new Social([
                'provider_user_id' => $provider->getId(),
                'provider' => 'facebook'
            ]);

            $orang = Login::where('admin_email', $provider->getEmail())->first();

            if (!$orang) {
                $orang = Login::create([
                    'admin_name' => $provider->getName(),
                    'admin_email' => $provider->getEmail(),
                    'admin_password' => '',
                    'admin_status' => 1

                ]);
            }
            $hieu->login()->associate($orang);
            $hieu->save();

            $account_name = Login::where('admin_id', $account->user)->first();

            Session::put('admin_login', $account_name->admin_name);
            Session::put('admin_id', $account_name->admin_id);
            return redirect('/admin/dashboard')->with('message', 'Đăng nhập Admin thành công');
        }
    }

    public function view_loginpage()
    {
        if (Auth::check() == false || Auth::user()->id_nhomquyen == 1 || Auth::user()->id_nhomquyen == 2) {
            return view('user.pages.login_page');
        }
        return redirect()->intended('home');
    }

    public function post_login(LoginRequest $request)
    {
        $users = DB::table('table_user')->where('id_nhomquyen', '=', 0)->get();
        $accountStatus = 0;
        $count = 0;
        foreach ($users as $user) {
            if (Hash::check($request->password, $user->password) && $request->email == $user->email) {
                $count++;
                $accountStatus = $user->status;
            }
        }
        $data = $request->only('email', 'password');
        if ($count == 1) {
            if ($accountStatus == 1) {
                if (Auth::attempt($data)) {
                    if (isset($request -> control))
                    {
                        if($request -> control == 2){
                            return redirect()->back();
                        }
                    }
                    return redirect()->intended('/home');
                }
            } else {
                return back()->with('error', 'Tài khoản hoặc mật khẩu không đúng !');
            }
        }
        return back()->with('error', 'Tài khoản hoặc mật khẩu không đúng !');
    }


    //Đăng kí tài khoản
    public function get_register()
    {
        return view('user.pages.register_page');

    }

    public function post_register(RegisterRequest $request)
    {
        $data = $request->only('email');

        $id = DB::table('table_user')->max('id');
        $data['id'] = $id + 1;
        $data['id_user'] = $id + 1;
        $data['ten'] = $request->ten;

        $token = strtoupper(Str::random(10));
        $data['token'] = $token;
        $data['id_nhomquyen'] = 0;

        $password = $request->password;
        $password_h = bcrypt($request->password);
        $data['password'] = $password_h;

        if ($customer = User::create($data)) {
            JobSeeker::create($data);
            Mail::send('user.pages.emails.active_account', compact('customer', 'password'), function ($email) use ($customer, $password) {
                $email->subject('Xác thực tài khoản');
                $email->to($customer->email, $customer->id_nhomquyen, $customer->id, $customer->token, $customer->ten, $password);
            });
            Auth::logout();
            /*$singIn = ['email' => $request->email, 'password' => $password];
            Auth::attempt($singIn);*/
            return redirect()->route('user.pages.login_page')->with('yes', 'Đăng kí thành công! Kiểm tra email và xác thực tài khoản.');
        }
        return view('user.pages.register_page');
    }

    public function active_acount($token)
    {
//        $check = DB::table('table_user')->where('token', 123)->get();
//        dd($check);
        if ($token) {
            DB::table('table_user')->where('token', $token)->update(['token' => null, 'status' => 1]);
            return redirect()->route('user.pages.login_page')->with('yes', 'Xác nhận tài khoản thành công! Bạn có thể đăng nhập.');
        } else {
            return redirect()->route('user.pages.register_page')->with('no', 'Đăng kí thất bại!');
        }
    }

    public function sendMail()
    {
        $helo = 'eded';
        Mail::send('user.pages.home', compact('helo'), function ($email) {
            $email->subject('Xác nhận tài khoản email');
            $email->to('nhavophong3@gmail.com', 'Nhã');
        });
//        return view('user.pages.register_page');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->intended('/login');
    }

    public function employer_logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->intended('/employer/login');
    }

    public function redirectToGoogle()

    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // dd($user);
        } catch (\Exception $e) {
            return redirect()->route('user.pages.login_page');
        }

        $existingUser = User::where('email', $user->getEmail())->first();
        if (isset($existingUser->id_nhomquyen)) {
            if ($existingUser->id_nhomquyen == 1) {
                return redirect()->route('user.pages.login_page')->with('yes', 'Email đã được nhà tuyển dụng đăng kí !');
            }
        }

        $id = DB::table('table_user')->max('id');

        if ($existingUser) {
            auth()->login($existingUser, true);
            return redirect()->route('user.pages.home');
        } else {
            $newUser = new User;
            $newUser->id = $id + 1;
            $newUser->provider_name = 'google';
            $newUser->provider_id = $user->getId();
            $newUser->ten = $user->getName();
            $newUser->email = $user->getEmail();
            $password = strtoupper(Str::random(8));
            $password_h = bcrypt($password);
            $newUser->password = $password_h;
            $newUser->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $newUser->created_at = Carbon::now('Asia/Ho_Chi_Minh');
            $newUser->avatar = $user->getAvatar();
            $newUser->save();

            auth()->login($newUser, true);

            $data = ['email' => $user->getEmail(), 'password' => $password];
            Auth::attempt($data);

            $customer = $newUser;
            Mail::send('user.pages.emails.createAccount', compact('customer', 'password'), function ($email) use ($customer, $password) {
                $email->subject('Thông báo tạo tài khoản thành công');
                $email->to($customer->email, $customer->id_nhomquyen, $customer->id, $customer->token, $customer->ten, $password);
            });
        }

        return redirect()->route('profile');
    }

    public function viewForgotPassword()
    {
        return view('user.pages.user.forgotPassword');
    }

    public function sendForgotPassword(Request $request)
    {
        $user = User::where('email', $request->email)->where('id_nhomquyen', 0)->where('status', 1)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Email này chưa đăng ký tài khoản !');
        }
        $token = strtoupper(Str::random(15));
        $user->token = $token;
        $user->save();

        Mail::send('user.pages.emails.forgotPassword', compact('user'), function ($email) use ($user) {
            $email->subject('Cấp lại Mật khẩu');
            $email->to($user->email);
        });

        return redirect()->back()->with('succes', 'Chúng tôi vừa gửi email cho bạn để xác nhận việc cung cấp mật khẩu mới.
        Vui lòng kiểm tra hộp thư và làm theo hướng dẫn để nhận được mật khẩu mới !');
    }

    public function clickMailForgotPassword($code)
    {
        return view('user.pages.user.changePassword_forgotPassword', compact('code'));
    }

    public function forgotpassword_change(ResetPasswordRequest $request)
    {
        $check = User::where('token', $request->code)->first();
        User::where('token', $request->code)->update([
            'token' => null,
            'password' => bcrypt($request->new_password)
        ]);

        if ($check){
            return redirect()->route('user.pages.login_page')->with('resetPassWord', 'Tài khoản của bạn đã được cập nhật mật khẩu mới!');
        }
        return redirect()->route('user.pages.login_page')->with('resetPassWordFail', 'Đổi mật khẩu không thành công !');
    }
}
