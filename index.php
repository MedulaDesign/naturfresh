<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title><?php echo $nombreMarca; ?> &ndash; <?php echo $sloganMarca; ?></title>
	<!--<meta name="description" content="Uno de los principales ">
	 Google will often use this as its description of your page/site. Make it good or delete it. -->
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	<?php include "views/viewport-fav-setup.php"; ?>
	<link rel="stylesheet" href="_/css/styles.css">
	<?php include "views/modernizr.php"; ?>
</head>

<body>
<div class="amictus">
	<div class="wrapper">

	<header>
		<?php include "views/header.php"; ?>
	</header>

	<div class="corporis">
			<article class="slogan">
					<h1>We produce healthy food for your family.</h1>
					<p>Sed dui quam, ornare sed tempus a, porttitor non augue. Duis vel odio ante. Etiam lorem sapien, aliquam.</p>
				</article>

		<div class="articleList acorta1h">
		<article class="categoria porotos"><a href="ficha-legumbres-poroto-blanco.php">
						<h1>BEANS</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent.</p>
						<p class="vermas">more</p>
					</a>
				</article>

				<figure class="categoria porotos doble dobleVertical">
			  <div data-picture data-alt="Porotos">
				        <div data-src="imgs/porotos_480x198.jpg"></div>
				        <!--<div data-src="imgs/porotos_640x264.jpg"     data-media="(min-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5)"></div>-->
				        <div data-src="imgs/porotos_362x464.jpg"     data-media="(min-width: 480px)"></div>
				        <noscript>
				            <img src="imgs/porotos_480x198.jpg" alt="Porotos">
				        </noscript>
				    </div>
				</figure>

				<figure class="categoria">
					<div data-picture data-alt="Arvejas">
				        <div data-src="imgs/arvejas_480x198.jpg"></div>
				        <!--<div data-src="imgs/arvejas_640x264.jpg"     data-media="(min-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5)"></div>-->
				        <div data-src="imgs/arvejas_182x232.jpg"     data-media="(min-width: 480px)"></div>
				        <noscript>
				            <img src="imgs/arvejas_480x198.jpg" alt="Arvejas">
				        </noscript>
				    </div>
				</figure>

				<article class="categoria arvejas mas1h menos1w"><a href="ficha-legumbres-arvejas.php">
						<h1>PEAS</h1>
						<p>Nulla neque ligula, ornare in felis sed, sodales malesuada.<br>
						</p>
						<p class="vermas">more</p>
					</a>
				</article>

				<article class="categoria garbanzo menos1h mas1w"><a href="ficha-legumbres-garbanzos.php">
		<h1>CHICKPEAS</h1>
						<p>Maecenas tincidunt pellentesque augue, in consectetur diam pharetra ut.<br>
						</p>
						<p class="vermas">more</p>
					</a>
				</article>

				<figure class="categoria dobleVertical">
			  <div data-picture data-alt="Garbanzos">
				        <div data-src="imgs/garbanzos_480x198.jpg"></div>
				        <!--<div data-src="imgs/garbanzos_640x264.jpg"     data-media="(min-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5)"></div>-->
				        <div data-src="imgs/garbanzos_182x464.jpg"     data-media="(min-width: 480px)"></div>
				        <noscript>
				            <img src="imgs/garbanzos_480x198.jpg" alt="Garbanzos">
				        </noscript>
				    </div>
				</figure>

				<!--<article class="categoria aceite"><a href="#">
						<h1>ACEITE</h1>
						<p>Extraído de diversas semillas el aceite vegetal es hoy un elemento indispensable en la cocina. Usado con sabiduría es un gran aporte nutricional.</p>
						<p class="vermas">more</p>
					</a>
					<img src="imgs/porotos-lo.jpg" alt="Porotos">
				</article>-->

				<figure class="categoria menos1h">
					<div data-picture data-alt="Piña en cconserva.">
				        <div data-src="imgs/conservas_480x198.jpg"></div>
				        <div data-src="imgs/conservas_640x264.jpg"     data-media="(min-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5)"></div>
				        <div data-src="imgs/conservas_182x232.jpg"     data-media="(min-width: 480px)"></div>
				        <noscript>
				            <img src="imgs/conservas_480x198.jpg" alt="Piña en conserva.">
				        </noscript>
				    </div>
				</figure>

				<article class="categoria conservas menos1h"><a href="ficha-conserva-pina-rodajas.php">
						<h1>CANNED</h1>
						<p>Sed euismod mattis erat sit amet sagittis. Etiam tincidunt.</p>
						<p class="vermas">more</p>
					</a>
				</article>

				<figure class="categoria menos1h aceite">
			  <div data-picture data-alt="Aceite">
				        <div data-src="imgs/aceite_480x198.jpg"></div>
				        <div data-src="imgs/aceite_640x264.jpg"     data-media="(min-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5)"></div>
				        <div data-src="imgs/aceite_182x232.jpg"     data-media="(min-width: 480px)"></div>
				        <noscript>
				            <img src="imgs/aceite_480x198.jpg" alt="Aceite">
				        </noscript>
				    </div>
				</figure>
			</div>
	</div>


</div>

</div>
<footer>
	<?php include "views/footer.php"; ?>
</footer>
<?php require("views/javascript-al-pie.php"); ?>
</body>
</html>
