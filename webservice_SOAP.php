<?php 
require_once "lib/nusoap.php";

function muestraPlanetas(){

	$planetas = "Un planeta es, según la definición adoptada por la Unión Astronómica Internacional, un cuerpo celeste que:​. Orbita alrededor de una estrella o remanente de ella. Tiene suficiente masa para que su gravedad supere las fuerzas del cuerpo rígido, de manera que asuma una forma en equilibrio hidrostático (prácticamente ";

	return $planetas;
}

function muestraImagen($categoria){
	if ($categoria == 'espacio') {
		$imagen = 'imagen.png';
	}else{
		$imagen = 'imagen2.png';
	}
	$resultado = '<img src="img/'.$imagen.'">';

	return $resultado;
}

if (!isset($HTTP_RAW_POST_DATA)) {
	$HTTP_RAW_POST_DATA = file_get_contents('php://input');
}
$server = new soap_server();

$server->register("muestraPlanetas");
$server->register("muestraImagen");
$server->service($HTTP_RAW_POST_DATA);
?>