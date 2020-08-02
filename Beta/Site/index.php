<?php include ('Database.php'); 
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Untitled</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main2.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">

						<!-- Logo -->
							<div class="logo">
								<a href="index.html"><strong>Instagrow</strong> <span class="extra">by Mesa Social Management</span></a>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="index.html">Home</a></li>
									<li>
										<a href="#" class="icon solid fa-angle-down">Dropdown</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li>
												<a href="#">Submenu</a>
												<ul>
													<li><a href="#">Option One</a></li>
													<li><a href="#">Option Two</a></li>
													<li><a href="#">Option Three</a></li>
													<li><a href="#">Option Four</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<?php if(isset($_SESSION['Email']) == "Email"){echo "<li><a href='./uitloggen.php'>Uitloggen</a></li><li><a href='Kopen.php'>Volgers Kopen</a></li><li><a href='./Bestellingen.php'>Bestellingen</a></li>";}else{echo "<li><a href='Login.php'>Inloggen</a></li>";}?>
									<?php if(isset($_SESSION['rol'])){if ($_SESSION['rol'] == 9) {echo "<li><a href='Adminpage/index.php'>CMS</a></li>";}}?>
								</ul>
							</nav>

					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="content primary">
							<header>
								<h1>Boost nodig voor jouw instagram?<br />
								Wij regelen het!</h1>
								<p>Koop hier echte instagram volgers</p>
							</header>
							<ul class="actions special">
								<li><a href="#one" class="button large wide scrolly">Lees Meer</a></li>
							</ul>
						</div>
						<div class="content secondary">
							<div class="inner">
								<div class="features">
									<section>
										<span class="icon fa-gem major"></span>
										<h3>Beste kwaliteit</h3>
										<p>Morbi in sem quis dui placerat ornare. Pellentesque ipsum dolor</p>
									</section>
									<section>
										<span class="icon solid fa-chart-line major"></span>
										<h3>Bekend worden</h3>
										<p>Integer vitae libero ac risus eges placerat voluptrus magna</p>
									</section>
									<section>
										<span class="icon solid fa-camera-retro major"></span>
										<h3>Echte volgers</h3>
										<p>Fusce lobortis lorem ipsum semper sagittis etiam consequat</p>
									</section>
								</div>
							</div>
						</div>
						<video src="images/banner.mp4" muted autoplay loop playsinline></video>
					</section>

				<!-- Section -->
					<section id="one" class="main">
						<header class="accent1">
							<h2>Sed adipising ornare risus</h2>
							<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue eu vulpu magna erat. Aliquam erat volutpat. Nam dui mi tincidunt quis accumsan porttitor facilisis luctus, metus lorem feugiat tempus adipiscing.</p>
						</header>
						<ul class="tabs">
							<li>
								<h3>Lorem <span class="extra">ipsum dolor</span></h3>
								<div class="spotlight">
									<ul>
										<li>
											<h4>Magna accumsan</h4>
											<p>Lorem in sem quis dui placerat ornare tra sed etiam veroeros consequat.</p>
										</li>
										<li>
											<h4>Erat aliquam</h4>
											<p>Praesent dapibus, neque id cursus fauci quam erat volutpat nam dui mitin.</p>
										</li>
									</ul>
									<span class="image1"><img src="images/Foto.png" alt="" /></span>
									<ul>
										<li>
											<h4>Neque veroeros</h4>
											<p>Sed adipiscing ornare risus. Morbi lorem lentesque egestas sem consequat.</p>
										</li>
										<li>
											<h4>Quis portitor</h4>
											<p>Donec nec justo eget felis facilisis ferme Aenean dignissim pellen.</p>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<h3>Adipsicing <span class="extra">feugiat</span></h3>
								<div class="spotlight">
									<ul>
										<li>
											<h4>Erat aliquam</h4>
											<p>Praesent dapibus, neque id cursus fauci quam erat volutpat nam dui mitin.</p>
										</li>
										<li>
											<h4>Neque veroeros</h4>
											<p>Sed adipiscing ornare risus. Morbi lorem lentesque egestas sem consequat.</p>
										</li>
									</ul>
									<span class="image"><img src="images/pic02.jpg" alt="" /></span>
									<ul>
										<li>
											<h4>Quis portitor</h4>
											<p>Donec nec justo eget felis facilisis ferme Aenean dignissim pellen.</p>
										</li>
										<li>
											<h4>Magna accumsan</h4>
											<p>Lorem in sem quis dui placerat ornare tra sed etiam veroeros consequat.</p>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<h3>Magna <span class="extra">et accumsan</span></h3>
								<div class="spotlight">
									<ul>
										<li>
											<h4>Neque veroeros</h4>
											<p>Sed adipiscing ornare risus. Morbi lorem lentesque egestas sem consequat.</p>
										</li>
										<li>
											<h4>Quis portitor</h4>
											<p>Donec nec justo eget felis facilisis ferme Aenean dignissim pellen.</p>
										</li>
									</ul>
									<span class="image"><img src="images/pic03.jpg" alt="" /></span>
									<ul>
										<li>
											<h4>Magna accumsan</h4>
											<p>Lorem in sem quis dui placerat ornare tra sed etiam veroeros consequat.</p>
										</li>
										<li>
											<h4>Erat aliquam</h4>
											<p>Praesent dapibus, neque id cursus fauci quam erat volutpat nam dui mitin.</p>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</section>

				<!-- Section -->
					<section id="two" class="main accent2">
						<header>
							<h2>Etiam sed faucibus consequat</h2>
							<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue eu vulpu magna erat. Aliquam erat volutpat. Nam dui mi tincidunt magna accumsan.</p>
						</header>
						<div class="inner">
							<span class="image main"><img src="images/pic04.jpg" alt="" /></span>
						</div>
					</section>

				<!-- Section -->
					<section id="three" class="main alt">
						<header>
							<h2>Auctor nam sed aliquam</h2>
							<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue eu vulpu magna erat. Aliquam erat volutpat. Nam dui mi tincidunt magna accumsan.</p>
						</header>
						<div class="inner">
							<div class="posts">
								<div>
									<article>
										<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
										<div class="content">
											<h3>Blandit aliquam</h3>
											<p>Feugiat ultrices sed nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Lorem nulla sed gravida non magna.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</div>
									</article>
									<article>
										<div class="content">
											<h3>Amet euismod</h3>
											<p>Sed ligula vulputate et amet tristique cursus. Lorem nulla sed gravida non magna sed feugiat consequat.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</div>
									</article>
								</div>
								<div>
									<article>
										<div class="content">
											<h3>Sed amet feugiat</h3>
											<p>Phasellus ultrices sed nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Lorem nulla sed gravida non.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</div>
									</article>
									<article>
										<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
										<div class="content">
											<h3>Gravida veroeros</h3>
											<p>Phasellus ultrices sed nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Lorem nulla sed gravida non.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</div>
									</article>
								</div>
								<div>
									<article>
										<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
										<div class="content">
											<h3>Ipsum volutpat</h3>
											<p>Donec consectetuer ligula vulputate sem tristique cursus. Lorem nulla sed gravida non. Phasellus et ultricesnulla quis nibh. Quisque amet lorem lectus. Magna consectetuer ligula vulputate sem tristique cursus magna.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</div>
									</article>
								</div>
							</div>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h3>Nullam sed gravida</h3>
								<p>Phasellus ultrices sed nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus sed magna gravida non.</p>
								<ul class="icons">
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
								</ul>
							</section>
							<section class="narrow">
								<h4>Lorem aliquam</h4>
								<ul class="links">
									<li><a href="#">Ultrices nulla</a></li>
									<li><a href="#">Quis lectus donec</a></li>
									<li><a href="#">Magna ligula</a></li>
									<li><a href="#">Sed etiam tristique</a></li>
									<li><a href="#">Cursus magna</a></li>
									<li><a href="#">Gravida dolore</a></li>
								</ul>
							</section>
							<section class="narrow">
								<h4>Magna tempus</h4>
								<ul class="links">
									<li><a href="#">Feugiat ligula</a></li>
									<li><a href="#">Vulputate tristique</a></li>
									<li><a href="#">Ultrices nulla</a></li>
									<li><a href="#">Cursus sed magna</a></li>
									<li><a href="#">Sed lectus donec</a></li>
								</ul>
							</section>
							<section>
								<h3>Morbi sed volutpat</h3>
								<p>Sed vulputate sem tristique cursus sed magna gravida non lorem ipsum dolor sit amet.<p>
								<p><a href="#" class="major">(000) 000-0000</a></p>
							</section>
						</div>
						<div class="copyright">
							<p>&copy; Untitled. All rights reserved.</p>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.selectorr.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>