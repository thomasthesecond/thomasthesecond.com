<?php

	require_once 'scripts/detect.php';

	$detect = new Mobile_Detect();
	$device = '';

	if ($detect->isMobile() && !$detect->isTablet()) $device = 'mobile';
	if ($detect->isTablet() && !$detect->isMobile()) $device = 'tablet';
	if (!$detect->isMobile() && !$detect->isTablet()) $device = 'desktop';

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

		<script src="js/libs/modernizr-2.6.1.min.js"></script>
		
		<!--[if (gte IE 6)&(lte IE 8)]>
			<script src="js/libs/selectivizr.js"></script>
		<![endif]-->

	</head>

	<body>

		<div class="container cf">

			<header id="header" class="container cf" role="banner">
				<div class="wrap cf">
					<h1 class="title left">Tom Cunningham / Web Designer + Developer</h1>
					<div class="legend right cf">
						<p class="cf">
							<span class="label left cf"><span class="ico design ir left"></span> <span class="left">Design</span></span>
							<span class="label left cf"><span class="ico dev ir left"></span> <span class="left">HTML / CSS / JS</span></span>
							<span class="label left cf"><span class="ico ee ir left"></span> <span class="left">ExpressionEngine</span></span>
						</p>
					</div><!-- .legend -->
				</div><!-- .wrap -->
			</header><!-- #header -->
			
			<div id="main" class="wrap cf" role="main">

				<div class="project website left">
					<img src="content/mini/arguson.jpg" alt="Arguson">
					<h4>Arguson</h4>
					<h5>Website</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico design ir left" title="Design">Design</span>
							<span class="ico dev ir left" title="Development">Development</span>
							<span class="ico ee ir left" title="ExpressionEngine">ExpressionEngine</span>
						</p><!-- .icons -->
					</div>
				</div><!-- .project -->
				
				<div class="project website left">
					<a href="http://paramore.is/astrocantus/"><img src="content/mini/astrocantus.jpg" alt="Astrocantus"></a>
					<h4>AstroCantus</h4>
					<h5>Landing Page</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico design ir left" title="Design">Design</span>
							<span class="ico dev ir left" title="Development">Development</span>
						</p><!-- .icons -->
					</div>
				</div><!-- .project -->
				
				<div class="project website left">
					<a href="http://bluegrasscellular.com/5k/"><img src="content/mini/bgc-5k.jpg" alt="Bluegrass Cellular fivek"></a>
					<h4>Bluegrass Cellular</h4>
					<h5>fivek Mini-site</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico dev ir left" title="Development">Development</span>
							<span class="ico ee ir left" title="ExpressionEngine">ExpressionEngine</span>
						</p><!-- .icons -->
					</div>
				</div><!-- .project -->
				
				<div class="project website left">
					<a href="http://bluegrasscellular.com/m/"><img src="content/mini/bgc-mobile.jpg" alt="Bluegrass Cellular Mobile Website"></a>
					<h4>Bluegrass Cellular</h4>
					<h5>Mobile Website</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico dev ir left" title="Development">Development</span>
							<span class="ico ee ir left" title="ExpressionEngine">ExpressionEngine</span>
						</p><!-- .icons -->
					</div>
				</div><!-- .project -->
				
				<div class="project website left">
					<a href="http://meetings.gatlinburg.com/"><img src="content/mini/gatlinburg-tourism.jpg" alt="Gatlinburg Department of Tourism"></a>
					<h4>Gatlinburg</h4>
					<h5>Meetings Website</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico dev ir left" title="Development">Development</span>
						</p><!-- .icons -->
					</div>
				</div><!-- .project -->
				
				<div class="project website left">
					<a href="http://golf.gatlinburg.com/"><img src="content/mini/gatlinburg-golf.jpg" alt="Gatlinburg Golf Course"></a>
					<h4>Gatlinburg</h4>
					<h5>Golf Course Website</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico design ir left" title="Design">Design</span>
						</p><!-- .icons -->
					</div>
				</div><!-- .project -->
				
				<div class="project website left">
					<img src="content/mini/mmc.jpg" alt="Meharry Medical College">
					<h4>Meharry Medical College</h4>
					<h5>Website</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico dev ir left" title="Development">Development</span>
						</p><!-- .icons -->
					</div>
				</div><!-- .project -->
				
				<div class="project screenshot left">
					<a href="content/screenshots/moreys-app.jpg"><img src="content/mini/moreys-app.jpg" alt="Morey's Piers"></a>
					<h4>Morey's Piers</h4>
					<h5>iOS Application</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico design ir left" title="Design">Design</span>
							<!-- <span class="ico in-progress left" title="In Progress"></span> -->
						</p><!-- .icons -->
						<p class="link right text-right cf">In Progress</p>
					</div>
				</div><!-- .project -->
				
				<div class="project website left">
					<a href="http://www.moreyspiers.com/m"><img src="content/mini/moreys-mobile.jpg" alt="Morey's Piers"></a>
					<h4>Morey's Piers</h4>
					<h5>Mobile Website</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico dev ir left" title="Development">Development</span>
							<span class="ico ee ir left" title="ExpressionEngine">ExpressionEngine</span>
						</p><!-- .icons -->
					</div>
				</div><!-- .project -->

				<div class="project website left">
					<a href="http://www.moreyspiers.com/"><img src="content/mini/moreys.jpg" alt="Morey's Piers"></a>
					<h4>Morey's Piers</h4>
					<h5>Website</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico dev ir left" title="Development">Development</span>
							<span class="ico ee ir left" title="ExpressionEngine">ExpressionEngine</span>
						</p><!-- .icons -->
					</div>
				</div><!-- .project -->
				
				<div class="project website left">
					<a href="http://paramore.is/m/"><img src="content/mini/paramore-mobile.jpg" alt="Paramore Mobile Website"></a>
					<h4>Paramore</h4>
					<h5>Mobile Website</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico dev ir left" title="Development">Development</span>
							<span class="ico ee ir left" title="ExpressionEngine">ExpressionEngine</span>
						</p><!-- .icons -->
					</div>
				</div><!-- .project -->
				
				<div class="project website left">
					<img src="content/mini/stites.jpg" alt="Stites &amp; Harbison">
					<h4>Stites &amp; Harbison</h4>
					<h5>Responsive Website</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico dev ir left" title="Development">Development</span>
							<span class="ico ee ir left" title="ExpressionEngine">ExpressionEngine</span>
							<!-- <span class="ico in-progress left" title="In Progress">In Progress</span> -->
						</p><!-- .icons -->
						<p class="link right text-right cf">In Progress</p>
					</div>
				</div><!-- .project -->
				
				<div class="project website left">
					<img src="content/mini/tbr.jpg" alt="Tennessee Board of Regents">
					<h4>Tennessee Board of Regents</h4>
					<h5>Responsive Website</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico dev ir left" title="Development">Development</span>
							<span class="ico ee ir left" title="ExpressionEngine">ExpressionEngine</span>
							<!-- <span class="ico in-progress left" title="In Progress">In Progress</span> -->
						</p><!-- .icons -->
						<p class="link right text-right cf">In Progress</p>
					</div>
				</div><!-- .project -->
				
				<div class="project website left">
					<a href="http://www.thegeneral.com/"><img src="content/mini/the-general.jpg" alt="The General"></a>
					<h4>The General</h4>
					<h5>Website</h5>
					<div class="cf">
						<p class="icons left cf">
							<span class="ico design ir left" title="Design">Design</span>
						</p><!-- .icons -->
					</div>
				</div><!-- .project -->				
				
			</div><!-- #main -->

			<footer id="footer" class="cf" role="contentinfo">
				
				<div class="wrap cf">
					
					<div class="about left cf">
						<h4>About</h4>
						<div class="cf">
							<p class="column left">
								I'm currently working at <a href="http://paramore.is/">Paramore</a>
								in Nashville as their Senior Creative Producer. I'm mainly focused on
								front-end (HTML, CSS, JavaScript) and ExpressionEngine development,
								but I also do a fair amount of design work.
							</p>
							<p class="column left">
								This site showcases some of my work over the past four years. I've
								been very lucky to have had the chance to work on some cool projects
								with some great people while learning a few things along the way.
							</p>
						</div>
						<p class="social">
							<a href="http://dribbble.com/thomasthesecond">Dribbble</a> &nbsp;/&nbsp;
							<a href="http://github.com/thomasthesecond">github</a> &nbsp;/&nbsp;
							<a href="http://linkedin.com/in/thomasthesecond">LinkedIn</a>
						</p>
						<p class="copyright">&#169; 2013</p>
					</div><!-- .about -->
					
					<div class="experience left">
						<h4>Experience</h4>
						<p>
							<small>2008 - Now &nbsp;/&nbsp; Senior Creative Producer</small><br>
							<strong>Paramore | the digital agency</strong> / Nashville, TN
						</p>
						<p>
							<small>2007 - 2008 &nbsp;/&nbsp; Web Developer</small><br>
							<strong>Zoltun Design</strong> / Pittsburgh, PA
						</p>
						<p>
							<small>2006 - 2007 &nbsp;/&nbsp; Web Developer/Intern</small><br>
							<strong>Informatics Studio</strong> / Pittsburgh, PA
						</p>
						<p>
							<small>2003 - 2006 &nbsp;/&nbsp; B.S. Interactive Media Design</small><br>
							<strong>The Art Institute of Pittsburgh</strong> / Pittsburgh, PA
						</p>
						<p class="copyright">&#169; 2013</p>
					</div><!-- .experience -->

				</div><!-- .wrap -->
				
			</footer><!-- #footer -->
			
		</div><!-- #container -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

		<script src="js/global.js"></script>

		<?php

			if ($device == 'mobile') {
				echo '<script src="js/mobile.helper.js"></script>';
				echo '<script>MBP.scaleFix(); MBP.hideUrlBar();</script>';
			}

		?>

		<script>
			var _gaq=[['_setAccount','UA-5167203-1'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>

	</body>

</html>