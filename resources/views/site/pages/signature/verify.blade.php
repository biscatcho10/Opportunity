@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verify Email</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('verify.code') }}">
                        @csrf

                        <h3 class="text-center">We want to make sure you use the e-mail </h3>
                        <div class="form-group row">
                            <br>
                            <label for="email" class="col-md-4 col-form-label text-md-right">Code Here</label>

                            <div class="col-md-6">
                                <input id="pin_code" type="text" class="form-control @error('pin_code') is-invalid @enderror" name="pin_code" value="{{ $code ?? old('code') }}" required  autofocus>

                                @error('pin_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
@endsection
