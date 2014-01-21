<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Mackerel &ndash; Canned &ndash;<?php echo $nombreMarca; ?></title>
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
						<h1>Mackerel</h1>
						<p><?=lorem::get(15)?></div>
		    </div>
				<div class="muestraCategoria"><img src="imgs/jurel546x232.jpg" alt="Jurel al natural."></div>
			</header>
			<!-- h2{Descripcion:}+(figure>img[src="imgs/bolsa-lentejas_150x205.jpg"]+p.vermas{cotizar})+p.bajada{Las lentejas es una de las}+p{Éstas tienen como}+h2{Ficha}+h3{PRODUCTO}+p{Lenteja 6mm}+h3{ESPECIFICACIONES}+(p>b{Formato:}+{Contenido neto NCh 1650/1-2 Of.84})
			table[cellspacing="0"](>tr(>td(>b>{formatos})+td{1Kg - 10x1 - Sacos de 50 Kg.(Polipropileno)})+tr(>td(>b{Porción})+td{60g})+tr(>td(>b{Porciones por envase})+td{17})) -->
			<h2>Description</h2>
			<figure>
				<img src="imgs/productos/lata-jurel-150x205.jpg" alt="">
				<figcaption>
					Meckerel<br>
				</figcaption>
			<p class="vermas">quote</p>
			</figure>
			<p class="bajada"><?=lorem::get(15)?></p>
			<p class="bajada"><?=lorem::get(15)?><br>
		  </p>
		  <p><?=lorem::get(5)?></p>
			<h2>Recipe <br>
  (Mackerel pudding/serves 4) </h2>
<h3>Ingredients:</h3>
        <ul class= "ingredientes">
		  <li>1 <?=lorem::get(5)?></li>
		  <li>1/2 <?=lorem::get(5)?></li>
		  <li>2 <?=lorem::get(5)?></li>
		  <li>6 <?=lorem::get(5)?></li>
		  <li>1 <?=lorem::get(5)?></li>
		  <li>1 <?=lorem::get(5)?></li>
		  <li><?=lorem::get(5)?></li>
		  <li><?=lorem::get(5)?></li>
		  <li><?=lorem::get(5)?></li>
	</ul>
    <h3>Method	</h3>
   <p><em><?=lorem::get(15)?><br>
     <br>
     <?=lorem::get(15)?><br>
   </em><br>
   </p>
<h2>Product Detail</h2>
			<h3>PRODUCT</h3>
			<p>Mackerel</p>
			<h3>SPECIFICATIONS</h3>
			<p><b>Information:</b> <?=lorem::get(5)?></p>
			<table cellspacing="0">
				<tr>
					<td><b>Presentation</b></td>
					<td>Mackerel can</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Net weigth</b></td>
					<td>425g</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Drained weight</b></td>
					<td>255g</td>
					<td>&nbsp;</td>
				</tr>
                <tr>
					<td><b>Portion</b></td>
					<td>70g</td>
					<td>&nbsp;</td>
				</tr> <tr>
					<td><b>Portion per serving</b></td>
					<td>3 approx</td>
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
					<td>94</td>
					<td>134</td>
				</tr>
				<tr>
					<td>Protein [g]</td>
					<td>16,8</td>
					<td>24</td>
				</tr>
				<tr>
					<td>Total Fat [g]</td>
					<td>3,0</td>
					<td>4,3</td>
				</tr>
				<tr>
					<td>Saturated Fats[g]</td>
					<td>1,1</td>
					<td>1,5</td>

                <tr>
					<td>Monounsaturated Fats [g]</td>
					<td>1,0</td>
					<td>1,3</td>
				</tr>
                 <tr>
					<td>Polyunsaturated Fats [g]</td>
					<td>1,0</td>
					<td>1,4</td>
				</tr>
                <tr>
					<td>Colesterol [g]</td>
					<td>48</td>
					<td>68</td>
				</tr>
                <tr>
					<td>Carbohydrates Available [g]</td>
					<td>0,0</td>
					<td>0,0</td>
				</tr>
				<tr>
					<td>Sodium [g]</td>
					<td>150</td>
					<td>214</td>
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
