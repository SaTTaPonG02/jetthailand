<style>

	/* Menu Multi Dropdown */

	ul#mainmenu ul {
		visibility: hidden;
		position: absolute;
		left: 0;
		top: 100%;
		opacity: 0;
		-moz-transition: all 0.5s;
		-webkit-transition: opacity 0.5s;
		-o-transition: opacity 0.5s, visibility 0.5s;
		transition: opacity 0.5s;
	}

	ul#mainmenu li:hover>ul {
		visibility: visible;
		opacity: 1;
		background-color: white;
		border: 1px solid #eeeeee;
		padding: 10px !important;
	}

	ul#mainmenu li {
		position: relative;
		display: block;
		white-space: nowrap;
		float: left;
	}


	ul#mainmenu li:hover a {
		z-index: 1;
		color: #fff;

	}

	ul#mainmenu li.menutop:hover a {
		color: #fff;
	}

	ul#mainmenu ul ul {
		position: absolute;
		left: 100%;
		top: 0;
	}

	ul#mainmenu {
		z-index: 999;
		position: relative;
		display: inline-block;
		padding: 0;
	}

	* html ul#mainmenu li a {
		display: inline-block;
	}

	ul#mainmenu ul a {
		padding: 5px 15px;
		/*		background-color: white;*/
		text-decoration: none;
		font-size: 0.8em;
	}



	ul#mainmenu li.menutop>a {
		-moz-transition: all 0.5s;
		-webkit-transition: all 0.5s;
		-o-transition: all 0.5s;
		color: #383838;
	}


	.dropdownmain li {
		position: relative !important;
		display: block !important;
		padding: 0px !important;
		float: none !important;
		text-align: left;
		line-height: 40px;
	}

	.dropdownmain li a {
		color: #000 !important;
	}

	.dropdownmain li a:hover {
		color: #fff !important;
	}

	.modal.right .modal-dialog {
		position: fixed;
		margin: auto;
		width: 420px;
		height: 100%;
		-webkit-transform: translate3d(0%, 0, 0);
		-ms-transform: translate3d(0%, 0, 0);
		-o-transform: translate3d(0%, 0, 0);
		transform: translate3d(0%, 0, 0);


	}

	.modal.right .modal-content {
		height: 100%;
		overflow-y: auto;
	}

	.modal.right .modal-body {
		padding: 15px 15px 80px;
	}

	.modal-backdrop {
		z-index: 0;
	}

	.modal-header .close {
		margin: -14px;
	}

	.close {
		text-shadow: none;
		opacity: 1;
	}

	/*Right*/

	.modal.right.fade .modal-dialog {
		right: -320px;
		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
		-moz-transition: opacity 0.3s linear, right 0.3s ease-out;
		-o-transition: opacity 0.3s linear, right 0.3s ease-out;
		transition: opacity 0.3s linear, right 0.3s ease-out;

	}

	.modal.right.fade.show .modal-dialog {
		right: 0;
	}

	/* ----- MODAL STYLE ----- */
	.modal-content {
		border-radius: 0; 
		border: none;
	}


	@media (max-width: 1199px) {
		ul#mainmenu li:hover>ul {
			margin-left: -84px !important;
		}
	}

		@media (max-width:991px) {

			.modal.right .modal-dialog {
				width: 320px;
			}

		}

</style>
<div class="topbg">
	<div class="container-fluid">
		<div class="wrapper_pad">
			<div class="row">
				<div class="col-12 col-md-5">
					<div class="tel_top d-none d-sm-none d-md-block d-lg-block d-xl-block">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="#fff" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
						</svg> <a href="tel:662-363-7767">Phone : +662-363-7767 to 9</a>
					</div>

				</div>
				<div class="col-12 col-md-7">
					<div class="topmenu_social">
						<ul>
<!--
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
-->
							<li>
								<div class="changelang">
									<div class="dropdown">
										<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<img src="{{ asset('public/assets/images/thailand.svg') }}" alt="" class="flag_1"> EN <svg width="0.8em" height="0.8em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
											</svg>
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#"><img src="{{ asset('public/assets/images/thailand.svg') }}" alt="" class="flag_1"> ไทย</a>
											<a class="dropdown-item" href="#"><img src="{{ asset('public/assets/images/united-kingdom.svg') }}" alt="" class="flag_1"> English</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>
<div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
	<div class="container-fluid">
		<div class="wrapper_pad">
			<div class="row">
				<div class="col-md-3">
					<div class="logo">
						<a href="{{ url('fontend_home') }}"><img src="{{ asset('public/assets/images/logo.png') }}" class="img-fluid"></a>
						<p> Japan electrical testing laboratory (Thailand) Co., Ltd</p>
					</div>
				</div>
				<div class="col-md-9">
					<div class="mainmenu">
						<nav>
							<ul class='menutop' id='mainmenu'>
								<li data-page="index"><a href="{{ url('fontend_home') }}">Home</a></li>
								<li data-page="abt"><a href="{{ url('fontend_about') }}">About</a></li>
								<li class='menutop'><a href='#'>Products</a>
									<ul class="dropdownmain">
										@foreach($product_category as $key => $value)
										<li><a href="{{ url('fontend_product/'.$value->id.'') }}">{{ $value->title_en }}</a></li>
										@endforeach
										
									</ul>
								</li>
								<li data-page="news" class='menutop'><a href="{{ url('fontend_news') }}">News & Promotions</a>
								<ul class="dropdownmain">
										
										<li><a href="{{ url('fontend_news') }}">News</a></li>
										<li><a href="#">Promotions</a></li>
									
										
									</ul>
								
								</li>
								<li data-page="contact"><a href="{{ url('fontend_contact') }}">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="linemiddle"></div>
