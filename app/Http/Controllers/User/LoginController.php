<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Social;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
//        return Socialite::driver('facebook')->redirect();
        return redirect('/')->with('message', 'Đăng nhập Admin thành công');

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
        if (isset(Auth::user()->id)) {
            return redirect()->intended('home');
        }
        return view('user.pages.login_page');
    }

    public function post_login(LoginRequest $request)
    {
        $data = $request->only('email', 'password');
        if(Auth::attempt($data)){
            return redirect()->intended('/home');
        };
            return back()->with('error', 'Tài khoản hoặc mật khẩu không đúng !');
    }

    public function get_register()
    {
        return view('user.pages.register_page');

    }

    public function post_register(RegisterRequest $request)
    {
//        $value = $request->email;
//        $pattern = '/@([\w.-]++)\z/';
//        return filter_var($value, FILTER_VALIDATE_EMAIL) &&
//            preg_match($pattern, $value, $matches) &&
//            (checkdnsrr($matches[1], 'MX') || checkdnsrr($matches[1], 'A') || checkdnsrr($matches[1], 'AAAA'));

        $data = $request->only('email', 'id_nhomquyen');

        $id = DB::table('table_user')->max('id');
        $data['id'] = $id + 1;

        $token = strtoupper(Str::random(10));
        $data['token'] = $token;

        $password_h = bcrypt($request->password);
        $data['password'] = $password_h;

        if ($customer = User::create($data)) {
            Mail::send('user.pages.emails.active_account', compact('customer'), function ($email) use ($customer) {
                $email->subject('EveryWork - Xác thực tài khoản !');
                $email->to($customer->email, $customer->id_nhomquyen, $customer->id, $customer->token);
            });
            return redirect()->route('user.pages.register_page')->with('yes', 'Đăng kí thành công! Vui lòng kiểm tra email để hoàn tất!');
        }
        return view('user.pages.login');

    }

    public function active_acount($token)
    {
//        $check = DB::table('table_user')->where('token', 123)->get();
//        dd($check);
        if ($token) {
            DB::table('table_user')->where('token', $token)->update(['token'=> null, 'status' => 1]);
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

    public function redirectToGoogle()

    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        return redirect()->intended('/');

//        try {
//            $user = Socialite::driver('google')->user();
//            $finduser = User::where('id_google', $user->id)->first();
//            if ($finduser) {
//                Auth::login($finduser);
//                return redirect()->intended('/');
//            } else {
//                return redirect()->intended('/');
//
////                $newUser = User::create([
////                    'id' => 23,
////                    'email' => $user->email,
////                    'id_google' => $user->id,
////                    'password' => encrypt('123456dummy')
////                ]);
////                Auth::login($newUser);
////                return redirect()->intended('/');
//            }
//        } catch (Exception $e) {
//            dd($e->getMessage());
//        }
    }

    public
    function user_dang_ki_view()
    {
        if (Session()->get('id') != null)
            return redirect()->intended('/');
        else
            return view('user.pages.dang_ki');
    }

    public
    function user_dang_ki(Request $request)
    {
        $result = DB::table('nguoidung')->where('email', $request->email)->first();
        if ($result) {
            return view('user.pages.dang_ki', ['error' => 'Email đã tồn tại', 'ho' => $request->ho, 'ten' => $request->ten]);
        } else if ($request->password != $request->password_kt) {
            return view('user.pages.dang_ki', ['error' => 'Mật khẩu xác nhận không đúng', 'ho' => $request->ho, 'ten' => $request->ten, 'email' => $request->email]);
        } else if ($request->ma_capcha != $request->ma_capcha_nhap) {
            return view('user.pages.dang_ki', ['error' => 'Sai mã capcha', 'ho' => $request->ho, 'ten' => $request->ten, 'email' => $request->email]);
        } else {
            $data = $request->all();
            $new = new User();
            $new->Ho = $request->Ho;
            $new->Ten = $request->Ten;
            $new->GioiTinh = $request->GioiTinh;
            $new->SDT = $request->SDT;
            $new->email = $request->email;
            $new->id_tinh = $request->id_tinh;
            $new->password = md5($request->password);
            $new->Quyen_id = 1;
            $new->TrangThai = 1;
            $new->save();
            return redirect()->route("login_view")->with('add', 'Đăng kí thành công');
        }
    }
}
