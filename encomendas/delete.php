<?php
include("../login/funcoes.php"); // incluir tudo o que está no fichiero funcoes.php
$conexao = conexao();



$id_encomenda=$_GET['id_encomenda'];
//echo '<br>Nº Pessoa ->'; echo $n_pessoa;

$apagar_encomenda="DELETE FROM encomenda WHERE id_encomenda=$id_encomenda";

$elimina=mysqli_query($conexao,$apagar_encomenda);
if($elimina)
	{
		echo"<script> alert(\"Encomenda eliminada com sucesso!!\")</script>";
		redireciona("index.php","",0);
	}
else
	{
		echo"<script> alert(\" Falha a eliminar encomenda!!<br>Tente novamente!!\")</script>";
		redireciona("index.php","",0);
	}
?>