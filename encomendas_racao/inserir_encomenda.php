<?php
include("../conexao.php"); // incluir tudo o que está no fichiero funcoes.php
$conexao=conexao();

$id=$_POST['id_racao'];
$nome=$_POST['nome'];
$morada=$_POST['morada'];
$cod_postal=$_POST['cod_postal'];
$nif=$_POST['nif'];
$telefone=$_POST['telefone'];
$observacoes=$_POST['observacoes'];
//$estado = "Pendente";



/*
	echo '<br>Nome ->'; echo $nome;
	echo '<br>Morada ->'; echo $morada;
	echo '<br>Cod postal ->'; echo $cod_postal;
	echo '<br>NIF ->'; echo $nif;
	echo '<br>Telefone ->'; echo $telefone;
	echo '<br>CC ->'; echo $cc;
	echo '<br>Observacoes ->'; echo $observacoes;


*/

//$consultaSQL = "SELECT * FROM racao WHERE id_racao=$id";
$insert="INSERT INTO encomenda( id_racao, nome,morada,cod_postal,nif,telefone,observacoes)
VALUES( '$id','".$nome."','".$morada."','".$cod_postal."','.$nif.',".$telefone.",'".$observacoes."')"; // , '".$estado."'
//echo '<br><br>';
//echo $insert_pessoa;

$inserir_encomenda=mysqli_query($conexao,$insert);
if($inserir_encomenda)
	{
		echo"<script> alert(\" Encomenda inserida com sucesso!\")</script>";
		redireciona("../encomendas_racao/","",0);
	}
else
	{
		echo"<script> alert(\" Falha ao inserir encomenda!<br>Tente novamente!\")</script>";
		redireciona("../encomendas_racao/","",0);
	}
	
	
	
	
	
?>