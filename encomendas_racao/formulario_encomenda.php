<?php
include("../conexao.php");
$conexao = conexao();
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário de Encomenda</title>
  <link type="text/css" rel="stylesheet" href="../estilo.css">
  <link type="text/css" rel="stylesheet" href="../styles.css">
	
	<!--<style>
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
 
div {
  border-radius: 5px;
  padding: 20px;
    }
		

		
		.titulo_formulario{
		margin-left: 35%;
		margin-top: 5%;
		}
		
		
		
		.item{
			float:right;
			}
		
		
		
       .logo_formulario{
			 width: 20%;
	         float:left;
		     
	        }
		
		
		form .glow-on-hover{
			margin-left: 50%
		}
			
		body{background: white}
	</style>-->
	

	<script>
/*-=-=-=-=-=-  VALIDAÇÃO DO FORMULÁRIO -=-=-=-=-=-*/
function valida_formulario()
{
	valida = document.clientes; 
	if(valida.nome.value=="")
		{
			alert("O campo nome é de preenchimento obrigatório!");
			valida.nome.focus();
			return false;
		}
	
	if(valida.morada.value=="")
		{
			alert("O campo morada é de preenchimento obrigatório!");
			valida.morada.focus();
			return false;
		}
	
	if(valida.cod_postal.value=="")
		{
			alert("O campo código postal é de preenchimento obrigatório!");
			valida.cod_postal.focus();
			return false;
		}
	if(valida.nif.value=="")
		{
			alert("O campo nif é de preenchimento opcional!");
			//valida.nif.focus();
			//return false;
		}
	if(valida.telefone.value=="")
		{
			alert("O campo telefone é de preenchimento obrigatório!");
			valida.telefone.focus();
			return false;
		}
	if(valida.observacoes.value=="")
		{
		   alert("O campo observações é de preenchimento opcional!");
		   	
		}

return true; 
}
/*-=-=-=-=-=-  FIM VALIDAÇÃO DO FORMULÁRIO -=-=-=-=-=-*/

</script>
	
	
</head>

<body>
	
<section class="nav-bar">
  <div class="nav-container">
  	<div class="brand">
  		<img src="../images/logo_escola_canina.png">
    </div>
  <!--<img src="../images/logo_escola_canina.png">-->
    <nav>
      <div class="nav-mobile"><p>Menu</p> <a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="../index.php"><img src="../images/icon_home.png" alt="home" class="icon_home"> Página Inicial</a>
        </li>
        <li>
          <a href="../sobre_nos/index.html"><img src="../images/icon_sobrenos.png" alt="sobre-nos" class="icon_sobre_nos"> Sobre Nós</a>
        </li>
        <li>
          <a href="../contatos/index.html"><img src="../images/icon_contactos.png" alt="contatos" class="icon_contatos"> Contatos</a>
        </li>
        <li>
          <a href="../encomendas_racao/index.php" class="active"><img src="../images/icon_encomendas_racao.png" alt="encomendas-racao" class="icon_encomendas"> Encomendas Ração</a>
        </li>
        <li>
          <a href="../login/"><img src="../images/icon_gestao.png" alt="estado_encomenda" class="icon_estado_encomenda"> Administrador</a>
        </li>
      </ul>
    </nav>
  </div>
</section> <!-- .nav-bar -->
	
	<?php
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //  if (isset($_POST['id_racao'])) { // ['encomenda'] 
    //   $id = $_POST['id_racao'];
	
	//echo $id;}
//}
	$id_racao=$_POST['racao'];
	//echo $id_racao;

	//$id=$_POST['id_racao'];
	$consultaSQL = "SELECT * FROM racao WHERE id_racao=$id_racao";
	
                $resultado = mysqli_query($conexao, $consultaSQL);
                if (!$resultado) {
                    die("Erro na consulta: " .mysqli_error($conexao));
                }

	            $dados=mysqli_fetch_array($resultado);
               // while ($linha = mysqli_fetch_assoc($resultado)) {
                   // echo '<option value="' . $linha['id_racao'] . '">' . $linha['tipo'] . '</option>';
                
	
        
		//echo $id;
	$id=$dados['id_racao'];
	$designacao=$dados['designacao'];
	$peso=$dados['peso'];
	$tipo=$dados['tipo'];
	$preco=$dados['preco'];
				
?>
	
	
	
	<div class="titulo_formulario">
	<h1>Formulário de Encomendas</h1>
	</div>
	<hr>

	  <br>
	  <br>
	  <br>

		<div>

            <form action="inserir_encomenda.php" name="clientes" method="post" onSubmit="return valida_formulario()">
			  <input type="hidden" name="id_racao" value="<?php echo ($id);?>">
			  <div>
			  <label>Nome Completo:</label>
			  <br>
			  <input type="text"  name="nome" maxlength="80">
			  </div>
			  <div>
				<label>Morada Completa:</label>
				<br>
               <input type="text" id="lname" name="morada" maxlength="100">
			   </div>
			   <div>
				<label>Código Postal:</label>
				<br>
               <input type="text" id="lname" name="cod_postal" maxlength="8">
			   </div>
			   <div>
			   <label>NIF:<sub> (Campo Opcional)</sub></label>
			   <br>
			   <input type="text" id="lname" name="nif" maxlength="9">
			   </div>
			   <div>
			   <label>Nº de Telefone:</label>
			   <br>	
			   <input type="text" id="lname" name="telefone" maxlength="9">
			   </div>
				<div>
				<label>Observações: <sub>(Campo Opcional)</sub> </label>	
				<input type="text" id="lname" name="observacoes">
				</div>
		
			<div class="inputs">
			   <input type="text" name="" value="<?php echo $designacao ;?>">
			 
			   <input type="text" name="" value="<?php echo $peso ;?>">
			   <input type="text" name="" value="<?php echo $tipo ;?>">
			   <input type="text" name="" value="<?php echo $preco ;?>">	
			</div>
	<!--<br>
	<br>
	<br>-->	<div>
				<input type="checkbox"/>
				Aceito que os meus dados sejam recolhidos temporariamente para o processamento da encomenda.<br/>
			 <b>Nota: </b>Após a entrega da sua encomenda procederemos à eliminação dos dados fornecidos.
			</div>
				
				
				
             <button class="glow-on-hover" type="submit">Enviar</button>
          </form>
      </div>
	<!--<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>-->
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