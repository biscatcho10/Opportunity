@extends('layouts.app')
@section('content')

@include('site.includes.dark_nav1')

<div class="pop" style="height: 700px">
    <button type="submit"  id="popup" class="hidden" data-toggle="modal" href="#ignismyModal" >Verify Now</button>

    <section class="popup" >
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

                                <form method="POST" action="{{ route('verifyUser') }}">
                                    @csrf
                                   <input name="user_id" value="{{$user_id}}" type="hidden">
                                   <input type="text p-1 code" name="verification_code" id="exampleInputVerificationCode" placeholder="  Enter Code">
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
                                            <button type="submit" class="sub form-control">SUBMIT</button>
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
</div>



@endsection
