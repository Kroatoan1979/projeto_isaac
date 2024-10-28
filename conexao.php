<?php
function conexao()
{
    $conexao = mysqli_connect("localhost", "root", "", "escola_canina");

    if (!$conexao) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    return $conexao;
}


function redireciona($url, $mgs="", $delay=0)
{
	echo"<meta http-equiv='refresh' content='$delay; url=$url'>";
	if(!empty($mgs))
		echo"<h1> $mgs </h1>";
		die;
}


?>