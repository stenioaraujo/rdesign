<?php
$salvo = false;
if (isset ($_POST['email'])) {
	try {
		$mongo = new Mongo ();
		$database = $mongo -> selectDB ( "rdesign" );
		$collection = $database -> selectCollection ( "emails" );
		
		$dados = array(
			"email" => $_POST['email'],
			"time" => time(),
			"identificacao" => $_SERVER['REMOTE_ADDR']
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