<?php
require_once 'lorem.php';
$autor = 'Médula Diseño';
$webDelAutor = 'http://medula.cl/';
$nombreMarca = 'NaturFresh';
$sloganMarca = 'We produce healthy food for your family';
$codigoPostal = '1235887';
$direccionFisica = '<span class="street-address">2569 Farm Road</span><br>
<span class="postal-code" title="ZIP Code">'.$codigoPostal.'</span> <span class="region">Tucson</span> <br>
<span class="locality">AZ</span>, <span class="country-name">United State</span>';
$telefono = '<a href="tel:+12025550133" class="tel">(1) 202-555-0133</a>';// '+53(2)26525890';
$dominioSitio = 'g.m0.cl'; //'medula.cl';
$home = 'http://'.$dominioSitio.'/';
$mailAministrador = 'agustin@fliin.com';
$mailWebmaster = 'agustin@medula.cl';
$redire = 'http://'.$dominioSitio.'/ap/';
if(isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'],'localhost')!==false)$redire = 'http://localhost/NaturFresh/';//gregar la carpeta local
?>
