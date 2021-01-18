<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php');  $pageName="product";?>
</head>

<body>

	<?php require('inc_topmenu.php'); ?>
	<div class="container-fluid nopad">
		<div class="row">
			<div class="col">
				<div class="bannertopproduct">
					<div class="wrapper_pad">
						<div class="pagination_each">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Products</li>
								</ol>
							</nav>
						</div>
						<div class="bannertext">
							<div class="row">
								<div class="col">
									<h2>Performance & Efficiency Testing Services</h2>

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
					<div class="col-md-12 col-lg-6">
						<div class="product_section">
							<div class="smalltext">
								our products <div class="middleline"></div>
							</div>
							<h2>Air-conditional</h2>

						</div>
					</div>
					<div class="col-md-12 col-lg-6">
					<div class="menu_scroll">
						<div class="product_select_inside select-display-slide">
							<li class="active" rel="1">
								<a href="javascript:void(0)">
									EGAT (Number 5)
								</a>
							</li>
							<li rel="2">
								<a href="javascript:void(0)">
									Refrigerator
								</a>
							</li>
						</div>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col">
						<div class="display-slide" rel="1" style="display:block;">
							<div class="row">
								<div class="col-md-6">
									<div class="product_slide owl-carousel owl-theme">
										<div class="item">
											<img src="images/product_test.png" alt="" class="img-fluid">
										</div>
										<div class="item">
											<img src="images/product_test.png" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="product_content">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
										<br><br>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
									</div>

								</div>
							</div>
						</div>
						<div class="display-slide" rel="2">
							<div class="row">
								<div class="col-md-6">
									<div class="product_slide owl-carousel owl-theme">
										<div class="item">
											<img src="images/product_test.png" alt="" class="img-fluid">
										</div>
										<div class="item">
											<img src="images/product_test.png" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="product_content">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
										<br><br>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>


	<?php require('inc_footer.php'); ?>

	<script>
		$(document).ready(function() {

			$('.product_slide').owlCarousel({
				loop: false,
				item: 1,
				margin: 20,
				smartSpeed: 2000,
				nav: true,
				dots: false,
				navText: ['<img src="images/ar_left.png">', '<img src="images/ar_right.png">'],
				navClass: ['owl-prev', 'owl-next'],
				responsive: {
					0: {
						items: 1,
						slideBy: 1,
						margin: 10,

					},
					600: {
						items: 1,
						slideBy: 1,

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
