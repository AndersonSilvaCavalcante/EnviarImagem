<?php
	
	$conn = mysqli_connect("Localhost","root","master450","imagens");
	mysqli_set_charset($conn,"utf8");

	if(!$conn){
		die("Falha na Conexão!".mysqli_connect_error());
	}else{
		
	}

?>