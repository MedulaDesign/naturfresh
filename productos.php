<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Products &ndash; <?php echo $nombreMarca; ?></title>
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
		<?php
		$activo='productos';
		include "views/header.php"; ?>
	</header>
	<div class="corporis">
		<h1 class="titulo">Our Products</h1>
		<div class="articleList">
			<article class="categoria amarillo"><a href="categoria.php?c=legumbres">
					<h1>LEGUME</h1>
					<p>Ius id vidit volumus mandamus, vide veritus democritum te nec, ei eos debet libris consulatu.</p>
					<p class="vermas">more</p>
				</a>
			</article>

			<figure class="categoria">
		  <div data-picture data-alt="Lentejas">
			        <div data-src="imgs/lentejas_480x198.jpg"></div>
			        <div data-src="imgs/lentejas_640x264.jpg"     data-media="(min-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5)"></div>
			        <div data-src="imgs/lentejas_182x232.jpg"     data-media="(min-width: 480px)"></div>
			        <noscript>
			            <img src="imgs/lentejas_480x198.jpg" alt="Lentejas">
			        </noscript>
			    </div>
			</figure>

			<article class="categoria"><a href="categoria.php?c=arroz">
					<h1>RICE</h1>
					<p> No mei ferri graeco dicunt, ad cum veri accommodare. Sed at malis omnesque delicata, usu et iusto zzril meliore NaturFresh.</p>
					<p class="vermas">more</p>
				</a>
			</article>

			<article class="categoria verde"><a href="categoria.php?c=aceite">
	<h1>OIL</h1>
					<p>Sed at malis omnesque delicata, usu et iusto zzril meliore NaturFresh. Usu ludus affert voluptaria ei, vix ea error definitiones, movet fastidii signiferumque in qui.</p>
					<p class="vermas">more</p>
				</a>
			</article>

			<figure class="categoria">
		  <div data-picture data-alt="Rodajas de piña">
			        <div data-src="imgs/conservas_480x198.jpg"></div>
			        <div data-src="imgs/conservas_640x264.jpg"     data-media="(min-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5)"></div>
			        <div data-src="imgs/conservas_182x232.jpg"     data-media="(min-width: 480px)"></div>
			        <noscript>
			            <img src="imgs/conservas_480x198.jpg" alt="Rodajas de piña">
			        </noscript>
		      </div>
	    </figure>

			<article class="categoria">
				<a href="categoria.php?c=conservas">
				<h1>CANNED</h1>
					<p>Ea mei nullam facete, omnis oratio offendit ius cu. Doming takimata repudiandae usu an, mei dicant takimata id, pri eleifend inimicus euripidis at.</p>
					<p class="vermas">more</p>
				</a>
			</article>

			<article class="categoria amarillo"><a href="categoria.php?c=especies">
	<h1>SPECIES</h1>
					<p>Ius id vidit volumus mandamus, vide veritus democritum te nec, ei eos debet libris consulatu.</p>
					<p class="vermas">more</p>
				</a>
			</article>

			<article class="categoria"><a href="categoria.php?c=frutos-secos">
<h1>DRIED FRUITS</h1>
					<p>No mei ferri graeco dicunt, ad cum veri accommodare. Sed at malis omnesque delicata, usu et iusto zzril meliore NaturFresh.</p>
					<p class="vermas">more</p>
				</a>
			</article>

			<figure class="categoria">
<div data-picture data-alt="Orégano">
			        <div data-src="imgs/oregano_480x198.jpg"></div>
			        <div data-src="imgs/oregano_640x264.jpg"     data-media="(min-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5)"></div>
			        <div data-src="imgs/oregano_182x232.jpg"     data-media="(min-width: 480px)"></div>
			        <noscript>
			            <img src="imgs/oregano_480x198.jpg" alt="Orégano">
			        </noscript>
		      </div>
		  </figure>

			<article class="categoria verde"><a href="ficha-pasta.php">
					<h1>PASTA</h1>
					<p>NaturFresh Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
					<p class="vermas">more</p>
				</a>
			</article>

			<figure class="categoria doble">
		  <div data-picture data-alt="Almendras">
			        <div data-src="imgs/almendras_480x198.jpg"></div>
			        <div data-src="imgs/almendras_640x264.jpg"     data-media="(min-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5)"></div>
			        <div data-src="imgs/almendras_362x232.jpg"     data-media="(min-width: 480px)"></div>
			        <noscript>
			            <img src="imgs/almendras_480x198.jpg" alt="Almendras">
			        </noscript>
			    </div>
			</figure>

			<article class="categoria amarillo"><a href="ficha-miel.php">
					<h1>HONEY</h1>
					<p>Sed at malis omnesque delicata, usu et iusto zzril meliore NaturFresh. Usu ludus affert voluptaria ei, vix ea error definitiones, movet fastidii signiferumque in qui.</p>
					<p class="vermas">more</p>
				</a>
			</article>

			<figure class="categoria">
		  <div data-picture data-alt="Miel">
			        <div data-src="imgs/miel_480x198.jpg"></div>
			        <div data-src="imgs/miel_640x264.jpg"     data-media="(min-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5)"></div>
			        <div data-src="imgs/miel_182x232.jpg"     data-media="(min-width: 480px)"></div>
			        <noscript>
			            <img src="imgs/miel_480x198.jpg" alt="Miel">
			        </noscript>
			    </div>
			</figure>

			<article class="categoria"><a href="ficha-azucar.php">
					<h1>SUGAR</h1>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
					<p class="vermas">more</p>
				</a>
			</article>

			<figure class="categoria">
		  <div data-picture data-alt="Azúcar">
			        <div data-src="imgs/azucar_480x198.jpg"></div>
			        <div data-src="imgs/azucar_640x264.jpg"     data-media="(min-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5)"></div>
			        <div data-src="imgs/azucar_182x232.jpg"     data-media="(min-width: 480px)"></div>
			        <noscript>
			            <img src="imgs/azucar_480x198.jpg" alt="Azúcar">
			        </noscript>
			    </div>
			</figure>
		</div>
		<nav class="productos">
			<?php include "views/productos-lista.php"; ?>
		</nav>
	</div>

</div>

</div>
<footer>
	<?php include "views/footer.php"; ?>
</footer>
<?php require("views/javascript-al-pie.php"); ?>
</body>
</html>
