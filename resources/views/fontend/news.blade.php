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
									<h2>News & promotions</h2>

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
								update news & promotioms <div class="middleline"></div>
							</div>
							<h2> news & promotios
							</h2>

						</div>
					</div>
				</div>
				
				<div class="row">
					@foreach($news as $key => $value)
						<div class="col-md-6 col-lg-4">
							<div class="news_box">
								<img src="{{ asset('public/assets/images/news_images/'.$value->images_1.'') }}" alt="" class="img-fluid">
								<div class="news_boxcontent">
									<div class="btn_morenews">
										<a href="{{ url('fontend_news_detail/'.$value->id.'') }}" class="viewmorenews">Read more <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#395dab" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
											</svg></a>
									</div>
									<span class="tag_label">
										News
									</span>
									<h2>{{ $value->title_th }}</h2>
									<p>{{ $value->detail_th }} </p>
								</div>

							</div>
						</div>
					@endforeach
					
				</div>
				
				<div class="row">
					<div class="col">
						<div class="pagination_bott">
							<nav aria-label="Page navigation">
								<ul class="pagination">

									{{ $news->links() }}

								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>


	@include('fontend.layouts.inc_footer' )


</body>

</html>
