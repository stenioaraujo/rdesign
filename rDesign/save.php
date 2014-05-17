<?php
$salvo = false;
if (isset ($_POST['email'])) {
	try {
		$mongo = new Mongo();
		$database = $mongo -> selectDB ( "rdesign" );
		$collection = $database -> selectCollection ( "emails" );
		
		$dados = array(
			"email" => $_POST['email'],
			"time" => time(),
			"identificacao" => array_merge(
					array("IP" => $_SERVER['REMOTE_ADDR']),
					json_decode(file_get_contents("http://appservidor.com.br/webservice/geolocalizacao?IP=".$_SERVER['REMOTE_ADDR']), true)
				)
		);
		
		if ($collection -> insert($dados)) {
			$salvo = true;
		}
	} catch ( MongoConnectionException $e ) {
	}
}

if ($salvo) {
	echo "Wait for this.";
} else {
	echo "Please, Try again!s";
}
?>