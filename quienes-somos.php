<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>About Us &ndash; <?php echo $nombreMarca; ?></title>
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	<?php include "views/viewport-fav-setup.php"; ?>
	<link rel="stylesheet" href="_/css/styles.css">
	<?php include "views/modernizr.php"; ?>
</head>

<body>
<div class="amictus pagina-contenido">
	<div class="wrapper">

	<header>
		<?php
		$activo='quienes';
		include "views/header.php"; ?>
	</header>
	<div class="corporis">
		<article>
			<header>
				<div class="caluga verde">
					<div class="tipoA">
						<h1>ABOUT US</h1>
						<p>NaturFresh Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
				</div>
				<div class="muestraCategoria"><img src="imgs/campo-546x232.jpg" alt="Paisaje de siembras de hierbas verdes."></div>
			</header>

			<h2>Our History</h2>
<p class="bajada">NaturFresh At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.<br>
</p>

<p>NaturFresh Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.<br>
</p>
<p><strong><em>&quot;NaturFresh Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.&quot;</em></strong></p>

<h2>Our Mission</h2>
<p dir="ltr">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
<br>
<p>&nbsp;</p>
			<!--<h2>Directorio</h2>
			<table>
				<tr>
					<td><strong>Presidente</strong></td>
					<td>Jorge Batarce Zerené</td>
				</tr>
				<tr>
					<td><strong>Gerente de Exportación</strong></td>
					<td>Marcelo Batarce Mufdi</td>
				</tr>
				<tr>
					<td><strong>Gerente de Mercado Interno</strong></td>
					<td>Jorge Batarce Mufdi</td>
				</tr>
				<tr>
					<td><strong>Gerente de Administración y Finanzas</strong></td>
					<td>Alejandro Batarce Mufdi</td>
				</tr>
				<tr>
					<td><strong>Gerente de Producción</strong></td>
					<td>Roberto Batarce Mufdi</td>
				</tr>
			</table>-->
			<p>&nbsp;</p>
		</article>
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
