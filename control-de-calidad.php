<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Control de Calidad &ndash;<?php echo $nombreMarca; ?></title>
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	<?php include "views/viewport-fav-setup.php"; ?>
	<link rel="stylesheet" href="_/css/styles.css">
	<?php include "views/modernizr.php"; ?>
</head>

<body>
<div class="amictus pagina-contenido">
	<div class="wrapper">

	<header>	
		<?php
		$activo='control-de-calidad';
		include "views/header.php"; ?>
	</header>
	<div class="corporis">
		<article>
			<header>
				<div class="caluga verde">
					<div class="tipoA">
						<h1>QUALITY CONTROL</h1>
						<p>&quot;Tenemos un único y gran objetivo, el cual es ofrecer al mercado productos, de calidad y sobre todo inocuos para el consumidor&quot;.</p>
					</div>
				</div>
				<div class="muestraCategoria"><img src="imgs/controlcalidad.jpg" alt="Paisaje de siembras de hierbas verdes."></div>
			</header>
			
			<h2>Our quality assurance</h2>
<p class="bajada">NaturFresh Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu.<br>
<p>Ius id vidit volumus mandamus, vide veritus democritum te nec, ei eos debet libris consulatu. No mei ferri graeco dicunt, ad cum veri accommodare. Sed at malis omnesque delicata, usu et iusto zzril meliore NaturFresh.</p>
<p>Ea mei nullam facete, omnis oratio offendit ius cu. Doming takimata repudiandae usu an, mei dicant takimata id, pri eleifend inimicus euripidis at. His vero singulis ea, quem euripidis abhorreant mei ut, et populo iriure vix. Usu ludus affert voluptaria ei, vix ea error definitiones, movet fastidii signiferumque in qui.</p>
<p><br>
  <br>
  <br>
</p>
<p>&nbsp;</p>
			<!--<h2>Directorio</h2>
			<table>
				<tr>
					<td><strong>Presidente</strong></td>
					<td>Jorge Batarce Zerené</td>
				</tr>
				<tr>
					<td><strong>Gerente de Exportación</strong></td>
					<td>Marcelo Batarce Mufdi</td>
				</tr>
				<tr>
					<td><strong>Gerente de Mercado Interno</strong></td>
					<td>Jorge Batarce Mufdi</td>
				</tr>
				<tr>
					<td><strong>Gerente de Administración y Finanzas</strong></td>
					<td>Alejandro Batarce Mufdi</td>
				</tr>
				<tr>
					<td><strong>Gerente de Producción</strong></td>
					<td>Roberto Batarce Mufdi</td>
				</tr>
			</table>-->
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