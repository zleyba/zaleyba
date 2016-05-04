<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="UTF-8">
		<?php require_once("../include-headtags.php"); ?>

		<!-- loads gallery support files-->
		<link rel="stylesheet" href="../css/swipebox.css">
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

				<!--contains jumbotron, uncomment to display-->
				<!--				<div class="parallax-window" data-parallax="scroll" data-image-src="...">-->
				<!--					<div class="jumbotron">-->
				<!--						<div class="container">-->
				<!--							<h1><em>Portfolio</em></h1>-->
				<!--							<p><em>Here is a sample of work from the recent past<br>-->
				<!--									and some of the projects that I still work on</em></p>-->
				<!--							<p><a class="btn btn-primary btn-lg" href="#" role="button">Contact Me Now</a></p>-->
				<!--						</div>-->
				<!--					</div>-->
				<!--				</div>-->

				<div class="container" id="box-container">

					<div class="row">

						<div class="col-xs-12 col-sm-6 col-lg-4 gallery">
							<a href="/public_html/img/img-1.jpg" class="swipebox" title="My Caption">
								<img src="/public_html/img/img-1.jpg" alt="image">
							</a>
						</div>

						<div class="col-xs-12 col-sm-6 col-lg-4 gallery">
							<a href="/public_html/img/img-2.jpg" class="swipebox" title="My Caption">
								<img src="/public_html/img/img-2.jpg" alt="image">
							</a>
						</div>

						<div class="col-xs-12 col-sm-6 col-lg-4 gallery">
							<a href="/public_html/img/img-3.jpg" class="swipebox" title="My Caption">
								<img src="/public_html/img/img-3.jpg" alt="image">
							</a>
						</div>

						<div class="col-xs-12 col-sm-6 col-lg-4 gallery">
							<a href="/public_html/img/img-4.jpg" class="swipebox" title="My Caption">
								<img src="/public_html/img/img-4.jpg" alt="image">
							</a>
						</div>

						<div class="col-xs-12 col-sm-6 col-lg-4 gallery">
							<a href="/public_html/img/img-5.jpg" class="swipebox" title="My Caption">
								<img src="/public_html/img/img-5.jpg" alt="image">
							</a>
						</div>

						<div class="col-xs-12 col-sm-6 col-lg-4 gallery">
							<a href="/public_html/img/img-6.jpg" class="swipebox" title="My Caption">
								<img src="/public_html/img/img-6.jpg" alt="image">
							</a>
						</div>

						<!-- comment back in for a bigger gallery-->
<!--						<div class="col-xs-12 col-sm-6 col-lg-4 gallery">-->
<!--							<a href="/public_html/img/img-7.jpg" class="swipebox" title="My Caption">-->
<!--								<img src="/public_html/img/img-7.jpg" alt="image">-->
<!--							</a>-->
<!--						</div>-->
<!---->
<!--						<div class="col-xs-12 col-sm-6 col-lg-4 gallery">-->
<!--							<a href="/public_html/img/img-8.jpg" class="swipebox" title="My Caption">-->
<!--								<img src="/public_html/img/img-8.jpg" alt="image">-->
<!--							</a>-->
<!--						</div>-->
<!---->
<!--						<div class="col-xs-12 col-sm-6 col-lg-4 gallery">-->
<!--							<a href="/public_html/img/img-9.jpg" class="swipebox" title="My Caption">-->
<!--								<img src="/public_html/img/img-9.jpg" alt="image">-->
<!--							</a>-->
<!--						</div>-->



					</div>

				</div>
			</main>
		</div>



		<?php include_once("../include-footer.php"); ?>

	</body>

</html>
