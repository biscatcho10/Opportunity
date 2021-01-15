@extends('layouts.app')

@section('title', 'Opprotunity Soft Circle Form')

@section('style-num')
    <link rel="stylesheet" href="{{asset('site/wizard/css/style-two.css')}}" />
@endsection

@section('content')
    @include('site.includes.light_nav')

    <div class="page-content">
		<div class="wizard-v2-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<h3>You Are Investing in Lorem Ipusm</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro magnam unde architecto
						quaerat! Voluptate cupiditate voluptatem vitae eum itaque excepturi ex dolores facilis
						debitis error ut consequuntur facere, repellat perferendis.</p>
				</div>

				<form class="form-register" action="#" method="post">
					<div id="form-total">
						<!-- SECTION 1 -->
						<h2>Invest Amount</h2>

						<section>
							<div class="inner inner-one">
								<h5 class="mb-5">How Much do you want to invest ?</h5>

								<div class="form-row">
									<div class="form-holder">
										<input type="text" placeholder="Enter Amount You Want to Invest" class="form-control" id="first_name">
									</div>
								</div>
								<div class="form-row">
									<span class="amounts">$25,000</span>
									<span class="amounts">$50,000</span>
								</div>
								<button class="continue text-uppercase mt-5 mb-2">Continue</button>
							</div>

						</section>
						<!-- SECTION 2 -->
						<h2>Docu Sign</h2>
						<section>
							<div class="inner">
								<p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa a mollitia possimus at praesentium quisquam cumque, ducimus repellat odio veniam tempore nostrum sunt reprehenderit nemo maiores ea! At mollitia nihil assumenda nulla vel ea minus sapiente neque cum, enim voluptas.</p>
								<p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa a mollitia possimus at praesentium quisquam cumque, ducimus repellat odio veniam tempore nostrum sunt reprehenderit nemo maiores ea! At mollitia nihil assumenda nulla vel ea minus sapiente neque cum, enim voluptas.</p>
								<p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa a mollitia possimus at praesentium quisquam cumque, ducimus repellat odio veniam tempore nostrum sunt reprehenderit nemo maiores ea! At mollitia nihil assumenda nulla vel ea minus sapiente neque cum, enim voluptas.</p>
								<p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa a mollitia possimus at praesentium quisquam cumque, ducimus repellat odio veniam tempore nostrum sunt reprehenderit nemo maiores ea! At mollitia nihil assumenda nulla vel ea minus sapiente neque cum, enim voluptas.</p>
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
						<!-- SECTION 3 -->
						<h2>Confirmation</h2>
						<section>
							<div class="inner">
								<h6>We have Submitted your request</h6>
								<p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ut modi omnis mollitia, quae libero dicta aliquam, quibusdam tenetur atque, deleniti unde minus aspernatur fugiat porro distinctio quidem blanditiis! Accusantium temporibus laboriosam dolore, similique accusamus, dolor id ipsam maiores necessitatibus ea, consequuntur a assumenda cupiditate obcaecati. Nemo, non minus facilis expedita aliquid quaerat molestias aperiam, quibusdam quisquam, explicabo est dignissimos?</p>
								<a href="OpportunitySoftCirclePending.html" class="btn btn-primary">Submit</a>
							</div>
						</section>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection
