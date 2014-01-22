<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Sliced Pineapples &ndash; Canned  &ndash;<?php echo $nombreMarca; ?></title>
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
						<h1>SLICED PINEAPPLES</h1>
						<p><?=lorem::get(16)?><br>
				  </div>
				</div>
				<div class="muestraCategoria"><img src="imgs/pina546x232.jpg" alt="Piña Rodajas"></div>
			</header>
			<!-- h2{Descripcion:}+(figure>img[src="imgs/bolsa-lentejas_150x205.jpg"]+p.vermas{quote})+p.bajada{Las lentejas es una de las}+p{Éstas tienen como}+h2{Ficha}+h3{PRODUCTO}+p{Lenteja 6mm}+h3{ESPECIFICACIONES}+(p>b{Formato:}+{Contenido neto NCh 1650/1-2 Of.84})
			table[cellspacing="0"](>tr(>td(>b>{formatos})+td{1Kg - 10x1 - Sacos de 50 Kg.(Polipropileno)})+tr(>td(>b{Porción})+td{60g})+tr(>td(>b{Porciones por envase})+td{17})) -->
			<h2>Description</h2>
			<figure>
				<img src="imgs/productos/lata-pina-rodajas-150x205.jpg" alt="">
				<figcaption>
					Sliced pineapples</figcaption>
				<p class="vermas">quote</p>
			</figure>
			<p class="bajada"><?=lorem::get(15)?><br>
			</p>
			<p><?=lorem::get(7)?><br>
			</p>
			<h2>Recipe<br>
  (Pineapple cake with meringue/serves 4) </h2>
<h3>Ingredients:</h3>
        <ul class= "ingredientes">
		  <li>150 g. <?=lorem::get(5)?></li>
		  <li>8 <?=lorem::get(5)?></li>
		  <li>300 g. <?=lorem::get(5)?></li>
		  <li>1 <?=lorem::get(5)?> </li>
		  <li>150 g. <?=lorem::get(5)?></li>
	</ul>
    <h3>Method	</h3>
   <p><em><?=lorem::get(10)?><br>
   </em></p>
       <p><em><?=lorem::get(15)?> <br>
       </em><em><br>
         <?=lorem::get(15)?></em><br>
         <br>
<h2>Product Detail</h2>
			<h3>PRODUCT</h3>
			<p>Canned Sliced Pineapples</p>
			<h3>SPECIFICATIONS</h3>
			<p><b>Information:</b> <?=lorem::get(5)?></p>
			<table cellspacing="0">
				<tr>
					<td><b>Presentation</b></td>
					<td>Sliced Pineapple can</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Net weigth</b></td>
					<td>565g</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Drained weight </b></td>
					<td>340g</td>
					<td>&nbsp;</td>
				</tr>	<tr>
					<td><b>Portion</b></td>
					<td>110g (2 slices + juice)</td>
					<td>&nbsp;</td>
				</tr>	<tr>
					<td><b>Portion per serving</b></td>
					<td>5 approx.</td>
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
					<td>76,6</td>
					<td>69,6</td>
				</tr>
				<tr>
					<td>Protein [g]</td>
					<td>0,0</td>
					<td>0,0</td>
				</tr>
				<tr>
					<td>Total Fat [g]</td>
					<td>0,0</td>
					<td>0,0</td>
				</tr>

                <tr>
					<td>Carbohydrates Available [g]</td>
					<td>19,1</td>
					<td>17,4</td>
				</tr>
                <tr>
					<td>Total sugars [g]</td>
					<td>18,0</td>
					<td>16,4</td>
				</tr>
				<tr>
					<td>Fiber[g]</td>
					<td>0,79</td>
					<td>0,72</td>
				</tr>
                <tr>
					<td>Sodium [mg]</td>
					<td>5,72</td>
					<td>5,2</td>
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
