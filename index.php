<?php 
$curl=curl_init("http://localhost/webservice/base.txt");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$respuesta = curl_exec($curl);
$info = curl_getinfo($curl);
if ($info['http_code']==200){
	$datos = explode(",", $respuesta);
	echo "<h1>frutas en mi tienda</h1>";

	foreach ($datos as $fruta) {
		echo "->". $fruta ."<br>";
	}
}else{
	echo "Error " . curl_error($curl);
}
?>