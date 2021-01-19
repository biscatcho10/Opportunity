<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Sms;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showSignupForm()
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
        return view('site.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return $data;
    //     return User::create([
    //         'first_name' => $data['name'],
    //         'last_name' => $data['name'],
    //         'email' => $data['email'],
    //         'phone' => $data['phone'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }


    protected function create(Request $request)
    {

        $data = $request->all();
        $validator = Validator::make($data, [
            'last_name' => 'required',
            'first_name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'phone' => 'required|unique:users,phone|regex:/^([0-9\s\-\+\(\)]*)$/|numeric',
        ]);



        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User ([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => Hash::make($request->get('password')),
        ]);

        $user->verification_code = rand(1000, 9999);
        $user->pin_code = rand(1010, 9999);
        $user->save();

        //send verification code
        if (env('APP_ENV') !== 'local') {
            Sms::sms($user->verification_code, $user->phone);
        }

        // Encrypt userId
        // $encrypted = Crypt::encrypt('userId_' . $user->id);
        // return redirect()->route('verifyUser', ['token' => $encrypted])->with('success', __("Verification code has been sent to your phone number"));

        return redirect()->route('login');

    }

    public function verifyUser(Request $request)
    {
        $user = User::find($request->user_id);
        if ($user) {
            if (!$user->verified) {
                if ($user->verification_code == $request->verification_code) {
                    $user->verified = 1;
                    $user->save();
                    Auth::login($user);
                    $status = __("Your account has been verified successfully");
                } else {
                    return redirect()->back()->with('error', __("Invalid verification code"));
                }

            } else {
                $status = __("Your account is already verified. You can now login.");
            }
        } else {
            return redirect('/')->with('error', __("Invalid user"));
        }
        return redirect()->route('profile.show')->with('success', $status);

    }

    public function showVerificationForm(Request $request)
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
        $decrypted = Crypt::decrypt(\request()->token);
        $decrypted = explode("_", $decrypted);
        $id = $decrypted[1];
        return view('site.auth.verify', ['user_id' => $id]);
    }
}
