<?php 
if (!isset($activo))$activo = 'no';

function estaActivo($activo,$key=''){
	if($activo == $key){
		echo " activo";
	}
}
?>
<a href="./" title="Ir al inicio." class="logoCapsa"><div id="logoTop" data-svgfall data-alt="Logotipoo NaturFresh">
	        <div data-src="imgs/logo-NaturFresh.svg" data-support="svg"></div>
	        <div data-src="imgs/logo-NaturFresh.png" data-support="no-svg"></div>
	        <noscript>
	            <img src="imgs/logo-NaturFresh.png" alt="Logotipoo NaturFresh">
	        </noscript>
    	</div></a>
		<nav>
			<ul>
				<li><span class="ico-hoja<?php estaActivo($activo,'quienes'); ?>">♠</span><a href="quienes-somos.php">About Us</a></li>
				<li><span class="ico-hoja<?php estaActivo($activo,'productos'); ?>">♠</span><a href="productos.php">Products</a></li>
				<li><span class="ico-hoja<?php estaActivo($activo,'control-de-calidad'); ?>">♠</span><a href="control-de-calidad.php">Quality Control</a></li>
				<li><span class="ico-hoja<?php estaActivo($activo,'contacto'); ?>">♠</span><a href="contacto.php">Contact</a></li>
			</ul>
		</nav>