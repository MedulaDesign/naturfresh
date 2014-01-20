<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Azúcar &ndash;Azúcar &ndash;<?php echo $nombreMarca; ?></title>
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
						<h1>AZÚCAR</h1>
						<p>Sacarosa natural cristalizada obtenida de la remolacha azucarera o de los tallos de la caña de azúcar.</p>
					</div>
				</div>
				<div class="muestraCategoria"><img src="imgs/azucar546x232.jpg" alt="Azucar"></div>
			</header>
			<!-- h2{Descripcion:}+(figure>img[src="imgs/bolsa-lentejas_150x205.jpg"]+p.vermas{cotizar})+p.bajada{Las lentejas es una de las}+p{Éstas tienen como}+h2{Ficha}+h3{PRODUCTO}+p{Lenteja 6mm}+h3{ESPECIFICACIONES}+(p>b{Formato:}+{Contenido neto NCh 1650/1-2 Of.84})
			table[cellspacing="0"](>tr(>td(>b>{formatos})+td{1Kg - 10x1 - Sacos de 50 Kg.(Polipropileno)})+tr(>td(>b{Porción})+td{60g})+tr(>td(>b{Porciones por envase})+td{17})) -->
			<h2>Description
			<figure>
				<img src="imgs/productos/bolsa-azucar-150x205.jpg" alt="">
				<figcaption>
					Azúcar 1 Kg<br>
		    </figcaption>
				</figure></h2><figure><p class="vermas">cotizar</p>
			</figure>
			<p class="bajada">El azÚcar blanco se encuentra entre los alimentos bajos en sodio. Proporciona un sabor agradable y se puede combinar con otros alimentos tales como lÁcteos, frutas y jugos, entre otros. La principal función del azÚcar es proporcionar la energÍa que nuestro organismo necesita para el funcionamiento de los diferentes Órganos.<br>
			</p>
			<p>El azúcar es uno de los principales ingredientes de la cocina en especial de la repostería, pieza fundamental de postres, pasteles y todo tipo de preparaciones dulces.<br>
			</p>
			<h2>Receta <br>
  (Flan de caramelo/6 personas) </h2>
<h3>Ingredients:</h3>
<ul class= "ingredientes">
		  <strong>Para el flan:</strong><br>
		 
		  <li>1/2 litro de leche<br>
		    </li>
		  <li>100 g. de azúcar<br>
		    </li>
		  <li>6 huevos</li>
		  <strong>Para el caramelo:</strong>
<li>50 g. de azúcar<br>
		    </li>
<li>1 cucharada de agua</li>
	</ul>
    <h3>Method	</h3>
   <p><em>Precalentar el horno a 90° y preparar los moldes. Ponga el azúcar y el agua en una olla y
deje cocer a fuego lento. Cuando empiece a tomar color amarillo oscuro, retire del fuego y
eche en los moldes individuales.</em><br>	
 <p><em>Hierva la leche, mientras tanto bata las yemas y el azúcar.
Cuando la leche empiece a hervir, retire del fuego y añada la mezcla de las yemas y el
azúcar. Pase todo por un colador y mezcle bien, eche todo en los molde y deje en el horno
por 10 minutos.</em><br>
 <h2>Product Detail</h2>
			<h3>PRODUCT</h3>
			<p>Azúcar</p>
			<h3>SPECIFICATIONS</h3>
			<p><b>Information:</b>Contenido neto NCh. 1650/1-2 Of.84</p>
			<table cellspacing="0">
				<tr>
					<td><b>Presentation</b></td>
					<td>1Kg - 10x1 - 20x1- Sacos de 50 Kg.(Polipropileno)</td>
				</tr>
				<tr>
					<td><b>Portion</b></td>
					<td>10g</td>
				</tr>
				<tr>
					<td><b>Portion per serving</b></td>
					<td>100</td>
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
					<td>38,4</td>
					<td>385</td>
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
					<td>10,0</td>
					<td>99,5</td>
				</tr>
                <tr>
					<td>Sodium [g]</td>
					<td>0,0</td>
					<td>0,0</td>
				</tr>
                 <tr>
					<td>Moisture [%]</td>
					<td>0,0</td>
					<td>0,0</td>
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