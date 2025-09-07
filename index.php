<?php
require_once("php/config.php");
//require_once("php/whatsapp.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- SEO -->
	<title><?= htmlspecialchars($name_page, ENT_QUOTES, 'UTF-8') ?></title>
	<meta name="description" content="Nutricionista em Bom Jardim/RJ. Presencial na Fisiomed e Integral Med Solutions. Consultas online no Brasil (Monnerat, Duas Barras, Cordeiro, Cantagalo e região). Agende sua consulta!">
	<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">

	<!-- Open Graph (Facebook, WhatsApp, Instagram, LinkedIn) -->
	<meta property="og:locale" content="pt_BR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?= htmlspecialchars($name_page, ENT_QUOTES, 'UTF-8') ?>">
	<meta property="og:description" content="Atendimento presencial em Bom Jardim/RJ (Clínicas Fisiomed e Integral Med Solutions). Consultas online para todo o Brasil, com foco em Monnerat, Duas Barras, Cordeiro, Cantagalo, Macuco, Carmo, Trajano de Moraes, Santa Maria Madalena, Aperibé, Santo Antônio de Pádua e Nova Friburgo. Resultados reais com acompanhamento humanizado.">
	<meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
	<meta property="og:image" content="<?= $BASE_URL ?>/images/layla-og.jpg">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?= htmlspecialchars($name_page, ENT_QUOTES, 'UTF-8') ?>">
	<meta name="twitter:description" content="Nutricionista em Bom Jardim/RJ. Presencial nas clínicas Fisiomed e Integral Med Solutions. Atendimentos online no Brasil, com foco nas cidades vizinhas. Agende sua consulta.">
	<meta name="twitter:image" content="<?= $BASE_URL ?>/images/layla-og.jpg">

	<!-- Favicons -->
	<link rel="icon" href="images/favicon.ico" sizes="any">
	<link rel="icon" type="image/png" href="images/favicon_round_white_512.png" sizes="512x512">
	<link rel="apple-touch-icon" href="images/favicon_round_white_512.png">

	<!-- CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-magnific-popup.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin:500,600,700&display=swap" rel="stylesheet">

	<!-- Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="css/helper.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- JSON-LD (SEO Local) -->
	<script type="application/ld+json">
		<?= $JSON_LD_STRING ?>
	</script>
</head>

