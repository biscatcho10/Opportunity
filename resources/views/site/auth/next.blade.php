@extends('layouts.app')
@section('content')

@include('site.includes.dark_nav1')

<div class="pop" style="height: 700px">
    {{-- <button type="submit"  id="popup" class="hidden" data-toggle="modal" href="#ignismyModal" >Verify Now</button> --}}

    <section class="popup" >
        <!--Model Popup starts-->
        <div class="container">
            <div class="row">
                <!-- <a class="btn btn-primary" data-toggle="modal" href="#ignismyModal">open Popup</a> -->
                <section class="popup">
                    <!--Model Popup starts-->
                    <div class="container">
                        <div class="row">
                            <div class="modal fade" id="myModal" role="dialog">
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
                                            {{-- <a href="{{route('login')}}"  data-dismiss="modal" >Next</a> --}}
                                            <a href="{{route('login')}}" class="sub form-control btn goLogin w-25">login</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Model Popup ends-->
                </section>
            </div>
        </div>
        <!--Model Popup ends-->
    </section>
</div>



@endsection
