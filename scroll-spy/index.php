<!doctype html>
<html lang="en-US">

<head>
	<title>Webpage Title</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php include '_partial/head.php' ?>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<header>
		<?php include '_partial/header.php' ?>
	</header>
	<div class="clearfix"></div>
	<section class="slide-wrapper p-lr-none">
		<div class="slide-wrapper-c-top">
			<div id="myCarousel" class="carousel slide">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item item1 active">
						<div class="fill" style=" background-color:#48c3af;">
							<div class="inner-content">
								<div class="carousel-img">
									<img src="http://vocefalandoingles.com/wp-content/uploads/2016/09/sofa.png" alt="sofa" class="img img-responsive" />
								</div>
								<div class="carousel-desc">

									<h2>Modern Designer Sofa</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

								</div>
							</div>
						</div>
					</div>
					<div class="item item2">
						<div class="fill" style="background-color:#b33f4a;">
							<div class="inner-content">
								<div class="carousel-img">
									<img src="http://cdn.homedit.com/wp-content/uploads/2011/08/137CLUB2ST.png" alt="white-sofa" class="img img-responsive" />
								</div>
								<div class="carousel-desc">

									<h2>Vintage Style Sofa</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

								</div>
							</div>
						</div>
					</div>
					<div class="item item3">
						<div class="fill" style="background-color:#7fc2f4;">
							<div class="inner-content">
								<div class="col-md-6">

									<div class="carousel-img">
										<img src="http://vocefalandoingles.com/wp-content/uploads/2016/09/sofa.png" alt="sofa" class="img img-responsive" />
									</div>
								</div>

								<div class="col-md-6 text-left">
									<div class="carousel-desc">

										<h2>Stylish Sofa</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--
carausal ends
--><div class="clearfix"></div>
	<div id="aaa">
		<div id="section1" class="container-fluid">
			<h1>Section 1</h1>
			<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		</div>
		<div id="section2" class="container-fluid">
			<h1>Section 2</h1>
			<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		</div>
		<div id="section3" class="container-fluid">
			<h1>Section 3</h1>
			<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		</div>
		<div id="section41" class="container-fluid">
			<h1>Section 4 Submenu 1</h1>
			<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		</div>
		<div id="section42" class="container-fluid">
			<h1>Section 4 Submenu 2</h1>
			<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		</div>
	</div>
	<!--<section id="section-home1" class="container-fluid p-lr-none p-tb-md bg-f1f">
		Body code should be here
	</section>-->
	<div class="clearfix"></div>
	<footer>
		<?php include '_partial/footer.php' ?>
	</footer>
	<?php include '_partial/footer-scripts.php' ?>
</body>

</html>
