<?php
include "_/inc/datos-globales.php";
/******************************************************************
     FORM PROCESS
******************************************************************/
require_once '_/inc/swift/lib/swift_required.php';
require_once '_/inc/MailClass.php';

$gestor = new MailClass();

function revisaErrores($nombre,$imprime=''){
	global $gestor;
	if( !$gestor->getError() )return false;
	$hayerr=false;
	if( $gestor->getError($nombre) ){
		$hayerr=true;
		if($imprime)echo $imprime;
	}
		return $hayerr;
}
/******************* FIN FORM ************************************/
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Contact &ndash; <?php echo $nombreMarca; ?></title>
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
		$activo='contacto';
		include "views/header.php"; ?>
	</header>
	<div class="corporis">
		<div class="slogan">
			<h1>We produce healthy food for your family</h1>
			<p>Sed dui quam, ornare sed tempus a, porttitor non augue. Duis vel odio ante. Etiam lorem sapien, aliquam.</p>
		</div>
		<article>
			<header>
				<div class="caluga verde">
					<div class="tipoA">
						<h1>CONTACT</h1>
						<p>NatureFresh <?=lorem::get(6)?></p>
					</div>
				</div>
				<div class="muestraCategoria"><img src="imgs/pocillos-546x232.jpg" alt="Pocillos con diferentes fruos secos y legumbres."></div>
			</header>

			<div class="columna">
				<h2>Form</h2>
				<form name="contacto" class="regular formAnimado" id="contact_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" novalidate>
					<?php if( $gestor->getError() ){ ?>
					<?php if ( $gestor->getError('problema') ): ?>
						<p class="error"><strong>ERROR:</strong><br>
						Ha ocurrido un error al enviar el mensaje, por favor inténtalo nuevamente más tarde o escríbenos directamente a <?php echo $mailAministrador; ?>, o llámanos al. <?php echo $telefono; ?></p></p>
					<?php else: ?>
						<p class="notificacion rojo"><strong>ERROR:</strong><br>
						Por favor complete los campos obligatorios.</p>
					<?php endif ?>
					<?php } ?>
					<?php if ($gestor->exito()): ?>
							<p class="notificacion verde"><strong>Su mensaje ha sido enviado.</strong><br>Gracias por contactarse con nosotros.</p>
					<?php endif ?>
					<p><strong>*</strong> Required.</p>
					<ul>
						<li<?php revisaErrores('nombre',' class="error"'); ?>>
							<label for="nombre">Name</label>
							<input size="40" name="nombre" id="nombre" type="text" value="<?php $gestor->revisaEImprime('nombre'); ?>">
							<?php if( revisaErrores('nombre') ){ ?>
							<p class="error">Por favor escriba su nombre.</p>
							<?php } ?>
						</li>
						<li>
							<label for="telefono">Phone</label>
							<input size="40" name="telefono" id="telefono" type="tel" value="<?php $gestor->revisaEImprime('telefono'); ?>">
						</li>
						<li<?php revisaErrores('mail',' class="error"'); ?>>
							<label for="mail">Email*</label>
							<input size="40" name="mail" id="mail" type="email" value="<?php $gestor->revisaEImprime('mail'); ?>">
							<?php if( revisaErrores('mail') ){ ?>
							<p class="error">Por favor esciba su email correctamente.</p>
							<?php } ?>
						</li>
						<li>
							<label for="comments">Questions / Comments:</label>
							<textarea id="comments" name="comments" rows="9" cols="31"><?php $gestor->revisaEImprime('comments'); ?>
</textarea>
						</li>
						<li class="transparente">
							<button type="submit" name="send" value="Submit">Send</button>
						</li>
					</ul>
					<p>&nbsp;</p>
				</form>
			</div>



			<div class="columna">
				<h2>Other methods</h2>

				<div class="grupo">
					<h3>&copy; <span class="fn org">NaturFresh S.A.</span></h3>
					<hr>
					<p class="telefono">
						<span>Phones:</span><br>
						<?php echo $telefono; ?> &ndash;
						<a href="tel:+56226542820">(56-2) 26542820</a>
					</p>
					<p class="telefono tel">
						<span class="type">Fax</span><span>:</span><br>
						<a href="tel:+56226542890" class="value">(56-2) 26542890</a> &ndash;
						<a href="tel:+56226542891">(56-2) 26542891</a>
					</p>
					<hr>
					<h3>Email:</h3>
					<p class="correo"><a href="mailto:contacto@NaturFresh.cl" class="email">contacto@NaturFresh.cl</a></p>
					<h3>Address:</h3>
					<p class="adr"><?php echo $direccionFisica; ?></p>
					<hr>
					<p class="verEnMaps"><a href="http://goo.gl/maps/SOcyr" title="ver ubicación en Google maps" target="_blank">View in Google maps</a></p>
				</div>



			</div>
			<p>&nbsp;</p>
		</article>
	</div>

</div>

</div>
<footer>
	<?php include "views/footer.php"; ?>
</footer>
<?php require("views/javascript-al-pie.php"); ?>
</body>
</html>
