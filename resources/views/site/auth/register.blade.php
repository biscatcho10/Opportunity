@extends('layouts.app')

@section('title', 'Apply Now')

@section('content')

@extends('site.includes.dark_nav1')


<section class="login-form">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5 view">
                <!-- <img src="../images/login.png" alt=""> -->
            </div><!-- cols -->
            <div class="col-sm-12 col-md-5 col-lg-5 pl-5">
                <h2 class="font-weight-bold rhead">Apply Now</h2>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, veritatis sed illo cum quod illum.</p>
                <form action="{{route('register.submit')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input id="first_name" type="text" class="form-control mt-3 @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="First Name">
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input id="last_name" type="text" class="form-control mt-3 @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Last Name">
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <input id="email" type="email" class="form-control mt-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    {{-- <input class="form-control mt-3" type="password" placeholder="Password"> --}}
                    <div class="row">
                        <div class="form-group col-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                            placeholder="Password Confirm">
                        </div>
                    </div>
                    <input class="form-control mt-3" type="tel" name="phone" placeholder="Phone">
                    <div class="row">
                        <div class="col-6">
                            <input type="radio" class="mt-4"> <label for="">Term & Conditions</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" class="mt-4"> <label style="font-size: 14px;">Data Protection Declaration</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="radio" class="mt-4"> <label for="">Newsletter</label>
                        </div>
                    </div>
                    {{-- <button type="submit" class="btn mt-3 form-control login-button text-uppercase" >submit your request</button> --}}
                    <button type="button" class="btn mt-3 form-control login-button text-uppercase" data-toggle="modal" href="#ignismyModal">submit your request</button>

                    <section class="popup">
                        <!--Model Popup starts-->
                        <div class="container">
                            <div class="row">
                                <!-- <a class="btn btn-primary" data-toggle="modal" href="#ignismyModal">open Popup</a> -->
                                <div class="modal fade" id="ignismyModal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="border-radius: 30px;">
                                            <div class="modal-header">
                                               <img src=" {{asset('site/images/success.png')}} " class="img-fluid">
                                            </div>

                                            <div class="modal-body text-center">
                                                <h3>Thank You</h3>
                                                <p class="p-3">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor incididunt ut labore sit
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor incididunt ut labore sit Lorem
                                                    ipsum dolor sit amet, consectetur adipiscing.
                                                </p>
                                                {{-- <a href="{{route('home')}}" class="btn goLogin" >Next</a> --}}
                                                <button type="submit" class="btn goLogin" >Next</button>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Model Popup ends-->
                    </section>
                </form>
                <p class="dont-have-r">Already have an account? <a href="{{route('login')}}" class="apply-link">Log In now</a></p>
            </div><!-- cols -->
            <div class="col-2"></div>

            <!-- Vertically centered modal -->
        </div><!-- row -->
    </div><!-- container -->
</section>

@endsection
