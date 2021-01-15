@extends('layouts.app')

@section('title', 'Opprotunity NDA Form')

@section('style-num')
    <link rel="stylesheet" href="{{asset('site/wizard/css/style-one.css')}}" />
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

				<form class="form-register" action="" method="post">
					<div id="form-total">
						<!-- SECTION 1 -->
						<h2 >Deal Name</h2>

						<section>
							<div class="inner">
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae necessitatibus
									labore nisi dignissimos iusto laborum totam autem quas accusamus, ea vel eligendi
									vero repudiandae eius porro? Ab ipsum qui tempora dolor sapiente a doloremque cumque
									quo rem delectus sint voluptas distinr molestiae reprehenderit placeat aperiam </p>

								<p><i class="fa fa-angle-right hint"></i> Lorem ipsum, dolor sit amet consectetur
									adipisicing elit. Atque, aut.</p>
								<p><i class="fa fa-angle-right hint"></i> Lorem ipsum, dolor sit amet consectetur
									adipisicing elit. Atque, aut.</p>
								<p><i class="fa fa-angle-right hint"></i> Lorem ipsum, dolor sit amet consectetur
									adipisicing elit. Atque, aut.</p>
								<div class="form-row">
									<div class="form-holder">
										<input type="text" placeholder="Name" class="form-control"
											id="first_name">
									</div>
									<div class="form-holder">
										<textarea class="form-control" name="" id="" cols="30" rows="5">Address</textarea>
									</div>
								</div>
								<div class="form-row">

									<div class="form-holder">
										<select name="" id="time" class="first-select form-control">
											<option value="7:00am - 18:00pm" selected>Select Occuption</option>
											<option value="9:00am - 21:00pm">9:00am - 21:00pm</option>
											<option value="10:00am - 22:00pm">10:00am - 22:00pm</option>
											<option value="12:00am - 24:00pm">12:00am - 24:00pm</option>
										</select>
									</div>
								</div>
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
								<p class="my-3">Lorem can color set Ammet consectetur adipisicing elit. Vel ut modi omnis mollitia, quae libero dicta aliquam, quibusdam tenetur atque, deleniti unde minus aspernatur fugiat porro distinctio quidem blanditiis! Accusantium temporibus laboriosam dolore, similique accusamus, dolor id ipsam maiores necessitatibus ea, consequuntur a assumenda cupiditate obcaecati. Nemo, non minus facilis expedita aliquid quaerat molestias aperiam, quibusdam quisquam, explicabo est dignissimos?</p>
								<a href="OpportunityFull.html" class="btn btn-primary">Done</a>
							</div>
						</section>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection
