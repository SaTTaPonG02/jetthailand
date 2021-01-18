<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('fontend.layouts.inc_header' )
    <input type="hidden" name="pageName" id="pageName" value="contact">
</head>

<body>
	<style>
		.viewbanner:hover {
			background-color: rgba(57, 93, 171, 0.8);
		}

		.viewbanner {
			background-color: #395dab;
			border-radius: 5px;
			padding: 20px 30px;
			-webkit-box-shadow: 0px 2px 7px 3px rgba(240, 240, 240, 0.5);
			-moz-box-shadow: 0px 2px 7px 3px rgba(240, 240, 240, 0.5);
			box-shadow: 0px 2px 7px 3px rgba(240, 240, 240, 0.5);
		}

		.bgblue {
			padding: 0%;
		}

		.file-input-wrapper .file-input-button {
			color: #383838;
			background-color: #dddddd;
			border-radius: 0px;
			box-sizing: border-box;
			width: 150px;
			height: 45px;
			display: inline;
			display: inline-block;
			font-size: 15px;
			font-weight: 400;
			padding-top: 10px;
			text-align: center;
			transition: color 500ms, background-color 500ms;
			-moz-transition: color 500ms, background-color 500ms;
			-webkit-transition: color 500ms, background-color 500ms;
			-o-transition: color 500ms, background-color 500ms;
			-ie-transition: color 500ms, background-color 500ms;
			margin-top: 10px;
		}

		.file-input-wrapper .file-input-button:hover {
			border: 1px solid #160e44;
			background-color: transparent;
			text-decoration: none;
			cursor: pointer;
			color: black;
		}

		.file-input-wrapper input {
			display: none;
		}

	</style>
	@include('fontend.layouts.inc_topmenu' )
	<div class="container-fluid nopad">
		<div class="row">
			<div class="col">
				<div class="bannertopcontact">
					<div class="wrapper_pad">
						<div class="pagination_each">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Contact</li>
								</ol>
							</nav>
						</div>
						<div class="bannertext">
							<div class="row">
								<div class="col">
									<h2>Contact us</h2>

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
					<div class="col-md-6">
						<div class="product_section">
							<div class="smalltext">
								contact info<div class="middleline"></div>
							</div>
							<h2> Japan electrical testing <br>
								laboratory (Thailand) Co., Ltd
							</h2>

						</div>
						<div class="contact_info_text">
							<span class="left_icon"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
									<path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
								</svg></span>
							<span class="right_text">46/171 Nuanchan Rd., Nuanchan Bungkum
								Bangkok 10230 Thailand</span>
							<br>
							<br>
							<span class="left_icon"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
								</svg></span>
							<span class="right_text">Tel : +662-363-7767 to 9</span>
							<br>
							<br>
							<span class="left_icon"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-printer" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 2H5a1 1 0 0 0-1 1v2H3V3a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h-1V3a1 1 0 0 0-1-1zm3 4H2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h1v1H2a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1z" />
									<path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM5 8a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H5z" />
									<path d="M3 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
								</svg></span>
							<span class="right_text">Fax : +662-363-7770</span>
							<br>
							<br>
							<span class="left_icon"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
								</svg></span>
							<span class="right_text">Email : customerservice@jetthailand.co.th

							</span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="bgwhite">
							<span class="dotsec2"><img src="{{ asset('public/assets/images/dot_texture.png') }}" class="img-fluid"></span>
							<div class="contact_form">
								<h2>Contact form</h2>
								<label>Company</label>
								<input type="text" class="form-control" placeholder="Type your company name">
								<label>Name-Surname</label>
								<input type="text" class="form-control" placeholder="Type your name and surname">
								<label>Tel</label>
								<input type="text" class="form-control" placeholder="Type your phone number">
								<label>Email</label>
								<input type="text" class="form-control" placeholder="Type your phone email">
								<label>Message</label>
								<textarea name="" id="" rows="5" placeholder="Type your message" class="form-control"></textarea>
<br>
								<div class="file-input-wrapper">
									<label for="upload-file" class="file-input-button">Attach File</label>
									<input id="upload-file" type="file" name="image" />
								</div>
								<div class="btn_contact mt-4">
									<a href="#" class="viewbanner">Submit <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#fff" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
										</svg></a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="googlemap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.082041411889!2d100.63370255075037!3d13.834111990246615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6291ee88b6bf%3A0xde88252582e4add7!2sJapan%20Electrical%20Testing%20Laboratory%20(Thailand)%20Co.%2C%20Ltd.!5e0!3m2!1sth!2sth!4v1601626452120!5m2!1sth!2sth" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>

	</div>


	@include('fontend.layouts.inc_footer' )


</body>

</html>
