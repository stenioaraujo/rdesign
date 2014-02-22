<?php
try {
	$mongo = new Mongo ();
	$database = $mongo -> selectDB ( "rdesign" );
	$collection = $database -> selectCollection ( "emails" );
	$emails = $collection -> find();
	
	while ($emails -> hasNext()) {
		$email = $emails -> getNext();
		echo $email["email"]."</br>";
	}
	
} catch ( MongoConnectionException $e ) {
	echo "deu um errinho";
}
?>