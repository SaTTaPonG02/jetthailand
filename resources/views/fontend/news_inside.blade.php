<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('fontend.layouts.inc_header' )
    <input type="hidden" name="pageName" id="pageName" value="news">
</head>

<body>

	@include('fontend.layouts.inc_topmenu' )
	<div class="container-fluid nopad">
		<div class="row">
			<div class="col">
				<div class="bannertopnews">
					<div class="wrapper_pad">
						<div class="pagination_each">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ url('fontend_home') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">News & promotions</li>
								</ol>
							</nav>
						</div>
						<div class="bannertext">
							<div class="row">
								<div class="col">
									<h2>{{ $news->title_th }}</h2>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bgblue">
			<div class="vextor_pic"><img src="images/vector_bg.png" alt="" class="img-fluid"></div>
			<div class="wrapper_pad">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-12 col-md-6">
								<span class="tag_label">
									News
								</span>
							</div>
							<div class="col-12 col-md-6">
								<div class="datetime">
									{{ date('d/m/Y', strtotime($news->datetime)) }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="news_box">
									<h2>{{ $news->title_th }}</h2>

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="borderbott"></div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col">
								<div class="news_box">
								<img src="{{ asset('public/assets/images/news_images/'.$news->images_2.'') }}" alt="" class="img-fluid">
								<br><br>
									<p>{{ $news->detail_th }}</p>
									<a target="black" href="{{ asset('public/assets/images/news_images/'.$news->file_download.'') }}" class="btn pdf_file"><i class="fas fa-file-pdf" style="font-size:1.2em;"></i> Download File</a>
								</div>
							</div>
						</div>
						{{-- <div class="row mb-3 mt-3">
							<div class="col-6 col-md-6"><a href="#" class="btn btn-primary">Prev</a></div>
							<div class="col-6 col-md-6 text-right"><a href="#" class="btn btn-primary">Next</a></div>
						</div> --}}


					</div>
				</div>

			</div>

		</div>

	</div>


	@include('fontend.layouts.inc_footer' )


</body>

</html>
