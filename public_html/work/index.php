<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="UTF-8">
		<?php require_once("../include-headtags.php"); ?>


		<!-- loads gallery support files-->
		<link rel="stylesheet" href="/public_html/css/swipebox.css">
		<script src="../lib/jquery-2.1.0.min.js"></script>
		<script src="../js/jquery.swipebox.js"></script>

		<script type="text/javascript">
			;( function( $ ) {

				$( '.swipebox' ).swipebox();

			} )( jQuery );
		</script>
		<!--end gallery support-->


		<!--Navbar Transformation script-->
		<script type="text/javascript" src="../js/navtransform.js"></script>
		<!--end navbar scripts-->



		<!--main style sheet-->
		<link rel="stylesheet" href="../css/style.css" />


		<title>ZA.LEYBA - DIGITAL COMMUNICATIONS</title>

	</head>

	<body class="sfooter">
		<div class="sfooter-content">

			<?php require_once("../include-header.php"); ?>


			<main>
				<div class="parallax-window" data-parallax="scroll" data-image-src="../img/workbanner.jpg">
					<div class="jumbotron">
						<div class="container">
							<h1><em>Portfolio</em></h1>
							<p><em>Here is a sample of work from the recent past<br>
									and some of the projects that I still work on</em></p>
<!--							<p><a class="btn btn-primary btn-lg" href="#" role="button">Contact Me Now</a></p>-->
						</div>
					</div>
				</div>
				<div class="container" id="box-container">

					<h2>Web Development</h2>
					<div class="row webport">

						<div class="clearfix">

							<div class="col-sm-6 col-md-4">
								<div class="thumbnail">
									<img src="../img/kellehfishscreen.png" alt="Kellehfish.net">
									<div class="caption">
										<h3><a href="http://kellehfish.net">KellehFish.net</a></h3>
										<p>
										<ul>
											<li>Personal website of artist/illustrator/graphic designer Kelly Williams.</li>
											<li>My first completed website.</li>
											<li>Designed as a minimalist approach to showing Kelly's work.</li>
											<li>Utilizes HTML, CSS, Java Script(AngularJS and jQuery), and Bootstrap. </li>
											<li>Fully responsive and mobile ready.</li>

										</ul>
										</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="../img/zleybascreen.png" alt="ZachLeyba.com">
								<div class="caption">
									<h3>ZachLeyba.com</h3>
									<p>
									<ul>
										<li>My personal website.</li>
										<li>The one you're on right now!</li>
										<li>A modified version of KellehFish.net.</li>
										<li>This site builds upon my experience with jQuery and Bootstrap.</li>


										</ul>
									</p>
								</div>
							</div>
						</div>



							<div class="col-sm-6 col-md-4">
								<div class="thumbnail">
									<img src="../img/nmismscreen.jpg" alt="NMism.com Mockup">
									<div class="caption">
										<h3>NMism.com (WIP)</h3>
										<p>
										<ul>
											<li>Home on the web for New Mexico's Premier Fighting Game Community.</li>
											<li>From scratch WordPress Theme build.</li>
											<li>Designed from the ground up for the unique needs of the New Mexican Fighting Game Community.</li>


										</ul>
										</p>
									</div>
								</div>
							</div>


						</div>
						</div>

					<h2>Social Media/Community Management</h2>
					<div class="row socialport">
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="../img/nmism.svg" alt="NMism">
								<div class="caption">
									<h3>NMism</h3>
									<p>
									<ul>
										<li>Community manager since 2012.</li>
										<li>Social Media Consultant and provider of live coverage for Art of Fighting charity event.</li>
										<li>Oversaw Facebook ad campaign that helped to raise recent tournament attendance by 30%.</li>
										<li>A playful group that has allowed for a lot of experimentation as a community and PR manager.</li>


									</ul>
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="../img/unm.png" alt="UNM">
								<div class="caption">
									<h3>University of New Mexico</h3>
									<p>
									<ul>
										<li>Student Social Media Manager on all insitutional accounts (FB, twitter, Instagram, SnapChat, tumblr, etc.) from 2013-2016.</li>
										<li>Facilitated communications and collaborations with UNM stakeholders (departments, student groups, etc.) to grant access to UNM's institutional social media audiences.</li>
										<li>Contributed to the student blogging platform <a href="ThePack.unm.edu">The Pack.</a></li>
										<li>Oversaw nearly 300% audience growth for Instagram and over 30% growth on Twitter and Facebook. </li>


									</ul>
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="../img/gascreen.png" alt="Gamers Anonymous">
								<div class="caption">
									<h3>Gamers Anonymous</h3>
									<p>
									<ul>
										<li>Gamers Anonymous is NM's finest gaming reseller.</li>
										<li>Created a brief 10+ page report detailing some ways they may be able to improve their content.</li>
										<li>Provided a break down of each social network and a SWOT analysis for each.</li>
										<li>See a sample of this report <a href="../img/GAStrategySample.pdf">here</a>.</li>



									</ul>
									</p>
								</div>
							</div>
						</div>



					</div>
				</div>
			</main>
		</div>



		<?php include_once("../include-footer.php"); ?>

	</body>

</html>