<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="UTF-8">
		<?php require_once("../include-headtags.php"); ?>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Didot' rel='stylesheet' type='text/css'>

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

		<!--Nav bar Scripts-->

		<!--Navbar Transformation script-->
		<script type="text/javascript" src="../js/navtransform.js"></script>




		<!--main style sheet-->
		<link rel="stylesheet" href="../css/style.css" />

		<title>ZA.LEYBA - DIGITAL COMMUNICATIONS</title>

	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<?php require_once("../include-header.php"); ?>


			<main>
				<div class="jumbotron workbanner">
					<div class="container">
						<h1><em>Portfolio</em></h1>
						<p><em>Here is a sample of work from the recent past<br>
								and some of the projects that I still work on</em></p>
						<p><a class="btn btn-primary btn-lg" href="#" role="button">Contact Me Now</a></p>
					</div>
				</div>

				<div class="container" id="box-container">

					<div class="row">
						<div class="clearfix">
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="../img/nmismscreen.jpg" alt="NMism.com Mockup">
								<div class="caption">
									<h3>NMism.com (WIP)</h3>
									<p>
									<ul>
										<li>New Mexican Fighting Game Community </li>
										<li>From scratch WordPress Theme build </li>
										<li>Designed from the ground up for the</li>


										</ul>
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="../img/kellehfishscreen.png" alt="NMism.com Mockup">
								<div class="caption">
									<h3>KellehFish.net</h3>
									<p>
										<ul>
											<li>Personal website of artist/illustrator/graphic designer Kelly Williams</li>
											<li>First completed website</li>
											<li>Designed as a minimalist approach to showing Kelly's work</li>

									</ul>
									</p>
								</div>
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