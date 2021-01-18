<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('fontend.layouts.inc_header' )
    <input type="hidden" name="pageName" id="pageName" value="product">
</head>

<body>

	@include('fontend.layouts.inc_topmenu' )
	<div class="container-fluid nopad">
		<div class="row">
			<div class="col">
				<div class="bannertopproduct">
					<div class="wrapper_pad">
						<div class="pagination_each">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ url('fontend_home') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Products</li>
								</ol>
							</nav>
						</div>
						<div class="bannertext">
							<div class="row">
								<div class="col">

									@foreach($product_category as $key => $value)
										<h2>{{ $value->title_en }}</h2>
									@endforeach

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bgblue">
			<div class="vextor_pic"><img src="images/vector_bg.png" alt="" class="img-fluid"></div>
			<span class="dotsec"><img src="images/dot_texture.png" class="img-fluid"></span>
			<div class="wrapper_pad">
				<div class="row">
					<div class="col">
						<div class="product_section">
							<div class="smalltext">
								our products <div class="middleline"></div>
							</div>
							
							@foreach($product_category as $key => $value)
								<h2>{{ $value->title_en }}</h2>
							@endforeach

						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-6">
						<div class="news_box">
							<div class="hoverstyle">
								<figure>
									<a href="product_inside.php">
										<img src="images/product_test.png" class="img-fluid">
									</a>
								</figure>
							</div>
							<div class="news_boxcontent">

								<span class="number_product">01</span>
								<h2>CB Scheme Application</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
							</div>
							<div class="">
								<a href="product_inside.php" class="viewdetail_next">View detail <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
									</svg></a>
							</div>
						</div>

					</div>
					<div class="col-6">
						<div class="news_box">
							<div class="hoverstyle">
								<figure>
									<a href="product_inside.php">
										<img src="images/product_test.png" class="img-fluid">
									</a>
								</figure>
							</div>
							<div class="news_boxcontent">

								<span class="number_product">02</span>
								<h2>CE-Mark for Europe Directive (LVD, EMF, MD)</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
							</div>
							<div class="">
								<a href="product_inside.php" class="viewdetail_next">View detail <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
									</svg></a>
							</div>

						</div>

					</div>
					<div class="col-6">
						<div class="news_box">
							<div class="hoverstyle">
								<figure>
									<a href="product_inside.php">
										<img src="images/product_test.png" class="img-fluid">
									</a>
								</figure>
							</div>
							<div class="news_boxcontent">

								<span class="number_product">03</span>
								<h2>S Mark Application</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
							</div>
							<div class="">
								<a href="product_inside.php" class="viewdetail_next">View detail <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
									</svg></a>
							</div>

						</div>

					</div>
					<div class="col-6">
						<div class="news_box">
							<div class="hoverstyle">
								<figure>
									<a href="product_inside.php">
										<img src="images/product_test.png" class="img-fluid">
									</a>
								</figure>
							</div>
							<div class="news_boxcontent">

								<span class="number_product">04</span>
								<h2>Middle East Application                                      </h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
							</div>
							<div class="">
								<a href="product_inside.php" class="viewdetail_next">View detail <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
									</svg></a>
							</div>

						</div>

					</div>
					<div class="col-6">
						<div class="news_box">
							<div class="hoverstyle">
								<figure>
									<a href="product_inside.php">
										<img src="images/product_test.png" class="img-fluid">
									</a>
								</figure>
							</div>
							<div class="news_boxcontent">

								<span class="number_product">05</span>
								<h2>TISI Application</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
							</div>
							<div class="">
								<a href="product_inside.php" class="viewdetail_next">View detail <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
									</svg></a>
							</div>

						</div>

					</div>
					<div class="col-6">
						<div class="news_box">
							<div class="hoverstyle">
								<figure>
									<a href="product_inside.php">
										<img src="images/product_test.png" class="img-fluid">
									</a>
								</figure>
							</div>
							<div class="news_boxcontent">

								<span class="number_product">06</span>
								<h2>Other Countries  </h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
							</div>
							<div class="">
								<a href="product_inside.php" class="viewdetail_next">View detail <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
									</svg></a>
							</div>

						</div>

					</div>

				</div>
			</div>

		</div>

	</div>


	@include('fontend.layouts.inc_footer' )


</body>

</html>
