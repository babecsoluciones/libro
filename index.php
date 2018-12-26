<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Historia de la Radio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo"><img src="images/logo-hr.png"></a>
									<!--<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>-->
								</header>

							<!-- Banner -->
								<section id="banner" <?=$_GET['seccion'] ? 'style="display:none;"' : ''?>>
									<div class="content">
										<header>
											<h1>¿QUÉ ES LA RADIO?</h1>
                                        </header>
											<p>La radio en México es el medio de comunicación con mayor penetracion ya que 98% de la poblacion tiene acceso a estedio. La radio ha estado presente en los eventos mas importantes para Mexico, desastres naturales, olimpiadas, heechos historicos mucho mas. 
<br><br>
Se sabe que 98 de cada 100 mexicanos cuenta con un radio en casa. 
<br><br>
La radio es un medio de difusión masivo que llega al radio-escucha de forma personal, es el medio de mayor alcance, ya que llega a todas las clases sociales. Establece un contacto más personal, porque ofrece al radio-escucha cierto grado de participación en el acontecimiento o noticia que se está transmitiendo.  
<br><br>
La importancia de la radio como medio de difusión, se concentra principalmente en la naturaleza de lo que ésta representa como medio en si, ya que, posee, una calidad intima de tu a tu, que la mayoría de los otros medios no tienen. 
<br><br>
En relación con otros medios de comunicación, la radio genera una situación comunicativa muy particular, en la que emisor y receptor se ven sin ser vistos, en la que se perciben espacios sin ser percibidos, en la que, sobre la nada, se dibujan mares, ríos, montañas, animales, rostros, sonrisas, tristezas,... La radio, como muchas veces se ha dicho, es un medio ciego, pero también es, al mismo tiempo, un mundo a todo color. 
<br><br>
El nacimiento de la radio, no fue fácil ni definido. Este medio tuvo que buscar sus propias características y además lo hizo nuevamente al aparecer la televisión: hija de la radio. Fueron los radioescuchas quienes le brindaron su apoyo al construir o adquirir un aparato receptor. A ellos no les importó que en las primeras emisiones una estación se 'encimara" sobre otra, produciendo un terrible efecto, y que además, después le agregaran una serie de molestos anuncios y canciones comerciales.</p>
										<!--<ul class="actions">
											<li><a href="#" class="button big">Learn More</a></li>
										</ul>-->
									</div>
									<!--<span class="image object">
										<img src="images/pic10.jpg" alt="" />
									</span>-->
								</section>

							<!-- Section -->
								<section <?=$_GET['seccion'] ? '' : 'style="display:none;"'?>>
									<?
    include($_GET['seccion']'.html');
    ?>
								</section>

							

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt" style="display:none">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
                                    <?
                                    include("menu.php");
                                    ?>
								</nav>

							<!-- Section -->
								<section style="display:none">
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section style="display:none">
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
										<li class="fa-phone">(000) 000-0000</li>
										<li class="fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; 2018 | Historia de la Radio <a href="https://sdibabec.com">SDI·BABEC</a></p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>