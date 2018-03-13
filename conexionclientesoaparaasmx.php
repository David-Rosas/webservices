<?php
require_once "lib/nusoap.php";

$params = array(
  "param" => "value"
);

$apiauth =array('UserName'=>'MVM','Password'=>'Mvm2007mvm!');
$wsdl = 'http://190.143.64.183:8081/wsTarifasROpruebas/ServicioTarifas.asmx?wsdl';
$header = new SoapHeader('http://tempuri.org/', 'CredencialUsuario', $apiauth);
$soap = new SoapClient($wsdl); 
$soap->__setSoapHeaders($header);       
$data = $soap->ObtenerLocalidadesActivas($header);


?>