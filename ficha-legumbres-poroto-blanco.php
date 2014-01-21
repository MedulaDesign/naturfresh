<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>White Beans &ndash; Legume &ndash;<?php echo $nombreMarca; ?></title>
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
						<h1>WHITE BEANS</h1>
						<p>Ea mei nullam facete NaturFresh, movet fastidii signiferumque in qui.</p>
					</div>
				</div>
				<div class="muestraCategoria"><img src="imgs/porotoros546x232.jpg" alt="Poroto Blanco"></div>
			</header>
			<!-- h2{Descripcion:}+(figure>img[src="imgs/bolsa-lentejas_150x205.jpg"]+p.vermas{cotizar})+p.bajada{Las lentejas es una de las}+p{Éstas tienen como}+h2{Ficha}+h3{PRODUCTO}+p{Lenteja 6mm}+h3{ESPECIFICACIONES}+(p>b{Formato:}+{Contenido neto NCh 1650/1-2 Of.84})
			table[cellspacing="0"](>tr(>td(>b>{formatos})+td{1Kg - 10x1 - Sacos de 50 Kg.(Polipropileno)})+tr(>td(>b{Porción})+td{60g})+tr(>td(>b{Porciones por envase})+td{17})) -->
			<h2>Description</h2>
			<figure>
				<img src="imgs/bag-150x205.jpg" alt="">
				<figcaption>
					 1 Kg Package <br>
				</figcaption>
				<p class="vermas">cotizar</p>
			</figure>
			<p class="bajada">lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. <br>
			</p>
			<p>Quo mundi lobortis reformidans eu.<br>
			</p>
            <h2>Recipe
<br>
 (Top of white beans with bacon)</h2>
<h3>Ingredients:</h3>
<ul class= "ingredientes">
		  <li>2 Ea mei nullam facet</li>
		  <li>2 Omnis oratio offendit ius cu</li>
		  <li> 1/2  Doming takimata </li>
		  <li>2 Et populo iriure vix		    </li>
		  <li>1/4 Usu ludus affert voluptaria ei</li>
		  <li>1 Movet fastidii signiferumque in qui</li>

	</ul>
    <h3>Method:</h3>
   <p><em>Lus id vidit volumus mandamus, vide veritus democritum te nec, ei eos debet libris consulatu. No mei ferri graeco dicunt, ad cum veri accommodare. Sed at malis omnesque delicata, usu et iusto zzril meliore NaturFresh.</em><br>
			<h2>Product Detail</h2>
			<h3>PRODUCT</h3>
			<p>White Bean</p>
			<h3>SPECIFICATIONS</h3>
			<p><b>Information: </b><?=lorem::get(10)?></p>
			<table cellspacing="0">
				<tr>
					<td><b>Presentation</b></td>
					<td>1Kg </td>
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
			<h3><strong>NUTRICIONAL INFORMATION:</strong></h3>

			<table>
				<tr>
					<th>Components</th>
					<th>Amount per Serving</th>
					<th>Amount in 100 g.</th>
				</tr>
				<tr>
					<td>Energy [Kcal.]</td>
					<td>190,2</td>
					<td>317</td>
				</tr>
				<tr>
					<td>Protein [g]</td>
					<td>12,4</td>
					<td>20,6</td>
				</tr>
				<tr>
					<td>Total Fat [g]</td>
					<td>1,0</td>
					<td>1,6</td>
				</tr>
                <tr>
					<td> Carbohydrates Available [g]</td>
					<td>34,4</td>
					<td>57,3</td>
				</tr>
				<tr>
					<td>Sodium [g]</td>
					<td>1,9</td>
					<td>3,1</td>
				</tr>
                <tr>
					<td>Dietary Fiber [g]</td>
					<td>8,6</td>
					<td>14,3</td>
				</tr>
				<tr>
					<td>Calcium [mg]</td>
					<td>98,4</td>
					<td>164</td>
				</tr>
				<tr>
					<td>Iron [mg]</td>
					<td>4,4</td>
					<td>7,3</td>
				</tr>
                <tr>
					<td>Zinc [mg]</td>
					<td>15,4</td>
					<td>25,7</td>
				</tr>
				<tr>
					<td>Moisture [%]</td>
					<td>13,3</td>
					<td>13,3</td>
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
