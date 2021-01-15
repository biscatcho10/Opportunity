@extends('layouts.app')

@section('title', 'Login')

@section('content')

@extends('site.includes.dark_nav1')

<section class="login-form">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5 view">
                <!-- <img src="../images/login.png" alt=""> -->
            </div><!-- cols -->
            <div class="col-sm-12 col-md-5 col-lg-5 pl-5">
                <h2 class="font-weight-bold">Login</h2>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sed illo cum quod illum.</p>
                <form method="POST" action="{{ route('login') }}">
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- <input type="radio" class="mt-3"> Remember Password --}}
                    <div class="form-group row ">
                        <div class="col-md-6">
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    Remember Password
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            @if (Route::has('password.request'))
                            <a class="float-right mt-2 forget" href="{{ route('password.request') }}">
                                Forget Password
                            </a>
                        @endif
                        </div>
                    </div>
                    <a href="ApplicationProcessWizard.html">
                        <button type="submit" class="btn mt-3 form-control login-button text-uppercase">Login</button>
                    </a>

                    <p class="dont-have">Don't have an account ? <a href="{{route('register')}}" class="apply-link">Apply now</a></p>
                </form>
            </div><!-- cols -->
            <div class="col-2"></div>
        </div><!-- row -->
    </div><!-- container -->
</section>

<section class="popup">
    <!--Model Popup starts-->
    <div class="container">
        <div class="row">
            <!-- <a class="btn btn-primary" data-toggle="modal" href="#ignismyModal">open Popup</a> -->
            <div class="modal fade" id="ignismyModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content" style="border-radius: 50px; border: 18px solid #ddd;">

                        <div class="modal-body text-center">

                            <div class="head text-center">
                                <h3 class="my-2">Verify</h3>
                                <p class="p-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore sit
                                    Lorem ipsum dolor ipsum.
                                </p>
                            </div>

                           <form action="">
                               <input type="text p-1 code" placeholder="  Enter Code">
                               <div class="row my-2">
                                    <div class=" offset-1 col-md-5">
                                        <p class="lp">Send me Another Code</p>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-md-4">
                                        <p class="lp">Need Help?</p>
                                        <div class="col-1"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="offset-1 col-10">
                                        <button class="sub form-control">SUBMIT</button>
                                    </div>
                                </div>
                           </form>

                           </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Model Popup ends-->
</section>
@endsection
