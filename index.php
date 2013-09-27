<?php

	// require_once 'scripts/detect.php';

	// $detect = new Mobile_Detect();
	// $device = '';

	// if ($detect->isMobile() && !$detect->isTablet()) $device = 'mobile';
	// if ($detect->isTablet() && !$detect->isMobile()) $device = 'tablet';
	// if (!$detect->isMobile() && !$detect->isTablet()) $device = 'desktop';

?>

<!doctype html>

<html class="no-js" lang="en">

	<head>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Tom Cunningham / Web Designer + Developer</title>
		
		<meta name="author" content="humans.txt">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="all">
		
		<?php

			if ($device == 'mobile') {
				echo '<meta name="HandheldFriendly" content="True">';
				echo '<meta name="MobileOptimized" content="320">';
			}

		?>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">
		<link rel="stylesheet" href="css/global.css">
		<style type="text/css" media="screen">
			body{ margin: 1em 0; }
			h1{ font-size: 3em; }
			p{ color: #aaa; font-size: 1.3em; margin-top: 1em; }
		</style>

		<script src="js/libs/modernizr-2.6.1.min.js"></script>
		
		<!--[if (gte IE 6)&(lte IE 8)]>
			<script src="js/libs/selectivizr.js"></script>
		<![endif]-->

	</head>

	<body>

		<div class="container cf">

			<div id="main" class="wrap cf" role="main">

				<h1 class="text-center hidden">thomasthesecond.com</h1>

				<p class="text-center">
					I work at <a href="http://paramore.is/">Paramore</a> in Nashville.
				</p>

				<p class="text-center">
					Look me up on <a href="http://dribbble.com/thomasthesecond">Dribbble</a> or <a href="https://github.com/thomasthesecond">github</a>.
				</p>

				<p class="text-center">
					I also exist IRL.
				</p>
				
			</div><!-- #main -->

		</div><!-- #container -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

		<?php

			// if ($device == 'mobile') {
			// 	echo '<script src="js/mobile.helper.js"></script>';
			// 	echo '<script>MBP.scaleFix(); MBP.hideUrlBar();</script>';
			// }

		?>

		<script>
			var _gaq=[['_setAccount','UA-5167203-1'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>

	</body>

</html>