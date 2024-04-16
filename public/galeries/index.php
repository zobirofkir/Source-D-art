<!DOCTYPE HTML>
<html>
	<head>
		<title>Photos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="assets/js/jquery.min.js"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><img style="filter: drop-shadow(2px 4px 30px white);" src="../images/logo.png" width="50px" alt=""><a href="../"><strong>Source D'art</strong> it Services</a> </h1>
						<nav>
							
							<ul>
								<li><a href="#footer"><i class="fas fa-bars"></i></a></li>

							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

					

						<script>
							for(i=1;i<12;i++){
								$('#main').append(`<article class="thumb">
													<a href="img/gallery/qualite/${i}.jpg" class="image"><img src="img/gallery/compr/${i}.jpg" alt="" /></a>
													<h2></h2>
													<p></p>
												   </article>`)
							}
						</script>
						
						
					</div>

				<!-- Footer -->

					<footer id="footer" class="panel">
						
							<nav class="navbar">
								<!--
								<ul class="ul">
									<li><a href="">Accueil</a></li>
									<li><a href="">À propos </a></li>
									<li><a href="#team">Nos-Équipe</a></li>
									<li><a href="">Nous faisons</a></li>
									<li><a href="">Videos</a></li>
									<li><a href="#contact">Contact</a></li>
								</ul> -->
							</nav>
						<div class="inner split">
							<div>
							
								<section>
									<h2>Découvrir de nouvelles choses ...</h2>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-google"><span class="label">Mail</span></a></li>
										<li><a href="#" class="icon brands fa-youtube"><span class="label">youtube</span></a></li>
										<li><a href="#" class="icon brands fa-whatsapp"><span class="label">whatsap</span></a></li>
									</ul>
								</section>
								
							</div>
							
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>