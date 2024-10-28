<?php
session_start(); // Certifica-se de que a sessão está iniciada
include("../conexao.php");
$conexao = conexao();

$nome = "Usuário Desconhecido"; // Valor padrão para nome
$funcao = "Função Desconhecida"; // Valor padrão para função

if (isset($_SESSION['user'])) { // Verifica se existe sessão criada para utilizador
    $username = $_SESSION['user'];

    $querysql = mysqli_query($conexao, "SELECT nome, funcao FROM administrador WHERE username='$username'");
    
    if ($resultado = mysqli_fetch_array($querysql)) {
        $nome = $resultado['nome'];
        $funcao = $resultado['funcao'];
		//echo $nome;
		//echo $funcao;
			
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Encomendas</title>
<link type="text/css" rel="stylesheet" href="../estilo.css">
<link type="text/css" rel="stylesheet" href="../styles.css">

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
/*
div {
  border-radius: 5px;
  padding: 20px;
}
.header{
  margin-top: 0%;
  background: white;
  display:inline;
}*/
.titulo_formulario{
  text-align: center;
  margin-top: 5%;
}
.item{
  float:right;
}
.banner_formulario{
  width: 40%;
  float:left;
}
form .glow-on-hover{
  margin-left: 50%
}
</style>


</head>
<body>

<div></div>

<div class="user">
  <b><span class="caminho_NomePagina"><?php echo $nome;?></span></b>&nbsp;&nbsp;
  <span class="caminho_NomePagina"><?php echo $funcao;?></span><br>
  <a href="../login/logout.php"><img src="../images/power.png"></a>
</div>

<div class="titulo_lista">
<h1>Lista de Encomendas</h1>
</div>
  

<hr>
  
<div class="table-wrapper">
<table class="fl-table">
        	<thead>
        		<tr>
            		<th>Pedido</th>
            		<th>Id Ração</th>
                <th>Nome</th>
            		<th>Morada</th>
            		<th>Código Postal</th>
					      <th>NIF</th>
					      <th>Telefone</th>
					      <th>Observações</th>
                <th>Estado</th>
					      <th>Gerir</th>
        		</tr>
        	</thead>
        <tbody>
<!--<table width="100%" border="0">
  <tbody>
    <tr>
      <td class="cabecalhoTabela" width="5%">Pedido</td>
      <td class="cabecalhoTabela" width="5%">Id Ração</td>
      <td class="cabecalhoTabela" width="15%">Nome</td>
      <td class="cabecalhoTabela" width="20%">Morada</td>
      <td class="cabecalhoTabela" width="5%">Código Postal</td>
      <td class="cabecalhoTabela" width="10%">NIF</td>
      <td class="cabecalhoTabela" width="10%">Telefone</td>
      <td class="cabecalhoTabela" width="20%">Observações</td>
      <td class="cabecalhoTabela" width="10%">Estado</td>
      <td class="cabecalhoTabela" width="5%">Gestão</td>
    </tr>
  </tbody>
</table>-->
<?php
$consulta_sql = mysqli_query($conexao, "SELECT * FROM encomenda") or die (mysqli_error($conexao));

while ($auxiliar = mysqli_fetch_assoc($consulta_sql)) {
  $id_encomenda = $auxiliar['id_encomenda'];
  $id = $auxiliar['id_racao'];
  $nome = $auxiliar['nome'];
  $morada = $auxiliar['morada'];
  $cod_postal = $auxiliar['cod_postal'];
  $nif = $auxiliar['nif'];
  $telefone = $auxiliar['telefone'];
  $observacoes = $auxiliar['observacoes'];
  $estado = "Pendente";
?>
<tr>
              <td><?php echo $id_encomenda ?></td>
              <td><?php echo $id ?></td>
              <td><?php echo $nome ?></td>
              <td><?php echo $morada ?></td>
              <td><?php echo $cod_postal ?></td>
              <td><?php echo $nif ?></td>
              <td><?php echo $telefone ?></td>
              <td><?php echo $observacoes ?></td>
              <td><?php echo $estado ?></td>
              <td>
              <a href="delete.php?id_encomenda=<?php echo($id_encomenda); ?>" onClick="return confirmar();" title="Apagar"><img src="../images/delete.png" title="Eliminar encomenda" alt="Eliminar encomenda"></a>
              </td>
            </tr>
        </tbody>
<!--<table width="100%" border="0">
  <tbody>
    <tr>
      <td class="linha_tabela" width="5%"><?php echo $id_encomenda ?></td>
      <td class="linha_tabela" width="5%"><?php echo $id ?></td>
      <td class="linha_tabela" width="15%"><?php echo $nome ?></td>
      <td class="linha_tabela" width="20%"><?php echo $morada ?></td>
      <td class="linha_tabela" width="5%"><?php echo $cod_postal ?></td>
      <td class="linha_tabela" width="10%"><?php echo $nif ?></td>
      <td class="linha_tabela" width="10%"><?php echo $telefone ?></td>
      <td class="linha_tabela" width="20%"><?php echo $observacoes ?></td>
      <td class="linha_tabela" width="10%"><?php echo $estado ?></td>
      <td>
        <a href="delete.php?id_encomenda=<?php echo($id_encomenda); ?>" onClick="return confirmar();" title="Apagar"><img src="../images/delete.png" title="Eliminar encomenda" alt="Eliminar encomenda"></a>
      </td>
    </tr>
  </tbody>
</table>-->
<?php
}
?>
  </table>
</div>

<footer>
		<p>&copy Copyright 2024 Escola Pshycomotora Canina | Todos os direitos reservados <br/> <a href="../sobre_nos/politica_privacidade.php"> Política de Privacidade</a></p>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
		(function($) { 
  $(function() { 
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      $('.dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); 
})(jQuery);

	</script>
</body>
</html>
