<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Lentils &ndash; Legume &ndash; <?php echo $nombreMarca; ?></title>
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
						<h1>LENTILS</h1>
						<p>NaturFresh interdum et malesuada fames ac ante ipsum primis in faucibus. Duis pulvinar bibendum.<br>
						</p>
					</div>
				</div>
				<div class="muestraCategoria"><img src="imgs/lentejas_546x232.jpg" alt="Lentejas a granel."></div>
			</header>
			<!-- h2{Descripcion:}+(figure>img[src="imgs/bolsa-lentejas_150x205.jpg"]+p.vermas{quote})+p.bajada{Las lentejas es una de las}+p{Éstas tienen como}+h2{Ficha}+h3{PRODUCTO}+p{Lenteja 6mm}+h3{ESPECIFICACIONES}+(p>b{Formato:}+{Contenido neto NCh 1650/1-2 Of.84})
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
			<p class="bajada">Mauris auctor neque id nibh rutrum posuere. Vivamus blandit magna ac venenatis consectetur. Nulla vel sapien porta, consequat lectus nec, iaculis nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquet augue id sapien hendrerit aliquet. Ut scelerisque scelerisque enim, ut elementum justo egestas eu.<br>
			</p>
			<p>Nulla vel sapien porta, consequat lectus nec, iaculis nulla.<br>
			</p>
			 <h2>Recipe<br>
  (Lentils/serves 4) </h2>
<h3>Ingredients:</h3>
        <ul class= "ingredientes">
		  <li>1 Mauris ullamcorper ligula ut pharetra</li>
		  <li>1/4 kg. Vivamus porttitor, augue id mattis</li>
		  <li>1 Nullam malesuada augue et dictum.</li>
		  <li>1/4 kg Praesent semper magna at quam.</li>
		  <li>1 <?=lorem::get(4)?></li>
		  <li>1 <?=lorem::get(2)?></li>
		  <li>1 <?=lorem::get(1)?></li>
		  <li>1/2 <?=lorem::get(5)?></li>
		  <li>1 <?=lorem::get(2)?></li>
		  <li><?=lorem::get(1)?></li>
		  <li><?=lorem::get(4)?></li>
	</ul>
    <h3>Method</h3>
   <p><em>Maecenas consectetur dui ac velit varius hendrerit a ut felis. Nullam sit amet tincidunt sapien. Curabitur ut neque commodo lorem molestie dignissim. Praesent enim quam, hendrerit consectetur magna nec, aliquet auctor eros. Maecenas tempus, metus eget euismod elementum, massa dui bibendum elit, sit amet lobortis risus leo ut justo. Quisque nec lectus a augue rutrum hendrerit. Donec sagittis id enim in ullamcorper. Fusce quis ipsum iaculis, pharetra velit non, vehicula nibh. Fusce a odio nibh. Pellentesque id eleifend odio. Vivamus dictum eleifend turpis. Donec a odio est. Praesent cursus iaculis vulputate. Vivamus egestas tempor quam sit amet fermentum.<br>
   </em></p>
       <p><em>
Nulla justo elit, iaculis in molestie nec, fermentum at neque. Suspendisse potenti. Vivamus vehicula iaculis neque eu sollicitudin. Aenean mollis pretium felis, et porta dui egestas nec. Cras non mauris consequat, consectetur dui sit amet, feugiat diam. Praesent tellus nisl, dignissim accumsan leo sed, fringilla molestie leo. Praesent viverra sodales luctus.
       </em>
       <p>
       <em><?=lorem::get(10)?></em><br>
<h2>Product Detail</h2>
			<h3>PRODUCT</h3>
			<p>Lentil 6mm</p>
			<h3>SPECIFICATIONS</h3>
			<p><b>Information:</b> <?=lorem::get(10)?></p>
			<table cellspacing="0">
				<tr>
					<td><b>Presentation</b></td>
					<td>1Kg - 10x1 - Bags of 50 Kg. (polypropylene)</td>
				</tr>
				<tr>
					<td><b>Portion</b></td>
					<td>60g</td>
				</tr>
				<tr>
					<td><b>Portion per serving</b></td>
					<td>17</td>
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
					<td>195,6</td>
					<td>326</td>
				</tr>
				<tr>
					<td>Protein [g]</td>
					<td>14,37</td>
					<td>23,95</td>
				</tr>
				<tr>
					<td>Total Fat [g]</td>
					<td>0,89</td>
					<td>1,48</td>
				</tr>
				<tr>
					<td>Carbohydrates Available [g]</td>
					<td>36,08</td>
					<td>60,13</td>
				</tr>
				<tr>
					<td>Sodium [g]</td>
					<td>1,8</td>
					<td>3</td>
				</tr>
				<tr>
					<td>Fiber Bruta [g]</td>
					<td>2,31</td>
					<td>3,86</td>
				</tr>
                <tr>
					<td>Calcium [mg]</td>
					<td>37,8</td>
					<td>63</td>
				</tr>
				<tr>
					<td>Iron [mg]</td>
					<td>3,9</td>
					<td>6,5</td>
				</tr>
				<tr>
					<td>Moisture [%]</td>
					<td>11,78</td>
					<td>11,78</td>
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
