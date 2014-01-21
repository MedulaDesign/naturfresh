<?php
require_once 'lorem.php';
$autor = 'Médula Diseño';
$webDelAutor = 'http://medula.cl/';
$nombreMarca = 'NaturFresh';
$sloganMarca = 'We produce healthy food for your family';
$codigoPostal = '1235887';
$direccionFisica = '<span class="street-address">Guerneville 2569</span><br>
<span class="postal-code" title="Código postal.">'.$codigoPostal.'</span> <span class="region">Renca</span> <br>
<span class="locality">Santiago</span>, <span class="country-name">Chile</span>';
$telefono = '<a href="tel:+53228362820" class="tel">(53-2)26525890</a>';// '+53(2)26525890';
$dominioSitio = 'g.m0.cl'; //'medula.cl';
$home = 'http://'.$dominioSitio.'/';
$mailAministrador = 'agustin@fliin.com';
$mailWebmaster = 'agustin@medula.cl';
$redire = 'http://'.$dominioSitio.'/ap/';
if(isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'],'localhost')!==false)$redire = 'http://localhost/NaturFresh/';//gregar la carpeta local
?>
