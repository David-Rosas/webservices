<?php
require_once "lib/nusoap.php";

$cliente = new nusoap_client("http://localhost/webservice/webservice_SOAP.php");;
$planetas = $cliente->call("muestraPlanetas");
$imagen = $cliente->call("muestraImagen", array('categoria' => 'espacio'));
echo "<h2> Los planetas <h2>";

echo "<p>".$planetas."</p";
echo "<p>".$imagen."</p";


?>