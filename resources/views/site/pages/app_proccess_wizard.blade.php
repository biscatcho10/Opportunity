@extends('layouts.app')

@section('title', 'Application process Form')

@section('style-num')
    <link rel="stylesheet" href="{{asset('site/wizard/css/style-three.css')}}" />
@endsection

@section('content')

    @include('site.includes.dark_nav2')

    <div class="page-content">
        <div class="wizard-v2-content">
            <div class="wizard-form">
                <div class="wizard-header">
                    <h3>Registration Process</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro magnam unde architecto
                        quaerat! Voluptate cupiditate voluptatem vitae eum itaque excepturi ex dolores facilis
                        debitis error ut consequuntur facere.</p>
                    <h5 class="my-4 font-weight-bold">Steps To Follow</h5>
                </div>

                <form class="form-register" action="#" method="post">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>Eligibility Q</h2> <span class="dash"></span>

                        <section>
                            <div class="inner q-inner">
                                <p class="my-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Amet consectetur adipiscing elit ut aliquam. Viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis.
                                    Nulla pellentesque dignissim enim sit amet venenatis urna. Suspendisse sed nisi lacus sed viverra tellus in. Et leo duis ut diam.
                                    Mauris a diam maecenas sed enim ut sem viverra. Nisl condimentum id venenatis a condimentum vitae sapien.
                                    Natoque penatibus et magnis dis parturient montes. Semper eget duis at tellus at urna condimentum mattis.
                                </p>
                            </div>

                        </section>
                        <!-- SECTION 2 -->
                        <h2>NDA</h2>
                        <section>
                            <div class="inner nda-inner">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae necessitatibus
                                    labore nisi dignissimos iusto laborum totam autem quas accusamus, ea vel eligendi
                                    vero repudiandae eius porro? Ab ipsum qui tempora dolor sapiente a doloremque cumque
                                    quo rem delectus sint voluptas distinr molestiae reprehenderit placeat aperiam </p>

                                <p class="my-4"><i class="fa fa-angle-right hint"></i> Lorem ipsum, dolor sit amet
                                    consectetur
                                    adipisicing elit. Atque, aut.</p>
                                <p class="my-4"><i class="fa fa-angle-right hint"></i> Lorem ipsum, dolor sit amet
                                    consectetur
                                    adipisicing elit. Atque, aut.</p>

                                <div class="form-row">
                                    <div class="form-holder">
                                        <input type="text" placeholder="Name" class="form-control" id="first_name">
                                    </div>
                                    <div class="form-holder">
                                        <select name="" id="time" class="form-control">
                                            <option value="7:00am - 18:00pm" selected>Select Occuption</option>
                                            <option value="9:00am - 21:00pm">9:00am - 21:00pm</option>
                                            <option value="10:00am - 22:00pm">10:00am - 22:00pm</option>
                                            <option value="12:00am - 24:00pm">12:00am - 24:00pm</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-holder">
                                    <textarea class="form-control" name="" id="" cols="30" rows="3">Address</textarea>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 3 -->
                        <h2>Detailed Q</h2>
                        <section>
                            <div class="inner nda-inner">
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem iure
                                    repudiandae aut consectetur beatae qui. Iusto magnam officia doloremque vero minus
                                    quod, distinctio, dolorem dolorum, assumenda unde nemo laudantium facere?</p>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem iure
                                    repudiandae aut consectetur beatae qui. Iusto magnam officia doloremque vero minus
                                    quod, distinctio, dolorem dolorum, assumenda unde nemo laudantium facere?</p>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem iure
                                    repudiandae aut consectetur beatae qui. Iusto magnam officia doloremque vero minus
                                    quod, distinctio, dolorem dolorum, assumenda unde nemo laudantium facere?</p>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <input name="" id="time" class="form-control" placeholder="Signature">
                                        <span class="select-btn">
                                            <button class="choose-btn text-uppercase">
                                                sign here
                                            </button>
                                        </span>
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" name="date" class="date" id="date"
                                            placeholder="15 / Jan / 2018">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h2>Legal</h2>
                        <section>
                            <div class="inner nda-inner">
                                <div class="applier-info">
                                    <div class="form-row">
                                        <label for="name" class="label1">Name : </label>
                                        <label for="date" class="label2">Date : </label>
                                    </div>
                                </div>
                                <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ut modi
                                    omnis mollitia, quae libero dicta aliquam, quibusdam tenetur atque, deleniti unde
                                    minus aspernatur fugiat porro distinctio quidem blanditiis! Accusantium temporibus
                                    laboriosam dolore, similique accusamus, dolor id ipsam maiores necessitatibus ea,
                                    consequuntur a assumenda cupiditate obcaecati. Nemo, non minus facilis expedita
                                    aliquid quaerat molestias aperiam, quibusdam quisquam, explicabo est dignissimos?
                                </p>
                                <p class="my-3">1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ut modi
                                    omnis mollitia,
                                </p>
                                <p class="my-3">2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ut modi
                                    omnis mollitia,
                                </p>
                                <p class="my-3">3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ut modi
                                    omnis mollitia,
                                </p>
                                <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ut modi
                                    omnis mollitia Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam
                                    veniam inventore aperiam saepe blanditiis aut fugiat, natus maiores cum dolores?
                                </p>
                                <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ut modi
                                    omnis mollitia Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam
                                    veniam inventore aperiam saepe blanditiis aut fugiat, natus maiores cum dolores?
                                </p>


                            </div>
                        </section>
                        <h2>Payment</h2>
                        <section>
                            <div class="inner nda-inner">
                                <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ut modi
                                    omnis mollitia, quae libero dicta aliquam, quibusdam tenetur atque, deleniti unde
                                    minus aspernatur fugiat porro distinctio quidem blanditiis! Accusantium temporibus
                                    laboriosam dolore, similique accusamus, dolor id ipsam maiores necessitatibus ea,
                                    consequuntur a assumenda cupiditate obcaecati. Nemo, non minus facilis expedita
                                    aliquid quaerat molestias aperiam, quibusdam quisquam, explicabo est dignissimos?
                                </p>
                                <p class="my-3"><input class="mr-2" type="checkbox" checked>Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Voluptas, ullam.</p>
                                <p class="my-3"><input class="mr-2" type="checkbox">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Voluptas, ullam.</p>
                                <p class="my-3"><input class="mr-2" type="checkbox">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Voluptas, ullam.</p>
                                <div class="form-row">
                                    <div class="pay">
                                        <div class="form-row">
                                            <div class="form-holder">
                                                <input type="text" placeholder="Card Holder Name" id="first_name"
                                                    style="background-color: #eee; border: none; width: 200%;">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-holder">
                                                <input type="text" placeholder="Card Number" id="card_number"
                                                    style="background-color: #eee; border: none; width: 200%;">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-holder">
                                                <select name="" id="time" style="background-color: #eee; border: none;">
                                                    <option value="7:00am - 18:00pm" selected>Expiry Date</option>
                                                    <option value="9:00am - 21:00pm">CVV</option>
                                                    <option value="10:00am - 22:00pm">CVV</option>
                                                    <option value="12:00am - 24:00pm">CVV</option>
                                                </select>
                                            </div>
                                            <div class="form-holder">
                                                <select name="" id="time" style="background-color: #eee; border: none;">
                                                    <option value="7:00am - 18:00pm" selected>CCV</option>
                                                    <option value="9:00am - 21:00pm">1 Jan</option>
                                                    <option value="10:00am - 22:00pm">1 Jan</option>
                                                    <option value="12:00am - 24:00pm">1 Jan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('site/images/2021-01-10_005022.png')}}" alt="">
                                </div>

                                <button type="button" class="btn mt-3 form-control  text-uppercase w-25 mx-auto" data-toggle="modal"
                                href="#ignismyModal" style="
                                    background-color: #663399;
                                    border-radius: 50px;
                                    color: #fff;
                                    padding:5px 0px 10px 0px;
                                    width: 330px;
                                    margin:5px 0px 5px 10px;">Submit</button>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <button type="button" class="btn mt-3 form-control  text-uppercase w-25 mx-auto" data-toggle="modal"
	href="#ignismyModal" style="
		background-color: #663399;
		border-radius: 50px;
		color: #fff;
		padding:5px 0px 10px 0px;
		width: 330px;
		margin:5px 0px 5px 10px;">Submit</button>

    <section class="popup">
        <!--Model Popup starts-->
        <div class="container">
            <div class="row">
                <!-- <a class="btn btn-primary" data-toggle="modal" href="#ignismyModal">open Popup</a> -->
                <div class="modal fade" id="ignismyModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius: 50px">

                            <div class="modal-body text-center">

                                <div class="head text-center text-center">
                                    <h3 class="text-uppercase" style="margin-top: 100px;">thanks for Submiting Your Application</h3>
                                    <p class="p-3">
                                        Your Status is pending, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore sit
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore sit Lorem
                                        ipsum dolor sit amet, consectetur adipiscing.
                                    </p>
                                    <div class="container">
                                        <div class="row mb-4">
                                            <div class="offset-1 col-8">
                                                <a href="ProtalHomepageApproved.html">
                                                    <button class="sub form-control">NEXT</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
