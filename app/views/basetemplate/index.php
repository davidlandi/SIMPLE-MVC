<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->
	<head>
		<title><?php $resources->page_title(); ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<?php
			$resources->page_meta();

			$resources->page_css();
		?>


		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<header class="container-fluid">
			<div class="row">
				<div class="container">
					<div class="col-md-12">
						<nav class="navbar navbar-default" role="navigation">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#">Title</a>
							</div>
						
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="home">Home</a>
									</li>
									<li>
										<a href="location">Location</a>
									</li>
									<li>
										<a href="design">Design</a>
									</li>
									<li>
										<a href="floorplan">Floorplan</a>
									</li>
									<li>
										<a href="gallery">Gallery</a>
									</li>
									<li>
										<a href="projectteam">Project Team</a>
									</li>
									<li>
										<a href="contact">Contact</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<section class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<?php
						$app->content();
					?>
					
				</div>
			</div>
		</section>

		<footer>
			<div class="row">
				<div class="col-md-12">
					
				</div>
			</div>
		</footer>
		<?php
			$resources->page_js();
		?>

	</body>
</html>	