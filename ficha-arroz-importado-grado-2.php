<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Arroz Improtado &ndash;Arroz Improtado &ndash;<?php echo $nombreMarca; ?></title>
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
						<h1>ARROZ</h1>
						<p>Grano blanco de forma alargada proveniente de la planta del arroz. Importado especialmente por NaturFresh para satisfacer la demanda interna. </p>
					</div>
				</div>
				<div class="muestraCategoria"><img src="imgs/arroz2-546x232.jpg" alt="Arroz Improtado"></div>
			</header>
			<!-- h2{Descripcion:}+(figure>img[src="imgs/bolsa-lentejas_150x205.jpg"]+p.vermas{cotizar})+p.bajada{Las lentejas es una de las}+p{Éstas tienen como}+h2{Ficha}+h3{PRODUCTO}+p{Lenteja 6mm}+h3{ESPECIFICACIONES}+(p>b{Formato:}+{Contenido neto NCh 1650/1-2 Of.84})
			table[cellspacing="0"](>tr(>td(>b>{formatos})+td{1Kg - 10x1 - Sacos de 50 Kg.(Polipropileno)})+tr(>td(>b{Porción})+td{60g})+tr(>td(>b{Porciones por envase})+td{17})) -->
			<h2>Description</h2>
			<figure>
				<img src="imgs/productos/bolsa-arroz-importado-grado2-150x205.jpg" alt="">
				<figcaption>
			    Paquete de 1 Kg; <br>
					Grado 2
				</figcaption>
				<p class="vermas">cotizar</p>
			</figure>
			<p class="bajada"> El arroz es uno de los cereales que se cultiva y consume en casi todo el mundo,  es reconocido por ser un alimento muy sano y nutritivo. Contiene cualidades e indispensable en la dieta diaria pues no contiene colesterol, grasa y sodio.<br>
			</p>
			<p>El arroz es altamente consumido como acompañamiento y tiene un sinfín de recetas de cocina.</p>
			<h2>Product Detail</h2>
			<h3>PRODUCT</h3>
			<p>Arroz Importado Grado 2</p>
			<h3>SPECIFICATIONS</h3>
			<p><b>Information:</b>Contenido neto NCh. 1650/1-2 Of.84</p>
			<table cellspacing="0">
				<tr>
					<td><b>Presentation</b></td>
					<td>1Kg - 10x1 - 20x1 Sacos de 50 Kg.(Polipropileno)</td>
				</tr>
				<tr>
					<td><b>Portion</b></td>
					<td>50g</td>
				</tr>
				<tr>
					<td><b>Portion per serving</b></td>
					<td>20 aprox</td>
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
					<td>180</td>
					<td>360</td>
				</tr>
				<tr>
					<td>Protein [g]</td>
					<td>3,4</td>
					<td>6,9</td>
				</tr>
				<tr>
					<td>Total Fat [g]</td>
					<td>0,3</td>
					<td>0,6</td>
				</tr>
			
                
                <tr>
					<td>Carbohydrates Available [g]</td>
					<td>40,8</td>
					<td>81,6</td>
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
					<td>10,3</td>
					<td>10,3</td>
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