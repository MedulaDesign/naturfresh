<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Soja Oil &ndash; Oil &ndash;<?php echo $nombreMarca; ?></title>
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
						<h1>SOJA OIL</h1>
						<p><?=lorem::get(15)?><br>
						</div>
				</div>
				<div class="muestraCategoria"><img src="imgs/aceite2-546x232.jpg" alt="Aceite Soja Maravilla"></div>
			</header>
			<!-- h2{Descripcion:}+(figure>img[src="imgs/bolsa-lentejas_150x205.jpg"]+p.vermas{quote})+p.bajada{Las lentejas es una de las}+p{Éstas tienen como}+h2{Ficha}+h3{PRODUCTO}+p{Lenteja 6mm}+h3{ESPECIFICACIONES}+(p>b{Formato:}+{Contenido neto NCh 1650/1-2 Of.84})
			table[cellspacing="0"](>tr(>td(>b>{formatos})+td{1Kg - 10x1 - Sacos de 50 Kg.(Polipropileno)})+tr(>td(>b{Porción})+td{60g})+tr(>td(>b{Porciones por envase})+td{17})) -->
			<h2>Description</h2>
			<figure>
				<img src="imgs/oil-150x205.jpg" alt="">
				<figcaption>
					Soja Oil<br>
					1 Liter
				</figcaption>
				<p class="vermas">quote</p>
			</figure>
			<p class="bajada"><?=lorem::get(25)?>
<br>
			</p>
			<p><?=lorem::get(5)?><br>
			</p>
			<h2>Product Detail</h2>
			<h3>PRODUCT</h3>
			<p>Soja Oil</p>
			<h3>SPECIFICATIONS</h3>
			<p><b>Information:</b> <?=lorem::get(5)?></p>
			<table cellspacing="0">
				<tr>
					<td><b>Presentation</b></td>
					<td>Bottles PET 12 x 1000cc</td>
					<td>Bottles PET 12 x 900cc </td>
				</tr>
				<tr>
					<td><b>Portion</b></td>
					<td>5ml</td>
					<td>5ml</td>
				</tr>
				<tr>
					<td><b>Portion per serving</b></td>
					<td>200</td>
					<td>180</td>
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
					<td>41,4</td>
					<td>828</td>
				</tr>
				<tr>
					<td>Protein [g]</td>
					<td>0</td>
					<td>0</td>
				</tr>
				<tr>
					<td>Total Fat [g]</td>
					<td>4,6</td>
					<td>92</td>
				</tr>
				<tr>
					<td>Saturated Fats [g]</td>
					<td>0,8</td>
					<td>15</td>
				</tr>
                	<tr>
					<td>Trans Fats [g]</td>
					<td>0</td>
					<td>0</td>
				</tr>
                <tr>
					<td>Monounsaturated Fats [g]</td>
					<td>1,1</td>
					<td>21</td>
				</tr>
                 <tr>
					<td>Polyunsaturated Fats [g]</td>
					<td>2,8</td>
					<td>56</td>
				</tr>
                <tr>
					<td>Colesterol [g]</td>
					<td>0</td>
					<td>0</td>
				</tr>
                <tr>
					<td>Carbohydrates Available [g]</td>
					<td>0</td>
					<td>0</td>
				</tr>
				<tr>
					<td>Sodium [g]</td>
					<td>0</td>
					<td>0</td>
				</tr>
                <tr>
					<td>Vitamina E [mg ET]</td>
					<td>2</td>
					<td>49</td>
				</tr>
				<tr>
					<td>% DDR Relation %</td>
					<td>12</td>
					<td>-</td>
				</tr>

				<tr>
					<td>Moisture [%]</td>
					<td>0,05</td>
					<td>0,05</td>
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
