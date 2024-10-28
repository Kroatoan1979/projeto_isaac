<!DOCTYPE html>
<html lang="pt-PT">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Escola Canina</title>
	<!-- CSS -->

	<link type="text/css" rel="stylesheet" href="../styles.css"/>
</head>
<body>
<section class="nav-bar">
  <div class="nav-container">
    <nav>
      <div class="nav-mobile"><p>Menu</p> <a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="../index.php" class="active"><img src="../images/icon_home.png" alt="home" class="icon_home"> Página Inicial</a>
        </li>
        <li>
          <a href="index.html"><img src="../images/icon_sobrenos.png" alt="sobre-nos" class="icon_sobre_nos"> Sobre Nós</a>
        </li>
        <li>
          <a href="../contatos/"><img src="../images/icon_contactos.png" alt="contatos" class="icon_contatos"> Contatos</a>
        </li>
        <li>
          <a href="../encomendas_racao/"><img src="../images/icon_encomendas_racao.png" alt="encomendas-racao" class="icon_encomendas"> Encomendas Ração</a>
        </li>
        <li>
          <a href="../login/"><img src="../images/icon_gestao.png" alt="estado_encomenda" class="icon_estado_encomenda">Administrador</a>
        </li>
      </ul>
    </nav>
  </div>
</section> <!-- .nav-bar -->
<section class="politica_box">

		<h1>Política de privacidade</h1>
		<p>Estimados clientes e/ou visitantes da nossa página web,
			A proteção dos seus dados pessoais é importante para nós. Com os esclarecimentos seguintes, informamos
			quais são os seus dados que recolhemos e processamos quando usa a nossa página e as páginas às quais
			pode aceder através da nossa.
		</p>

	<br/>

		<h2>Breve descrição</h2>
		
		<h3>1. Responsável pelo Tratamento de Dados</h2>
		<p>A Escola Pshycomotora Canina é a responsável pelo tratamento dos dados pessoais recolhidos através do nosso site. Se tiver alguma questão sobre a presente Política de Privacidade ou sobre a forma como os seus dados são tratados, poderá entrar em contacto connosco através do e-mail  escola.pshycomotora.canina@gmail.com
		</p>
	    <h3>2. Dados Recolhidos e a sua Finalidade</h3>
	    <p>A Escola Pshycomotora Canina, recolhe apenas os dados pessoas estritamente necessários para a entrega da sua encomenda de ração. Esses dados serão eliminados, imediatamente, assim que a mesma seja entregue. Esses dados incluem:
		<br>	
			- Nome Completo
		<br>
			- Morada Completa
		<br>
			- Código Postal
		<br>
			- Nº de Telefone
		</p>
        <h3>3. Tempo de Conservação dos Dados</h3>
	    <p>Os dados pessoais recolhidos, pela Escola Pshycomotora Canina, são mantidos apenas pelo tempo estritamente necessário, para cumprir as finalidades acima referidas. Assim que esses dados deixem de ser necessários, serão eliminados, de forma segura e irreversível.
        </p>
	    <h3>4. Partilha de Dados Pessoais</h3>
        <p> A Escola Pshycomotora Canina, não partilha, vende, aluga ou distribui os dados pessoais dos utilizadores a terceiros.
	    </p>
	    <h3>4. Cookies</h3>
	    <p>A Escola Phsycomotora Canina, utiliza cookies para melhorar a experiência de navegação no site e analisar padrões de utilização. Os utilizadores podem gerir as preferências de cookies através das definições do seu navegador de internet. 
	    </p>
	    <h3>5. Contato</h3>
	    <p>Para questões adicionais ou reclamações relativas à privacidade e ao tratamento de dados pessoais, pode contatar-nos através do e-mail escola.phsycomotora.canina@gmail.com
	    </p>

	
	</section>

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