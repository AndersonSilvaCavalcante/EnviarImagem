<?php
	include_once 'conexao.php';
	$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = "imgs/";
	move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);
	$sql_code ="INSERT INTO recebidos(img) VALUES ('$diretorio$novo_nome')";
	
	if ($conn->query($sql_code)==true) {
		header('Location:');
	}else{
		echo "Error:".$sql_code."<br>".$conn->error;
	}
?>
