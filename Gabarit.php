<!DOCTYPE HTML>
<html>
	<head>
		<title><?= htmlspecialchars($titre) ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<div id="page-wrapper">

			<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.php">MonBlog</a></h1>
				<nav id="nav">
					<ul>
						<li class="special">
							<a href="#menu" class="menuToggle"><span>Menu</span></a>
							<div id="menu">
								<ul>
									<li><a href="index.php">Accueil</a></li>
									<!-- plus tard : lien vers article, à propos, etc. -->
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</header>

			<!-- Banner (fixe) -->
			<section id="banner">
				<div class="inner">
					<h2>Blog de SOUKAINA</h2>
					<p>Bienvenue sur mon blog PHP MVC<br />
					avec le template Spectral.</p>
				</div>
				<a href="#contenu" class="more scrolly">Voir les articles</a>
			</section>

			<!-- ZONE DYNAMIQUE : ICI ON INSÈRE LE CONTENU PHP -->
			<section id="contenu" class="wrapper style1 special">
    <div class="inner">
        <?= isset($contenu) ? $contenu : '' ?>
    </div>
</section>

			<!-- Footer -->
			<footer id="footer">
				<ul class="copyright">
					<li>&copy; MonBlog</li><li>Design: Spectral by HTML5 UP</li>
				</ul>
			</footer>

		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>
