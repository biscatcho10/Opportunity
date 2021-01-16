<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = "/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct(Request $request)
    // {
    //     parent::__construct($request);
    //     $this->middleware('guest')->except('logout');
    // }

    public function showLoginForm()
    {
        if (session()->has('error')) {
            toastr()->error(session()->get('error'));
        }
        if (session()->has('success')) {
            toastr()->success(session()->get('success'));
        }
        if (session()->has('info')) {
            toastr()->success(session()->get('info'));
        }
        return view('site.auth.login');

    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required',
        ]);

        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'phone';

        $request->merge([
            $login_type => $request->input('login')
        ]);

        if (auth()->attempt(request([$login_type, 'password'])) == false) {
            return back()->with('error', __('The phone or password is incorrect, please try again'));
        } else {
            $user = $request->user();
            if (!$user->verified) {
                auth()->logout();
                // return back()->with('error', __('You need to verify your account. We have sent you a SMS, please check your Messages.'));
                $encrypted = Crypt::encrypt('userId_' . $user->id);
                return redirect()->route('verifyUser', ['token' => $encrypted])->with('success', __("Verification code has been sent to your phone number"));
            } else{
                return redirect()->to(route('home'));
            }

        }

    }

    public function socialLogin($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function handleProviderCallback($social)
    {
        $userSocial = Socialite::driver($social)->user();
        $user = User::where(['email' => $userSocial->getEmail()])->where("signup_type", $social)->first();
        if ($user) {
            Auth::login($user);
            return redirect(route('/'));
        } else {
            $email_exists = User::where(['email' => $userSocial->getEmail()])->first();
            if (is_null($email_exists)) {
                $user_data = new User([
                    'full_name' => $userSocial->getName(),
                    'email' => $userSocial->getEmail(),
                    'signup_type' => $social
                ]);
                $user_data->save();
                Auth::login($user_data);
                return redirect(route('/'));
            } else {
                return redirect('/')->with('error', __("This email is already registered."));
            }


        }
    }

    public function logout()
    {
        auth()->logout();
        // redirect to homepage
        return redirect()->route('home');
    }

    protected function authenticated(Request $request, $user)
    {
        if (!$user->verified) {
            auth()->logout();
            return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }
        return redirect()->intended($this->redirectPath());
    }
}
