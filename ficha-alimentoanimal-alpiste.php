<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Alpiste &ndash; Alpiste &ndash;<?php echo $nombreMarca; ?></title>
	<!--<meta name="description" content="Uno de los principales ">
	 Google will often use this as its description of your page/site. Make it good or delete it. -->
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	<?php include "views/viewport-fav-setup.php"; ?>
	<link rel="stylesheet" href="_/css/styles.css">
	<?php include "views/modernizr.php"; ?>
</head>

<body>
<div class="amictus pagina-ficha">
	<div class="wrapper">

	<header>	
		<?php
		$activo='productos';
		include "views/header.php"; ?>
	</header>
	<div class="corporis">
		<article>
			<header>
				<div class="caluga verde">
					<div class="tipoA">
						<h1>ALPISTE</h1>
						<p>Semilla importada especialmente por NaturFresh desde Canadá para satisfacer las necesidades del mercado nacional. <br>
					  </p>
					</div>
				</div>
				<div class="muestraCategoria"><img src="imgs/alpiste546x232.jpg" alt="Alpiste"></div>
			</header>
			<!-- h2{Descripcion:}+(figure>img[src="imgs/bolsa-lentejas_150x205.jpg"]+p.vermas{cotizar})+p.bajada{Las lentejas es una de las}+p{Éstas tienen como}+h2{Ficha}+h3{PRODUCTO}+p{Lenteja 6mm}+h3{ESPECIFICACIONES}+(p>b{Formato:}+{Contenido neto NCh 1650/1-2 Of.84})
			table[cellspacing="0"](>tr(>td(>b>{formatos})+td{1Kg - 10x1 - Sacos de 50 Kg.(Polipropileno)})+tr(>td(>b{Porción})+td{60g})+tr(>td(>b{Porciones por envase})+td{17})) -->
			<h2>Description</h2>
			<figure>
				<img src="imgs/alpiste-150x205.jpg" alt="">
				<figcaption>
					Alpiste</figcaption>
				<p class="vermas">cotizar</p>
		  </figure>
			<p class="bajada">Las semillas de alpiste de NaturFresh son altas en proteÍnas, en aceite como tambiÉn en almidÓn. </p>
			<p>Alimento producido y envasado especialmente para aves.			</p>
			<h2>Product Detail</h2>
			<h3>PRODUCT</h3>
			<p>Alpiste</p>
			<h3>SPECIFICATIONS</h3>
			<p><b>Information:</b>Contenido neto NCh. 1650/1-2 Of.84</p>
			<table cellspacing="0">
				<tr>
					<td><b>Presentation</b></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Portion</b></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Portion per serving</b></td>
					<td>&nbsp;</td>
				</tr>
			</table>
			<h3>NUTRICIONAL INFORMATION:</h3>

			<table>
				<tr>
					<th>Components</th>
					<th>Amount per Serving</th>
					<th>Amount in 100 g.</th>
				</tr>
				<tr>
					<td>Energy [Kcal.]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Protein [g]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Total Fat [g]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td> Ácidos Grasos Saturados[g]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
                <tr>
					<td>Ácidos Grasos Monoinsaturados [g]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
                 <tr>
					<td>Ácidos Grasos Poliinsaturados [g]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
                <tr>
					<td>Carbohydrates Available [g]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Sodium [g]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
                <tr>
					<td>Dietary Fiber [g]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Calcium [mg]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Iron [mg]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Moisture [%]</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
			<h2>Download</h2>
			<p><a class="boton" href="#">Download Specifications</a></p>
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