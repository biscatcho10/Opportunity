@extends('layouts.app')

@section('title', 'Email Verification')

@section('content')

@include('site.includes.dark_nav1')

<div class="pop" style="height: 700px">
    <section class="popup"> <!--Model Popup starts-->
        <div class="container">
            <div class="row">
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius: 30px; border: 6px solid #663399">
                            <div class="modal-body text-center">
                                <h4 class="my-4">We want to make sure you use the e-mail</h3>
                                <div class="p-3">
                                    <form method="POST" action="{{ route('verify.code') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <br>
                                            <label class="bold mt-1">Code Here</label>
                                            <div class="col-md-5">
                                                <input id="pin_code" type="text" class="form-control @error('pin_code') is-invalid @enderror" name="pin_code" value="{{ old('code', auth()->user()->pin_code) }}" required  autofocus autocomplete="off">

                                                @error('pin_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="w-50 mx-auto">
                                                <button type="submit" class="sub form-control btn goLogin w-100 ">
                                                    Verify
                                                </button>
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
    </section><!--Model Popup ends-->
</div>
@endsection



