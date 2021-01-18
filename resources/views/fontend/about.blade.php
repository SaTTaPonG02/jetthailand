<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('fontend.layouts.inc_header' )
    <input type="hidden" name="pageName" id="pageName" value="abt">

</head>

<body>

	@include('fontend.layouts.inc_topmenu' )
	<div class="container-fluid nopad">
		<div class="row">
			<div class="col">
				<div class="bannertopabt">
					<div class="wrapper_pad">
						<div class="pagination_each">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ url('fontend_home') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">About</li>
								</ol>
							</nav>
						</div>
						<div class="bannertext">
							<div class="row">
								<div class="col">
									<h2>About us</h2>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bgblue">
			<div class="vextor_pic"><img src="{{ asset('public/assets/images/vector_bg.png') }}" alt="" class="img-fluid"></div>
			<div class="wrapper_pad">
				<div class="row">
					<div class="col">
						<div class="product_section">
							<div class="smalltext">
								about us <div class="middleline"></div>
							</div>
							<h2>Japan electrical testing laboratory
							</h2>
							<p class="whitetxt">Japan Electrical Testing Laboratory (Thailand) Co., Ltd <br>
								established in 2016 - is a "One-Stop Service Company" providing product testing and certification services that help streamline <br>
								your access to markets in Thailand and around the world.
								<br><br>
								In our chemical and electro-technical testing laboratories, we evaluate and analyze your products for compliance with the applicable market
								requirements and regulations.
							</p>

						</div>
					</div>
				</div>
			</div>
			<div class="abt_sectiom mt-5">
				<div class="wrapper_pad">
					<div class="row">
						<div class="col">
							<h5 class="whitetxt">
								JETT's highly experienced personnel and our extensive network of collaborators and organizations ensure
								that product certification and global market access is feasible through a single contact window.
							</h5>
						</div>
					</div>
				</div>

			</div>

		</div>
		<div class="bgbotabt">
			<div class="wrapper_pad">
				<div class="row">
					<div class="col-md-6">
						<p class="whitetxt">
							Japan Electrical Testing Laboratory (Thailand) Co., Ltd 
							established in 2016 - is a "One-Stop Service Company" providing product testing and certification services that help streamline 
							your access to markets in Thailand and around the world.
							<br><br>
							In our chemical and electro-technical testing laboratories, we evaluate and analyze your products for compliance with the applicable market
							requirements and regulations. 

						</p>
					</div>
					<div class="col-md-6">
						<div class="side_abtpic">
							<img src="{{ asset('public/assets/images/about_pic.png') }}" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


	@include('fontend.layouts.inc_footer' )


</body>

</html>
