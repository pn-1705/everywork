<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Social;
use Carbon\Carbon;
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
        if (isset(Auth::user()->id)) {
            return redirect()->intended('home');
        }
        return view('user.pages.login_page');
    }

    public function post_login(LoginRequest $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            return redirect()->intended('/home');
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
        $data = $request->only('email', 'id_nhomquyen');

        $id = DB::table('table_user')->max('id');
        $data['id'] = $id + 1;

        $token = strtoupper(Str::random(10));
        $data['token'] = $token;

        $password = $request->password;
        $password_h = bcrypt($request->password);
        $data['password'] = $password_h;

        if ($customer = User::create($data)) {
            Mail::send('user.pages.emails.createAccount', compact('customer','password'), function ($email) use ($customer, $password) {
                $email->subject('Thông báo tạo tài khoản thành công');
                $email->to($customer->email, $customer->id_nhomquyen, $customer->id, $customer->token, $customer->ten, $password);
            });

            $singIn = ['email' => $request->email, 'password' => $password];
            Auth::attempt($singIn);
            return redirect()->route('profile')->with('yes', 'Đăng kí thành công! Chào mừng bạn đến với EveryWork!');
        }
        return view('user.pages.login');
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

    public function redirectToGoogle()

    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('login');
        }

        $existingUser = User::where('email', $user->getEmail())->first();
        $id = DB::table('table_user')->max('id');

        if ($existingUser) {
            auth()->login($existingUser, true);
        } else {
            $newUser = new User;
            $newUser->id = $id + 1;
            $newUser->provider_name = 'google';
            $newUser->provider_id = $user->getId();
            $newUser->ten = $user->getName();
            $newUser->email = $user->getEmail();
            $password = strtoupper(Str::random(8));
            $newUser->password = $password;
            $newUser->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $newUser->created_at = Carbon::now('Asia/Ho_Chi_Minh');
            $newUser->avatar = $user->getAvatar();
            $newUser->save();

            auth()->login($newUser, true);

            $data = ['email' => $user->getEmail(), 'password' => $password];
            Auth::attempt($data);

            $customer = $newUser;
            Mail::send('user.pages.emails.createAccount', compact('customer','password'), function ($email) use ($customer, $password) {
                $email->subject('Thông báo tạo tài khoản thành công');
                $email->to($customer->email, $customer->id_nhomquyen, $customer->id, $customer->token, $customer->ten, $password);
            });
        }

        return redirect()-> route('profile');
    }
}
