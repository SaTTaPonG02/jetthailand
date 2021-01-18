<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('fontend.layouts.inc_header' )
    <input type="hidden" name="pageName" id="pageName" value="index">
</head>

<body>
	@include('fontend.layouts.inc_topmenu' )

	<div class="container-fluid nopad">
		<div class="row">
			<div class="col">
				<div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
					<div class="bannertop owl-carousel owl-theme">

						@foreach($home_banner as $key => $value)
							<div class="item">
								<div class="banner_caption">
									<h1>{{ $value->title_th }}</h1>
									<p>{{ $value->detail_th }}</p>
									<a target="balck" href="{{ $value->link }}" class="viewbanner">Read more <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
										</svg></a>
									</div>
								<figure><img src="{{ asset('public/assets/images/home_images/'.$value->images_pc.'') }}"></figure>
							</div>
						@endforeach

					</div>
				</div>
				<div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
					<div class="bannertop owl-carousel owl-theme">

						@foreach($home_banner as $key => $value)
							<div class="item">
								<div class="banner_caption">
									<h1>{{ $value->title_th }}</h1>
									<p>{{ $value->detail_th }}</p>
									<a target="balck" href="{{ $value->link }}" class="viewbanner">Read more <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
										</svg></a>

								</div>
								<figure><img src="{{ asset('public/assets/images/home_images/'.$value->images_mb.'') }}"></figure>
							</div>
						@endforeach
					
				</div>
				</div>
			</div>
		</div>
		<div class="bgblue">
			<div class="vextor_pic"><img src="images/vector_bg.png" alt="" class="img-fluid"></div>
			<span class="dotsec"><img src="images/dot_texture.png" class="img-fluid"></span>
			<div class="wrapper_pad">
				<div class="row">
					<div class="col-md-6">
						<div class="product_section">
							<div class="smalltext">
								our product<div class="middleline"></div>
							</div>
							<h2> PRODUCT TESTING <br>
								& CERTIFICATION
							</h2>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product_select select-display-slide">
							<li class="active" rel="1">
								<a href="javascript:void(0)">
									TESTING & CERTIFICATION
								</a>
							</li><li rel="2">
								<a href="javascript:void(0)">
									Approval services
								</a>
							</li>
						</div>
					</div>
				</div>
				<div class="display-slide" rel="1" style="display:block;">
					<div class="row mt-5">
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<h5>TISI Testing
												Service
											</h5>
										</span> </div>
									<div class='img img1'></div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<div class="left_icon">
												<img src="images/" alt="">
											</div>

											<h5>CB Scheme <br>
												Testing Service

											</h5>
										</span> </div>
									<div class='img img2'></div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<div class="left_icon">
												<img src="images/" alt="">
											</div>

											<h5>Machinery <br>
												Directive Testing <br>
												Service
											</h5>
										</span> </div>
									<div class='img img3'></div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<div class="left_icon">
												<img src="images/" alt="">
											</div>

											<h5>Salt-Spray <br>
												Testing Service
											</h5>
										</span> </div>
									<div class='img img4'></div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<div class="left_icon">
												<img src="images/" alt="">
											</div>

											<h5>R&D and Other <br>
												Testing Services
											</h5>


										</span> </div>
									<div class='img img2'></div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<div class="left_icon">
												<img src="images/" alt="">
											</div>

											<h5>

												Plastic & <br>
												Insulating <br>
												Material <br>
												Flammability <br>
												Testing Service
											</h5>


										</span> </div>
									<div class='img img2'></div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="display-slide" rel="2">
					<div class="row mt-5">
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<h5>TISI Testing
												Service
											</h5>
										</span> </div>
									<div class='img img1'></div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<div class="left_icon">
												<img src="images/" alt="">
											</div>

											<h5>CB Scheme <br>
												Testing Service

											</h5>
										</span> </div>
									<div class='img img2'></div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<div class="left_icon">
												<img src="images/" alt="">
											</div>

											<h5>Machinery <br>
												Directive Testing <br>
												Service
											</h5>
										</span> </div>
									<div class='img img3'></div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<div class="left_icon">
												<img src="images/" alt="">
											</div>

											<h5>Salt-Spray <br>
												Testing Service
											</h5>


										</span> </div>
									<div class='img img4'></div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<div class="left_icon">
												<img src="images/" alt="">
											</div>

											<h5>R&D and Other <br>
												Testing Services
											</h5>


										</span> </div>
									<div class='img img2'></div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="single">
								<a href='#'>
									<div class="plusclass">
										<div class="row">
											<div class="col"> <span class="viewdetail">View detail</span> <span class="arr_rr"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></span></div>
										</div>
									</div>
									<div class='overlay'>
										<span>
											<div class="left_icon">
												<img src="images/" alt="">
											</div>

											<h5>

												Plastic & <br>
												Insulating <br>
												Material <br>
												Flammability <br>
												Testing Service
											</h5>


										</span> </div>
									<div class='img img2'></div>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="row no-gutters cropcontent">
				<span class="dotwhite"><img src="{{ asset('public/assets/images/dotwhite.png') }}" alt=""></span>
				<div class="col-md-7">
					<div class="left_content">
						<p><b class="text-uppercase">JETT's highly experienced</b> <i>personnel and our extensive
								network of collaborators and organizations ensure that product
								certification and global market access is feasible through a single
								contact window.</i></p>
					</div>
				</div>
				<div class="col-md-5">
					<div class="right_content">
						<img src="{{ asset('public/assets/images/section_blueright.png') }}" alt="">
					</div>
				</div>
			</div>
			<div class="position-relative">


				<div class="wrapper_pad">
					<div class="row">
						<div class="col-md-6">
							<div class="product_section">
								<div class="smalltext">
									our news & promotions <div class="middleline"></div>
								</div>
								<h2> Latest News & promotions
								</h2>
							</div>
						</div>
						<div class="col-md-6">

						</div>
					</div>
					<div class="row mt-5">
						<div class="col">
							<div class="news_slide owl-carousel owl-theme">
								<div class="item">
									<div class="news_box">
										<img src="images/news.png" alt="" class="img-fluid">
										<div class="news_boxcontent">
											<div class="btn_morenews">
												<a href="#" class="viewmorenews">Read more <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#395dab" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></a>
											</div>
											<span class="tag_label">
												News
											</span>
											<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
										</div>

									</div>
								</div>
								<div class="item">
									<div class="news_box">
										<img src="images/news.png" alt="" class="img-fluid">
										<div class="news_boxcontent">
											<div class="btn_morenews">
												<a href="#" class="viewmorenews">Read more <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#395dab" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></a>
											</div>
											<span class="tag_label">
												News
											</span>
											<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
										</div>

									</div>
								</div>
								<div class="item">
									<div class="news_box">
										<img src="images/news.png" alt="" class="img-fluid">
										<div class="news_boxcontent">
											<div class="btn_morenews">
												<a href="#" class="viewmorenews">Read more <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#395dab" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></a>
											</div>
											<span class="tag_label">
												News
											</span>
											<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
										</div>

									</div>
								</div>
								<div class="item">
									<div class="news_box">
										<img src="images/news.png" alt="" class="img-fluid">
										<div class="news_boxcontent">
											<div class="btn_morenews">
												<a href="#" class="viewmorenews">Read more <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#395dab" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
													</svg></a>
											</div>
											<span class="tag_label">
												News
											</span>
											<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
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


	@include('fontend.layouts.inc_footer' )

	<script>
		$(document).ready(function() {

			$('.bannertop').owlCarousel({
				margin: 20,
				loop: true,
				item: 1,
				autoplay: false,
				autoplayTimeout: 4000,
				autoplayHoverPause: false,
				smartSpeed: 2000,
				dots: true,
				responsive: {
					0: {
						items: 1,
						slideBy: 1,
						margin: 10,
						nav: false,

					},
					600: {
						items: 1,
						slideBy: 1,
						nav: false,

					},
					1024: {
						items: 1,
						slideBy: 1
					},
					1200: {
						items: 1,
						slideBy: 1
					}
				}
			})

			$('.news_slide').owlCarousel({
				loop: false,
				item: 2,
				margin: 20,
				autoplay: false,
				autoplayTimeout: 4000,
				autoplayHoverPause: false,
				smartSpeed: 2000,
				nav: true,
				dots: false,
				navText: ['<img src="images/arrow_left.png">', '<img src="images/arrow_right.png">'],
				navClass: ['owl-prev', 'owl-next'],
				responsive: {
					0: {
						items: 1,
						slideBy: 1,
						margin: 10,
						nav: false,
						stagePadding: 0,

					},
					600: {
						items: 2,
						slideBy: 1,
						nav: false,
						stagePadding: 0,

					},
					1024: {
						items: 3,
						slideBy: 1
					},
					1200: {
						items: 3,
						slideBy: 1
					}
				}
			})

		});

	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".select-display-slide > li").click(function() {
				var rel = $(this).attr("rel");
				console.log(rel);
				$('.display-slide').hide();
				$('.display-slide[rel=' + rel + ']').fadeIn();
				$(".select-display-slide > li").removeClass("active");
				$(this).addClass("active");
			});
		});

	</script>

</body>

</html>
