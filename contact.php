<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Ug Hiphop Awards</title>
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Music World Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->	
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
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
<?php  include('head.php');?>
<!-- //header -->
<!-- banner -->
<div class="banner page-head">
</div>
<!-- //banner -->
<!-- contact -->
<div class="contact">
	<div class="container">
		<h3 class="tittle">VIEW ON MAP</h3>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
		</div>
		<div class="paragraph">
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
			Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. 
			Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus 
			et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.
			Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, 
			luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. 
			Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, 
			consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
			Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi
			et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
		</div>
		<div class="contact-form">
			<h3>CONTACT FORM</h3>
			<form>
				<input type="text" placeholder="Name" required>
				<input type="text" placeholder="Email" required>
				<input type="text" placeholder="Subject" required>
				<div class="clearfix"> </div>
				<textarea placeholder="Message" required></textarea>
				<input type="submit" value="SEND">
			</form>
		</div>
	</div>
</div>
<!-- //contact -->
<!-- footer -->
<?php  include('footer.php');?>
<!-- copy -->
<!-- smooth scrolling -->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->


<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>