</div>


<div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">

	<div class="container-fluid nopad">

		<div class="wrapper_pad">

			<div class="row">
				<div class="col-6">
					<div class="mainlog">
						<img src="{{ asset('public/assets/images/logo.png') }}" alt="" class="img-fluid">
					</div>
					
				</div>

				<div class="col-6">
					<div data-toggle="modal" data-target="#myModal2" class="menumobileslide">
						<img src="{{ asset('public/assets/images/icon_menu.png') }}" class="img_s">
					</div>

					<!-- Modal -->
					<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<div class="modal-title" id="myModalLabel"><img src="{{ asset('public/assets/images/logo.png') }}" style="width: 70px; margin-top: -10px;"></div>
								</div>

								<div class="modal-body" style="padding:0px;">
									<div id="menu" class="">
										<div class="menu-box">
											<div class="menu-wrapper-inner">
												<div class="menu-wrapper">
													<div class="menu-slider">
														<div class="menu">
															<ul>
																<li>
																	<div class="menu-item"><a href="{{ url('fontend_home') }}" class="">Home</a></div>
																</li>
																<li>
																	<div class="menu-item"><a href="{{ url('fontend_about') }}" class="">About</a></div>
																</li>
																<li>
																	<div class="menu-item"><a href="#" class="menu-anchor" data-menu="1">Products</a>
																		<span class="detail">
																			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																				<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
																			</svg>
																		</span>
																	</div>
																</li>
																<li>
																	<div class="menu-item"><a href="{{ url('fontend_news') }}" class="">News & Promotions</a></div>
																</li>
																<li>
																	<div class="menu-item"><a href="{{ url('fontend_contact') }}" class="">Contact</a></div>
																</li>



															</ul>
														</div>
														<div class="submenu menu" data-menu="1">
															<div class="submenu-back">
																<div class="menu-item">
																	<span class="detail back">
																		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																			<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
																		</svg>
																	</span>
																	<a href="#" class="menu-back">Products</a></div>
															</div>
															<ul>
																<li>
																	<div class="menu-item"><a href="product.php">Performance & Efficiency Testing Services</a></div>
																</li>
																<li>
																	<div class="menu-item"><a href="product.php">Safety Testing Services (Household, Commercial and Industrial products)</a></div>
																</li>
																<li>
																	<div class="menu-item"><a href="product.php">Insulation Material & Flammability Testing Services</a></div>
																</li>
																<li>
																	<div class="menu-item"><a href="product.php">Salt Spray Testing Services</a></div>
																</li>
																<li>
																	<div class="menu-item"><a href="product.php">Training Services</a></div>
																</li>
																<li>
																	<div class="menu-item"><a href="product.php">R&D and Other Testing Services</a></div>
																</li>
																<li>
																	<div class="menu-item"><a href="product.php">Approval Services</a></div>
																</li>

															</ul>
														</div>

														<div class="clear"></div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>

							</div><!-- modal-content -->
						</div><!-- modal-dialog -->
					</div><!-- modal -->


				</div>

			</div>
			<div class="row logo">
				<div class="col">
					<p> Japan electrical testing laboratory</p>
				</div>
			</div>

		</div>
	</div>
</div>




<script>
	$(function() {
		var getPage = document.getElementById('pageName').value;
		$(".mainmenu li, menutop li").each(function() {
			var getMenu = $(this).attr("data-page");
			if (getPage == getMenu) {
				$(this).addClass('active');
			}
		});
	});

</script>

<script>
	var menu_width;

	jQuery(document).ready(
		function() {

			initMenu();

		});

	function initMenu() {
		menu_width = $("#menu .menu").width();

		$(".menu-back").click(function() {

			var _pos = $(".menu-slider").position().left + menu_width;
			var _obj = $(this).closest(".submenu");

			$(".menu-slider").stop().animate({
				left: _pos
			}, 300, function() {
				_obj.hide();
			});

			return false;
		});

		$(".menu-anchor").click(function() {
			var _d = $(this).data('menu');
			$(".submenu").each(function() {

				var _d_check = $(this).data('menu');

				if (_d_check == _d) {
					$(this).show();
					var _pos = $(".menu-slider").position().left - menu_width;

					$(".menu-slider").stop(true, true).animate({
						left: _pos
					}, 300);
					return false;
				}
			});

			return false;
		});

	}

</script>
