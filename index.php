<!doctype html>
<html>
<head>
<meta charset="utf-8">	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
	<link type="text/css" rel="stylesheet" href="estilo.css">
	<link type="text/css" rel="stylesheet" href="styles.css">

</head>

<body>



	
<section class="nav-bar">
  <div class="nav-container">
    <nav>
      <div class="nav-mobile"><p>Menu</p> <a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="#" class="active"><img src="images/icon_home.png" alt="home" class="icon_home"> Página Inicial</a>
        </li>
        <li>
          <a href="sobre_nos/"><img src="images/icon_sobrenos.png" alt="sobre-nos" class="icon_sobre_nos"> Sobre Nós</a>
        </li>
        <li>
          <a href="contatos/"><img src="images/icon_contactos.png" alt="contatos" class="icon_contatos"> Contatos</a>
        </li>
        <li>
          <a href="encomendas_racao/"><img src="images/icon_encomendas_racao.png" alt="encomendas-racao" class="icon_encomendas"> Encomendas Ração</a>
        </li>
        <li>
          <a href="login/"><img src="images/icon_gestao.png" alt="estado_encomenda" class="icon_estado_encomenda"> Administrador</a>
        </li>
      </ul>
    </nav>
  </div>
</section> <!-- .nav-bar -->

<div class="imagem_index">
  <img src="images/banner.jpg"/>
</div>
<!--<div>
	<div class="coluna1"></div>	
	<div class="coluna2"><img src="images/logotipo_phsycomotora_canina.jpg"></div>
<div class="coluna3"></div>-->



<footer>
		<p>&copy Copyright 2024 Escola Pshycomotora Canina | Todos os direitos reservados <br/> <a href="sobre_nos/politica_privacidade.php"> Política de Privacidade</a></p>
    
	</footer>


  <div id="cookie-banner" class="cookie-banner">
  <p>
				Usamos cookies para que nosso site funcione bem
				para si e para que possamos melhorá-lo continuamente.
              <br>
			  Os cookies necessários para 
              manter o site funcionando estão sempre ativos
            </p>
        <button id="accept-cookies">Aceitar</button>
        <button id="reject-cookies">Rejeitar</button>
    </div>


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
 <script src="scripts_cookies.js"></script>
</body>
</html>
