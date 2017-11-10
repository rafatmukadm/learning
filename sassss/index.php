<!doctype html>
<html lang="en-US">

<head>
	<title> sass-learning</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="google-site-verification" content="JMMe4tK2fuIQxy8ug_SjNfoo6wr_LlYSJvWbuVuGdbM" />
	<?php include '_partial/head.php' ?>
	<meta name="google-site-verification" content="SiBXUIaPNDqeoRdSwUMspj7U1pG21tYsV-0JtCFtXZQ" />
	
</head>

<body>
	<header>
		<?php include '_partial/header.php' ?>
	</header>
	<div class="clearfix"></div>
	
	<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/a2.jpg" alt="Los Angeles" width="100%">
    </div>
    <div class="carousel-item">
      <img src="img/a1.jpg" alt="Chicago" width="100%" >
    </div>
    <div class="carousel-item">
      <img src="img/a3.jpg" alt="New York" width="100%">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
	<section class="primary-bg">
		<div class="col-md-12 section-top">
			<p>hhgghghgThink of variables as a way to store information that you want to reuse throughout your stylesheet. You can store things like colors, font stacks, or any CSS value you think you'll want to reuse. Sass uses the $ symbol to make something a variable. Here's an example: Think of variables as a way to store information that you want to reuse throughout your stylesheet. You can store things like colors, font stacks, or any CSS value you think you'll want to reuse. Sass uses the $ symbol to make something a variable. Here's an example</p>
		</div>
	</section>
	<div class="clearfix"></div>
	<footer>
		<?php include '_partial/footer.php' ?>
	</footer>
	<?php include '_partial/footer-scripts.php' ?>
	<script>
		$("#home").addClass('active');

	</script>
</body>

</html>
