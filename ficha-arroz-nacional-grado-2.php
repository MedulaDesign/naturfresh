<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Rice Grade 2 &ndash; Rice &ndash;<?php echo $nombreMarca; ?></title>
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
						<h1>RICE</h1>
						<p><?=lorem::get(15)?></p>
					</div>
				</div>
				<div class="muestraCategoria"><img src="imgs/arroz2-546x232.jpg" alt="Arroz"></div>
			</header>
			<!-- h2{Descripcion:}+(figure>img[src="imgs/bolsa-lentejas_150x205.jpg"]+p.vermas{cotizar})+p.bajada{Las lentejas es una de las}+p{Éstas tienen como}+h2{Ficha}+h3{PRODUCTO}+p{Lenteja 6mm}+h3{ESPECIFICACIONES}+(p>b{Formato:}+{Contenido neto NCh 1650/1-2 Of.84})
			table[cellspacing="0"](>tr(>td(>b>{formatos})+td{1Kg - 10x1 - Sacos de 50 Kg.(Polipropileno)})+tr(>td(>b{Porción})+td{60g})+tr(>td(>b{Porciones por envase})+td{17})) -->
			<h2>Description</h2>
			<figure>
				<img src="imgs/bag-150x205.jpg" alt="">
				<figcaption>
					Bag of 1 Kg; <br>
					Grade 2
				</figcaption>
				<p class="vermas">quote</p>
			</figure>
			<p class="bajada"><?=lorem::get(25)?></p>
			<p><?=lorem::get(10)?><br>
			</p>
			<h2>Product Detail</h2>
			<h3>PRODUCT</h3>
			<p>Rice Grade 2</p>
			<h3>SPECIFICATIONS</h3>
			<p><b>Information:</b> <?=lorem::get(5)?></p>
			<table cellspacing="0">
				<tr>
					<td><b>Presentation</b></td>
					<td>1Kg - 10x1 - 20x1 Bags of 50 Kg. (polypropylene)</td>
				</tr>
				<tr>
					<td><b>Portion</b></td>
					<td>50g</td>
				</tr>
				<tr>
					<td><b>Portion per serving</b></td>
					<td>20 approx</td>
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
					<td>181,5</td>
					<td>363</td>
				</tr>
				<tr>
					<td>Protein [g]</td>
					<td>3,2</td>
					<td>6,4</td>
				</tr>
				<tr>
					<td>Total Fat [g]</td>
					<td>0,4</td>
					<td>0,8</td>
				</tr>


                <tr>
					<td>Carbohydrates Available [g]</td>
					<td>39,9</td>
					<td>79,7</td>
				</tr>
				<tr>
					<td>Sodium [g]</td>
					<td>2,0</td>
					<td>4,0</td>
				</tr>
                <tr>
					<td>Dietary Fiber [g]</td>
					<td>9,1</td>
					<td>18,2</td>
				</tr>
				<tr>
					<td>Calcium [mg]</td>
					<td>4,0</td>
					<td>8,0</td>
				</tr>
				<tr>
					<td>Iron [mg]</td>
					<td>1,0</td>
					<td>2,0</td>
				</tr>
				<tr>
					<td>Moisture [%]</td>
					<td>12,3</td>
					<td>12,3</td>
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
