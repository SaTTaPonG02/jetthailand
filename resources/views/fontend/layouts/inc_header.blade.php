<?php
	if(empty($_title)) 			$_title ='Japan Electrical Testing Laboratory';
	if(empty($_keywords)) 		$_keywords ='';
	if(empty($_description)) 	$_description ='';
?>
    <title>
        <?php echo $_title;?> 
    </title>
    <meta name="keywords" content="<?php echo $_keywords;?>" />
    <meta name="description" content="<?php echo $_description;?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="Brackets">
    <meta name='copyright' content='Orange Technology Solution co.,ltd.'>
    <meta name='designer' content='Netthakan O.'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/layout.css') }}"/>
    <link type="image/ico" rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/v4-shims.css">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/menu_nav.css') }}">


    
    <script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.12.0/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.12.0/js/v4-shims.js"></script>
    <script src="{{ asset('assets/OwlCarousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    
   
  <script>
  $(document).ready(function() {
   // Show or hide the sticky footer button
   $(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
     $('.go-top').fadeIn(300);
    } else {
     $('.go-top').fadeOut(300);
    }
   });

   // Animate the scroll to top
   $('.go-top').click(function(event) {
    event.preventDefault();

    $('html, body').animate({
     scrollTop: 0
    }, 800);
   })
  });

 </script>
 <a href="#" class="go-top">  <span><i class="fas fa-angle-up"></i></span> </a>