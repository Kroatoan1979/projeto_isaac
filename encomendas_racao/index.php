<?php
include("../conexao.php");
$conexao = conexao();
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>encomendas_racao</title>
	<link type="text/css" rel="stylesheet" href="../estilo.css">
	<link type="text/css" rel="stylesheet" href="../styles.css">
</head>

<body>

	<section class="nav-bar">
		<div class="nav-container">
			<nav>
				<div class="nav-mobile">
					<p>Menu</p><a id="nav-toggle" href="#!"><span></span></a>
				</div>
				<ul class="nav-list">
					<li>
						<a href="../index.php"><img src="../images/icon_home.png" alt="home" class="icon_home"> Página
							Inicial</a>
					</li>
					<li>
						<a href="../sobre_nos/index.html"><img src="../images/icon_sobrenos.png" alt="sobre-nos"
								class="icon_sobre_nos"> Sobre Nós</a>
					</li>
					<li>
						<a href="../contatos/index.html"><img src="../images/icon_contactos.png" alt="contatos"
								class="icon_contatos"> Contatos</a>
					</li>
					<li>
						<a href="#" class="active"><img src="../images/icon_encomendas_racao.png" alt="encomendas-racao"
								class="icon_encomendas"> Encomendas Ração</a>
					</li>
					<li>
						<a href="../login/"><img src="../images/icon_gestao.png" alt="estado_encomenda"
								class="icon_estado_encomenda"> Administrador</a>
					</li>
				</ul>
			</nav>
		</div>
	</section> <!-- .nav-bar -->

	<br>
	<br>
	<br>
	<h1 class="titulo_encomenda">Encomende a melhor Ração Premium connosco!</h1>
	<br>
	<h2 class="sub_titulo_encomenda">Se reside em Viseu, fazemos a entrega em sua casa, em 24H!</h2>
	<br>
	<h3 class="pagamento_racao">Pagamentos: Transferência Bancária, Monetário ou MBWay</h3>

	<br>
	<br>
	<br>

	<section class="racoes">
		<figure>
			<img src="../images/puppy3.jpg" alt="racao_puppy_15" class="imagem_racao">
			<figcaption>Ração Puppy 15kg<br><b>Preço: 49.95€</b></figcaption>
		</figure>

		<figure>
			<img src="../images/adult15.jpg" alt="racao_adult_large_15">
			<figcaption>Ração Adult Large 15Kg<br><b>Preço: 48.00€</b></figcaption>
		</figure>

		<figure>
			<img src="../images/adult_sensitive15.jpg" alt="racao_adult_sensitive_15" class="imagem_racao">
			<figcaption>
				Ração Adult Sensitive 15Kg <br /> <b>Preço: 61.50€</b>
			</figcaption>
		</figure>
		<figure>
			<img src="../images/adult_medium15.jpg" alt="racao_adult_medium_15" class="imagem_racao">
			<figcaption>Ração Adult Medium 15Kg<br /><b>Preço: 47.50€</b></figcaption>
		</figure>
		<figure>
			<img src="../images/adult_mini15.jpg" alt="racao_adult_mini_8" class="imagem_racao">
			<figcaption>Ração Adult Mini 8Kg<br/> <b>Preço: 32.75€</b></figcaption>
		</figure>
		<figure>
			<img src="../images/senior_15.jpg" alt="racao_senior_15" class="imagem_racao">
			<figcaption>Ração Senior 15kg <br/> <b>Preço: 41.95€</b></figcaption>
		</figure>
		<figure>
			<img src="../images/puppy3.jpg" alt="racao_puppy_3" class="imagem_racao">
			<figcaption>Ração Puppy 3kg <br/> <b>Preço: 13.50€</b></figcaption>
		</figure>
		<figure>
			<img src="../images/racao_puppy_large_breed_15.jpg" alt="racao_puppy_large_breed_15" class="imagem_racao">
			<figcaption>Ração Puppy Large 15Kg <br/> <b>Preço: 50.95€</b></figcaption>
		</figure>
		<figure>
			<img src="../images/adult_free15.jpg" alt="racao_adult_grain_free_15" class="imagem_racao">
			<figcaption>Ração Adult Grain Free 15Kg <br/> <b>Preço: 60.95€</b></figcaption>
		</figure>
		<figure>
			<img src="../images/adult_mini15.jpg" alt="racao_adult_mini_breed_3" class="imagem_racao">
			<figcaption>Ração Adult Mini 3Kg <br/> <b>Preço: 14.75€</b></figcaption>
		</figure>
		<figure>
			<img src="../images/adult_medium3.jpg" alt="racao_adult_medium_breed_3" class="imagem_racao">
			<figcaption>Ração Adult Medium 3Kg <br/> <b>Preço: 12.75€</b></figcaption>
		</figure>
		<figure>
			<img src="../images/adult_free15.jpg" alt="racao_adult_grain_free_3" class="imagem_racao">
			<figcaption>Ração Adult Grain Free 3Kg <br/> <b>Preço: 15.75€</b></figcaption>
		</figure>
		<figure>
			<img src="../images/adult_sensitive15.jpg" alt="racao_adult_sensitive_3" class="imagem_racao">
			<figcaption>Ração Adult Sensitive 3Kg <br/> <b>Preço: 15.70€</b></figcaption>
		</figure>
	</section>

	<!-- FORMULARIO -->
	<div class="formulario">
		<form action="formulario_encomenda.php" name="encomenda" method="post">
			<label>Faça a sua Encomenda</label>
			<select name="racao">
				<?php
                //$conexao = mysqli_connect("localhost", "root", "", "encomendas_racao");
                if (!$conexao) {
                    die("Falha na conexão: " . mysqli_connect_error());
                }

                $consultaSQL = "SELECT id_racao, tipo FROM racao";
                $resultado = mysqli_query($conexao, $consultaSQL);
                if (!$resultado) {
                    die("Erro na consulta: " . mysqli_error($conexao));
                }

                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo '<option value="' . $linha['id_racao'] . '">' . $linha['tipo'] . '</option>';
                }

                mysqli_close($conexao);
                ?>
			</select>


			<button class="glow-on-hover" type="submit" name="submit">Encomendar</button>

		</form>
	</div>



	<br>
	<br>
	<br>
	<!--<div class="rodape1">Copyright 2024 Escola Pshycomotora Canina | Todos os direitos reservados </div>-->
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