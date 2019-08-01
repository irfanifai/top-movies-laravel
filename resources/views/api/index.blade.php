<!--
author: W3layouts
author URL: http://w3com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ config('app.name', 'Top-Movies') }} - Simple Web REST API</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="Responsive Web Movies, Bootstrap Web Movies" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ asset('assets/one-movies/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/one-movies/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('assets/one-movies/css/contactstyle.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('assets/one-movies/css/faqstyle.css') }}" type="text/css" media="all" />
<link href="{{ asset('assets/one-movies/css/single.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('assets/one-movies/css/medile.css') }}" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="{{ asset('assets/one-movies/css/jquery.slidey.min.css') }}" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="{{ asset('assets/one-movies/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ asset('assets/one-movies/css/font-awesome.min.css') }}" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="{{ asset('assets/one-movies/js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="{{ asset('assets/one-movies/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all">
<script src="{{ asset('assets/one-movies/js/owl.carousel.js') }}"></script>
<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({

		  autoPlay: 3000, //Set AutoPlay to 3 seconds

		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]

		});

	});
</script>
<!-- //banner-bottom-plugin -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('assets/one-movies/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/one-movies/js/easing.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
	<div class="header">
		@include('auth.login')
	</div>
<!-- //header -->

<!-- nav -->
	<div class="movies_nav">
		@include('api.partials._navbar')
	</div>
<!-- //nav -->

<!-- general -->
	<div class="general">
		@include('api.partials._general')
	</div>
<!-- //general -->

<!-- footer -->
	<div class="footer">
		@include('api.partials._footer')
	</div>
<!-- //footer -->

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('assets/one-movies/js/bootstrap.min.js') }}"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>

