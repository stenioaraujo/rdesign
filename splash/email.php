<?php
if (isset($_POST['email'])){
	try {
		file_put_contents("arquivos/emails.txt", file_get_contents("arquivos/emails.txt").$_POST['email']."\n");
		echo "ok";
	} catch (Exception $e) {
		echo "fail";
	}
} else {
	echo "fail";
}
?>