<body>
	<!-- Whatsapp -->
	<div class="div_fixer">
		<a href="php/whatsapp.php" target="_blank" aria-label="Agendar consulta no WhatsApp">
			<img src="./images/integration/api-whatsapp-site.jpg"
				alt="Agendar consulta pelo WhatsApp com a Nutricionista Layla Barros"
				width="60" height="60" loading="lazy">
		</a>
	</div>

	<!--begin header -->
	<header class="header">
		<!--begin nav -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">

				<div class="navbar-header">
					<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>
					</button>

					<!-- logo -->
					<a href="#home_wrapper" class="navbar-brand" id="logo">
						<img src="images/logo.png" alt="Nutricionista Layla Barros em Bom Jardim RJ" class="logo-img">
					</a>
				</div>

				<div id="navbar-collapse-02" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home_wrapper">Início</a></li>
						<li><a href="#about">Sobre</a></li>
						<li><a href="#features">Benefícios</a></li>
						<li><a href="#results">Resultados</a></li>
						<li><a href="#testimonials">Feedback's</a></li>
						<li><a href="#location">Atendimento</a></li>
						<li><a href="#contact">Contato</a></li>
					</ul>
				</div>

			</div>
		</nav>
		<!--end nav -->
	</header>
	<!--end header -->

	<!--begin home section -->
	<section class="home-section" id="home_wrapper">
		<div class="container">
			<div class="row">

				<!-- Imagem da Nutricionista (leve e responsiva) -->
				<div class="col-md-6 text-center">
					<div class="hex-container">
						<picture>
							<source
								srcset="images/layla-hex-480.webp 480w,
                      					images/layla-hex-800.webp 800w,
                      					images/layla-hex-1200.webp 1200w"
								type="image/webp">
							<img
								src="images/layla-hex-800.jpg"
								srcset="images/layla-hex-480.jpg 480w,
                      					images/layla-hex-800.jpg 800w,
                      					images/layla-hex-1200.jpg 1200w"
								sizes="(max-width: 768px) 100vw, 520px"
								alt="Nutricionista Layla Barros em Bom Jardim RJ - Consultas presenciais e online"
								class="hex-image"
								width="800" height="800"
								fetchpriority="high">
						</picture>
					</div>
				</div>

				<!-- Texto e CTA (mantive seu H1) -->
				<div class="col-md-6">
					<h5>CUIDE DE VOCÊ</h5>
					<h1>Ajudo você a atingir o seu <span>OBJETIVO,</span> sem neura!</h1>
					<p>Acompanhamento nutricional humanizado com foco em resultados reais. Atendimento presencial em Bom Jardim/RJ e online para todo o Brasil.</p>
					<p>Transforme seus hábitos e conquiste bem-estar com quem entende de nutrição.</p>
					<a href="php/whatsapp.php" class="btn-profissional" target="_blank" rel="noopener">Agendar Consulta</a>
				</div>

			</div>
		</div>
	</section>


	<!--begin section-grey -->
	<section class="section-grey" id="about">
		<div class="container">
			<div class="row">
				<!-- Imagem -->
				<div class="col-md-6">
					<picture>
						<source
							srcset="images/layla-about-480.webp 480w,
							images/layla-about-800.webp 800w,
							images/layla-about-1200.webp 1200w"
							type="image/webp">
						<img
							src="images/layla-about-800.jpg"
							srcset="images/layla-about-480.jpg 480w,
							images/layla-about-800.jpg 800w,
							images/layla-about-1200.jpg 1200w"
							sizes="(max-width: 768px) 100vw, 520px"
							alt="Nutricionista Layla Barros em consultório — atendimento presencial em Bom Jardim/RJ e online"
							class="about-img img-responsive center-block"
							width="800" height="799"
							loading="lazy">
					</picture>
				</div>

				<!-- Texto + Ícones -->
				<div class="col-md-6 sobre-text">
					<h2>Sobre a Nutricionista</h2>

					<p><strong>Prazer, sou Layla Barros</strong>. Nutricionista graduada pela Universidade Estácio de Sá (UNESA),
						com pós-graduação em Nutrição Clínica Ortomolecular, Nutrição Funcional e Fitoterapia pela faculdade EnsinE,
						em Juiz de Fora - MG (CRN-4: 21101672).</p>

					<p>Com experiência em emagrecimento saudável, interpretação de exames laboratoriais, nutrição funcional
						e esportiva. <span class="sr-only">Atendo presencialmente em Bom Jardim/RJ e online em todo o Brasil.</span>
						Meu propósito é promover saúde e qualidade de vida através de uma alimentação equilibrada e consciente.</p>

					<!-- Ícones dentro da coluna -->
					<div class="about-icons">
						<div class="about-icon-item"><i class="fa fa-user-md"></i> Consultório Presencial</div>
						<div class="about-icon-item"><i class="fa fa-laptop"></i> Atendimento Online</div>
						<div class="about-icon-item"><i class="fa fa-heartbeat"></i> Nutrição Funcional</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	</section>
	<!--end section-grey -->

	<section class="section-white small-padding-top" id="features">
		<div class="container">

			<!-- Título -->
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="section-title">Benefícios do Acompanhamento</h2>
					<p class="section-subtitle">
						Conheça as vantagens de ter um plano alimentar personalizado com acompanhamento profissional.
					</p>
				</div>
			</div>

			<!-- Linha 1 -->
			<div class="row">
				<div class="col-md-4">
					<div class="feature-box ">
						<i class="fa fa-handshake-o"></i>
						<div class="feature-box-text">
							<h4>Atendimento Humanizado</h4>
							<p>Consultas com escuta ativa, acolhimento e foco nas suas necessidades individuais.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="feature-box">
						<i class="fa fa-leaf"></i>
						<div class="feature-box-text">
							<h4>Nutrição Funcional</h4>
							<p>Planos baseados em exames e sintomas, com foco na causa dos desequilíbrios.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="feature-box">
						<i class="fa fa-comments"></i>
						<div class="feature-box-text">
							<h4>Suporte Online</h4>
							<p>Tire dúvidas e receba apoio contínuo via WhatsApp durante o acompanhamento.</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Linha 2 -->
			<div class="row">
				<div class="col-md-4">
					<div class="feature-box">
						<i class="fa fa-clock-o"></i>
						<div class="feature-box-text">
							<h4>Flexibilidade de Horários</h4>
							<p>Agendamento facilitado, com opções para sua rotina, incluindo atendimentos aos sábados.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="feature-box">
						<i class="fa fa-line-chart"></i>
						<div class="feature-box-text">
							<h4>Foco em Resultados Reais</h4>
							<p>Acompanhamento contínuo com foco em metas sustentáveis e melhora de desempenho.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="feature-box custom-box">
						<i class="fa fa-heart custom-icon"></i>
						<div class="feature-box-text">
							<h4>Qualidade de Vida</h4>
							<p>Mais energia, autoestima e equilíbrio através da nutrição consciente e personalizada.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!--begin showcase section -->
	<section class="section-grey small-padding-top section-results" id="results">
		<div class="container">
			<div class="text-center">
				<h2 class="section-title">Resultados</h2>
				<p class="section-subtitle">Resultados reais alcançados com planos nutricionais personalizados.</p>
			</div>

			<div id="results-carousel" class="carousel slide" data-ride="carousel" data-interval="20000">

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#results-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#results-carousel" data-slide-to="1"></li>
					<li data-target="#results-carousel" data-slide-to="2"></li>
				</ol>

				<!-- Slides -->
				<div class="carousel-inner" role="listbox">

					<div class="item active">
						<div class="row">
							<div class="col-sm-4"><img src="./images/results/result-1.jpg" class="img-responsive"
									alt="Result 1"></div>
							<div class="col-sm-4"><img src="./images/results/result-2.jpg" class="img-responsive"
									alt="Result 2"></div>
							<div class="col-sm-4"><img src="./images/results/result-3.jpg" class="img-responsive"
									alt="Result 3"></div>
						</div>
					</div>

					<div class="item">
						<div class="row">
							<div class="col-sm-4"><img src="./images/results/result-4.jpg" class="img-responsive"
									alt="Result 4"></div>
							<div class="col-sm-4"><img src="./images/results/result-5.jpg" class="img-responsive"
									alt="Result 5"></div>
							<div class="col-sm-4"><img src="./images/results/result-6.jpg" class="img-responsive"
									alt="Result 6"></div>
						</div>
					</div>

					<div class="item">
						<div class="row">
							<div class="col-sm-4"><img src="./images/results/result-7.jpg" class="img-responsive"
									alt="Result 7"></div>
							<div class="col-sm-4"><img src="./images/results/result-8.jpg" class="img-responsive"
									alt="Result 8"></div>
							<div class="col-sm-4"><img src="./images/results/result-9.jpg" class="img-responsive"
									alt="Result 9"></div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</section>

	<!-- Feedback -->
	<section class="section-white small-padding-top section-results" id="testimonials">
		<div class="container">
			<div class="text-center">
				<h2 class="section-title">Feedback's</h2>
				<p class="section-subtitle">Confira os depoimentos de quem escolheu cuidar de si com um plano alimentar personalizado.</p>
			</div>

			<div id="testimonials-carousel" class="carousel slide" data-ride="carousel" data-interval="20000">

				<!-- Indicadores (apenas 2) -->
				<ol class="carousel-indicators">
					<li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#testimonials-carousel" data-slide-to="1"></li>
				</ol>

				<!-- Slides -->
				<div class="carousel-inner" role="listbox">

					<!-- Slide 1 -->
					<div class="item active">
						<div class="row">
							<div class="col-sm-4">
								<img src="./images/feedbacks/feedback-1.jpg" class="img-responsive" alt="Feedback 1">
							</div>
							<div class="col-sm-4">
								<img src="./images/feedbacks/feedback-2.jpg" class="img-responsive" alt="Feedback 2">
							</div>
							<div class="col-sm-4">
								<img src="./images/feedbacks/feedback-3.jpg" class="img-responsive" alt="Feedback 3">
							</div>
						</div>
					</div>

					<!-- Slide 2 -->
					<div class="item">
						<div class="row">
							<div class="col-sm-4">
								<img src="./images/feedbacks/feedback-4.jpg" class="img-responsive" alt="Feedback 4">
							</div>
							<div class="col-sm-4">
								<img src="./images/feedbacks/feedback-5.jpg" class="img-responsive" alt="Feedback 5">
							</div>
							<div class="col-sm-4">
								<img src="./images/feedbacks/feedback-6.jpg" class="img-responsive" alt="Feedback 6">
							</div>
						</div>
					</div>

				</div>

				<!-- Controles -->
				<a class="left carousel-control" href="#testimonials-carousel" data-slide="prev">
				</a>
				<a class="right carousel-control" href="#testimonials-carousel" data-slide="next">

				</a>

			</div>
		</div>
	</section>

	<!-- Location -->
	<section class="section-grey small-padding-top" id="location">
		<div class="container text-center">
			<h2 class="section-title">Onde me encontrar ?</h2>
			<p class="section-subtitle">Agende sua consulta em Bom Jardim - RJ.</p>

			<!-- Linha 1: Integral + Fisiomed -->
			<div class="row">
				<div class="col-sm-6">
					<div class="clinic-box">
						<p>
							<img src="images/integral-med-round.png"
								alt="Logo Clínica Integral Med Solutions"
								width="28" height="28"
								style="vertical-align:middle; margin-right:6px;">
							<strong>INTEGRAL MED SOLUTIONS</strong>
						</p>
						<p>Edifício Quirino Alves de Mello – 1º andar, sala 5. Bom Jardim/RJ.</p>
						<!-- Instagram -->
						<p>
							<a href="https://www.instagram.com/imsolutions20/" target="_blank" style="text-decoration:none;">
								<i class="fa fa-instagram" style="color:rgb(188, 166, 229); font-size:18px; margin-right:5px;"></i>@imsolutions20
							</a>
						</p>

						<span class="clinic-tag particular">PARTICULAR</span>

						<div class="map-container" style="margin-top:15px;">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230.9558239593975!2d-42.417614055761845!3d-22.152909277682447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x97f06c10de561b%3A0x24db34c846102b4d!2sEd.%20Quirino%20Alves%20De%20Mello!5e0!3m2!1spt-BR!2sbr!4v1745961654542!5m2!1spt-BR!2sbr"
								width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="clinic-box">
						<p>
							<img src="images/fisio-med-round.png"
								alt="Logo Clínica Fisiomed"
								width="28" height="28"
								style="vertical-align:middle; margin-right:6px;">
							<strong>FISIOMED</strong>
						</p>
						<p>Rua Nilo Peçanha, nº 154 (Centro). Bom Jardim/RJ.</p>
						<p>
							<!-- Instagram + GS Saúde -->
							<a href="https://www.instagram.com/clinicafisiomedbj/" target="_blank" style="text-decoration:none;">
								<i class="fa fa-instagram" style="color:rgb(188, 166, 229); font-size:18px;"></i>@clinicafisiomedbj
							</a>
							<a href="https://www.planogs.com.br/" target="_blank" style="margin-left:10px; text-decoration:none;">
								<img src="./images/gs-image-round.webp" alt="GS Saúde" title="Site GS Saúde" style="height:22px; vertical-align:middle; text-decoration: none;"> GS Saúde
							</a>
						</p>

						<span class="clinic-tag particular">PARTICULAR</span>

						<div class="map-container" style="margin-top:15px;">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d230.95842710127275!2d-42.41906818826572!3d-22.151323037489743!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x97f06e8f71b25f%3A0xa3648c73bf8cc6d!2sClinica%20Fisiomed!5e0!3m2!1spt-BR!2sbr!4v1756784763922!5m2!1spt-BR!2sbr"
								width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>

			<!-- Linha 2: Diagnostic (sem mapa) -->
			<div class="row" style="margin-top:30px;">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="clinic-box no-map">
						<p>
							<i class="fa fa-hospital-o" style="color:rgb(188,166,229); font-size:20px; margin-right:6px;"></i>
							<strong>CONSULTÓRIO DIAGNOSTIC</strong>
						</p>
						<p>Rua Monnerat, 36, SALA 105, Centro, Bom Jardim - RJ.</p>

						<span class="clinic-tag particular">PARTICULAR</span>
					</div>
				</div>
			</div>

		</div>
	</section>
	

	<!--begin contact -->
	<section class="section-whit small-padding-top" id="contact">

		<!--begin container-->
		<div class="container">

			<!--begin row-->
			<div class="row">

				<!--begin col-md-10 -->
				<div class="col-md-10 col-md-offset-1 text-center margin-bottom-40">

					<h2 class="section-title">Entre em Contato</h2>

					<p class="section-subtitle"> Fale comigo e tire suas dúvidas! Retorno garantido o mais breve
						possível.</p>

				</div>
				<!--end col-md-10 -->

			</div>
			<!--end row-->

			<!--begin row-->
			<div class="row margin-bottom-30">

				<!--begin contact form -->
				<form id="contact-form" class="contact" action="php/contact.php" method="post">

					<!--begin col-md-6-->
					<div class="col-md-6">
						<input class="contact-input white-input" required="" name="contact_names"
							placeholder="Nome completo*" type="text">

						<input class="contact-input white-input" required="" name="contact_email" placeholder="Email*"
							type="email">

						<input class="contact-input white-input" required="" name="contact_phone"
							placeholder="Telefone*" type="text">

					</div>
					<!--end col-md-6-->

					<!--begin col-md-6-->
					<div class="col-md-6">
						<textarea class="contact-commnent white-input" rows="2" cols="20" name="contact_message"
							placeholder="Enviar Mensagem..."></textarea>

					</div>
					<!--end col-md-6-->

					<!--begin col-md-12-->
					<input value="Enviar" id="submit-button" class="contact-submit" type="submit">
					<span id="form-loader" style="display:none; margin-left: 15px;"></span>
					<div id="form-message-placeholder"></div>

					<!--end col-md-12-->

				</form>
				<!--end contact form -->

			</div>
			<!--end row-->

		</div>
		<!--end container-->

	</section>
	<!--end contact-->

	<!--begin footer -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-6 footer-box">
					<h4>Sobre</h4>
					<p>Acredito que cada pessoa é única. Atuo com nutrição funcional e esportiva para te ajudar a
						conquistar
						bem - estar e emagrecimento de forma leve e saudável.</p>
					<div class="social-icons">
						<a href="mailto: <?= $email ?>?subject=Dúvidas%20sobre%20os%20produtos" title="Email">
							<i class="fa fa-envelope"></i>
						</a>
						<a href="https://www.instagram.com/nutri.laylabarros/" target="_blank" title="Instagram">
							<i class="fa fa-instagram"></i>
						</a>
						<a href="https://api.whatsapp.com/send/?phone=5522999222310" target="_blank"
							title="WhatsApp">
							<i class="fa fa-whatsapp"></i>
						</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 footer-box">
					<h4>Links</h4>
					<ul class="list-unstyled">
						<li><a href="#home_wrapper">Home</a></li>
						<li><a href="#about">Sobre</a></li>
						<li><a href="#results">Resultados</a></li>
						<li><a href="#testimonials">Feedback's</a></li>
						<li><a href="#contact">Contato</a></li>
					</ul>

				</div>

				<div class="col-md-4 col-sm-12 footer-box footer-contact">
					<h4>Contato</h4>
					<p><i class="fa fa-map-marker"></i> Bom Jardim - RJ.</p>
					<p><i class="fa fa-envelope"></i> nutrilaylabarros@gmail.com.</p>
					<p><i class="fa fa-whatsapp"></i> (22) 99922-2310.</p>
				</div>

			</div>
		</div>

		<div class="footer-bottom">
			<p class="copyright">© 2025 Layla Barros Nutricionista. Todos os direitos reservados.</p>
		</div>
	</footer>
	<!--end footer -->

	<!-- Load JS here for greater good =============================-->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.scrollTo-min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/button-effect.js"></script>

	<!-- Máscara para telefone -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<!-- Animação envio de mensagem -->
	<script>
		$(document).ready(function() {
			$('input[name="contact_phone"]').mask('(00) 00000-0000');
		});
	</script>

	<script>
		$(document).ready(function() {
			// Ajax envio formulário
			$('#contact-form').on('submit', function(e) {
				e.preventDefault(); // Impede recarregar a página

				var form = $(this);
				var submitBtn = $('#submit-button');
				submitBtn.prop('disabled', true); // evita duplo envio

				// Limpa mensagens anteriores
				$('#form-message').remove();

				$.ajax({
					url: form.attr('action'),
					type: form.attr('method'),
					data: form.serialize(),
					dataType: 'json',
					success: function(res) {
						var msg = res.status === 'sucesso' ?
							'<div style="color:#fff; background:#43a047; font-weight:bold; border-radius:6px; padding:10px 14px; display:inline-block; max-width:95vw; margin:8px auto 0 auto; font-size:16px;">✅ Mensagem enviada com sucesso!</div>' :
							'<div style="color:#fff; background:#c62828; font-weight:bold; border-radius:6px; padding:10px 14px; display:inline-block; max-width:95vw; margin:8px auto 0 auto; font-size:16px;">❌ Erro ao enviar. Tente novamente.</div>';

						// Mensagem discreta com <small>
						$('#form-message-placeholder').html(
							'<small id="form-message" class="text-center" style="display:none; font-size:15px;">' + msg + '</small>'
						);
						$('#form-message').fadeIn(600);
						setTimeout(function() {
							$('#form-message').fadeOut('slow');
						}, 3500);

						if (res.status === 'sucesso') {
							form.trigger("reset");
						}
					},
					error: function() {
						$('#form-message-placeholder').html(
							'<small id="form-message" class="text-center" style="display:none; color:#b71c1c; font-size:15px;">❌ Ocorreu um erro inesperado. Tente novamente.</small>'
						);
						$('#form-message').fadeIn(600);
						setTimeout(function() {
							$('#form-message').fadeOut('slow');
						}, 3500);
					},
					complete: function() {
						submitBtn.prop('disabled', false);
					}
				});
			});
		});

		// Sempre volta ao topo ao recarregar a página
		window.onload = function() {
			if (window.location.hash) {
				history.replaceState(null, null, window.location.pathname + window.location.search);
			}
			setTimeout(function() {
				window.scrollTo(0, 0);
			}, 10); // Garante execução depois do render
		};
	</script>

</body>

</html>