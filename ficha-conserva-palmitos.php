<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Palmitos &ndash;Palmitos &ndash;<?php echo $nombreMarca; ?></title>
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
						<h1>PALMITOS</h1>
						<p>NaturFresh tiene disponible palmitos enteros envasados herméticamente en conservadas garantizando su sabor y calidad nutricional. <br>
					  </div>
				</div>
				<div class="muestraCategoria"><img src="imgs/palmitos546x232.jpg" alt="Palmitos"></div>
			</header>
			<!-- h2{Descripcion:}+(figure>img[src="imgs/bolsa-lentejas_150x205.jpg"]+p.vermas{cotizar})+p.bajada{Las lentejas es una de las}+p{Éstas tienen como}+h2{Ficha}+h3{PRODUCTO}+p{Lenteja 6mm}+h3{ESPECIFICACIONES}+(p>b{Formato:}+{Contenido neto NCh 1650/1-2 Of.84})
			table[cellspacing="0"](>tr(>td(>b>{formatos})+td{1Kg - 10x1 - Sacos de 50 Kg.(Polipropileno)})+tr(>td(>b{Porción})+td{60g})+tr(>td(>b{Porciones por envase})+td{17})) -->
			<h2>Description</h2>
			<figure>
				<img src="imgs/productos/lata-pina-palmitos-150x205.jpg" alt="">
				<figcaption>
					Palmitos</figcaption>
				<p class="vermas">cotizar</p>
			</figure>
			<p class="bajada">Poseen grandes propiedades alimenticias, pues es un vegetal con jugosa textura ideal y un enorme aporte en fibra, aumentando el nivel de saciedad en los platos livianos. AdemÁs por el mismo motivo, se activa el tránsito intestinal y mejora el control de las tasas de colesterol y de azÚcar. <br>
			</p>
			<p> Acompañante ideal para ensaladas, entradas y platos livianos en calorías.</p>
			<h2>Receta <br>
  (Ensalada de palmitos/4 personas) </h2>
<h3>Ingredients:</h3>
        <ul class= "ingredientes">
		  <li>1 conserva de palmitos </li>
		  <li>1/4 de aceitunas negras</li>
		  <li>1 lechuga</li>
		  <li>aceite y sal a gusto</li>
	</ul>
    <h3>Method	</h3>
   <p><em>Corte los palmitos en rodajas, agregue la lechuga y las aceitunas picadas. <br>
     Aliñe con sal y aceite a gusto.</em><br>	
   <h2>Product Detail</h2>
			<h3>PRODUCT</h3>
			<p>Corazones de Palmito Enteros</p>
			<h3>SPECIFICATIONS</h3>
			<p><b>Information:</b>Contenido neto NCh. 1650/1-2 Of.84</p>
			<table cellspacing="0">
				<tr>
					<td><b>Presentation</b></td>
					<td>Lata corazones de palmitos enteros</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Peso Neto</b></td>
					<td>400 gr</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Peso Drenado</b></td>
					<td>220 gr</td>
					<td>&nbsp;</td>
				</tr>	<tr>
					<td><b>Portion</b></td>
					<td>110 gr</td>
					<td>&nbsp;</td>
				</tr>	<tr>
					<td><b>Portion por envace</b></td>
					<td>2 aprox.</td>
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
					<td>40</td>
				</tr>
				<tr>
					<td>Protein [g]</td>
					<td>&nbsp;</td>
					<td>3</td>
				</tr>
				<tr>
					<td>Total Fat [g]</td>
					<td>&nbsp;</td>
					<td>
0,00

</td>
				</tr>
			
                	
                <tr>
					<td>Grasas Monoinsaturadas [g]</td>
					<td>&nbsp;</td>
					<td>
0,00

</td>
				</tr>
                 <tr>
					<td>Grasas Poliinsaturadas [g]</td>
					<td>&nbsp;</td>
					<td>0,00 </td>
				</tr>
              
                <tr>
					<td>Hidratos de Carbono [g]</td>
					<td>&nbsp;</td>
					<td>6</td>
				</tr>
				<tr>
					<td>Sodium [g]</td>
					<td>&nbsp;</td>
					<td>231</td>
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