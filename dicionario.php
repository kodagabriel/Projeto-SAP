<!DOCTYPE html>
<html lang="en" id="html-sap">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="O Projeto Sob a Pele (SAP) tem como objetivo permitir que todas e todos ouçam a voz e direitos de negras, negros, homossexuais, transexuais, entre outras. É sabido que práticas discriminatórias, de uma sociedade estruturalmente desigual, constantemente tentam calar e invisibilizar essas pessoas. Além disso, o SAP propõe soluções digitais e intervenções artísticas para o enfrentamento do racismo, sexismo, machismo, homofobia e transfobia, contribuindo para a formação de cidadania e inclusão social.">
  <meta name="author" content="Projeto SAP - UFOP">
  <link rel="shortcut icon" href="img/icon.ico">
  <link rel="icon" href="img/icon.ico">

  <title>Dicionário de Termos - Projeto SAP</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="vendor/accessibility/css/accessibility-buttons.css" rel="stylesheet">

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
	
  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.css" rel="stylesheet">
  
  <!-- custom css -->
  <link href="css/estilo.css" rel="stylesheet">
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        $.ajax({
           url : 'dicionario_termos.php', // your php file
           type : 'GET', // type of the HTTP request
           success : function(data){ 
              var obj = jQuery.parseJSON(data);
              primeiraCiencia = true;
                // Remove current options
              $("#dropdown-lista").html('');
              // Add the empty option with the empty message
              total = obj.length;
              var min=0 
              var max=obj.length-1;  
              
              var random =Math.floor(Math.random() * (+max - +min)) + +min; 

              $("#titulo").html(obj[random][1]);
              $("#texto").html(obj[random][2]);
              for (i = 0; i < obj.length; i++ ){
                $("#dropdown-lista").append('<a class="dropdown-item" href="#exibir-cards" onclick="exibir_termos('+i+')">' + obj[i][1] + '</a>');

              }
            }
        });
    
    }, false);
  </script>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="./index.html" style="	background: -webkit-linear-gradient(right, #61BDA4, #2C68B1); background: linear-gradient(right, #61BDA4, #2C68B1); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
		PROJETO SAP</a>
	  <span class="navbar-brand js-scroll-trigger text-medium up-font-size" onclick="aumenta_diminui_fonte('1')" style="background: -webkit-linear-gradient(right, #61BDA4, #2C68B1); background: linear-gradient(right, #61BDA4, #2C68B1); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> 
		A+</span>
	  <span class="navbar-brand js-scroll-trigger down-font-size" onclick="aumenta_diminui_fonte('2')" style="	background: -webkit-linear-gradient(right, #61BDA4, #2C68B1); background: linear-gradient(right, #61BDA4, #2C68B1); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> 
		A- </span>
	  
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
			  <li class="nav-item">
				<a class="nav-link navbar-alternative js-scroll-trigger" style=" color: #2C68B1" href="./index.html#about">SOBRE</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link navbar-alternative js-scroll-trigger" style=" color: #2C68B1" href="./historias.php" style=" color: #2C68B1">HISTÓRIAS</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link navbar-alternative js-scroll-trigger" style=" color: #2C68B1" href="./dicionario.php" style=" color: #2C68B1">DICIONÁRIO</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link navbar-alternative js-scroll-trigger" style=" color: #2C68B1" href="./jogos.html" style=" color: #2C68B1">JOGOS</a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link navbar-alternative dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" color: #2C68B1">
				  CONTATO
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="nav-link " style="color: purple;" href="https://www.facebook.com/projetosapufop/"  target="_blank">Facebook</a>
				  <a class="nav-link " style="color: purple;" href="https://www.instagram.com/projetosap"  target="_blank">Instagram </a>
				</div>
			  </li>
        </ul>
      </div>
    </div>
  </nav>

 

 <!-- sobre -->
<section id="sobre">
	<div class="container " style="padding-top: 50px;">
		<div class="row  align-items-center justify-content-center text-center">
			<div class="col-xs-12 col-lg-10 align-self-end">
				<h3 class="text-uppercase font-weight-bold m-5 ">
					Dicionário de Termos<hr class="divider">
				</h3>
			</div>
		</div>
		<div class="row"> 
			<div class="col-10 mx-auto text-justify">
				<p> O dicionário de termos foi feito, em principal, pelo colaborador Koda Gabriel. Além de vivências pessoais, enquanto pessoa transgênero, bissexual e negra de pele clara, contou também com o apoio e revisão de diversas pessoas dos mais diversos gêneros, sexualidades e raças. Um grupo de pessoas LGBT+ e negras da rede social Twitter ajudaram na revisão, corrigindo termos e acrescentando.   </p>
				<p> Para visualizar um termo, utilize o menu ou a lista alfabetica abaixo. </p>
				<p>Além disso, todos esses termos são diálogos em construção, e nunca uma definição concreta e completa. Sinta-se livre para entrar em contato conosco e sugerir alguma modificação ou termo a ser acrescentado. </p>
			</div>
			
		</div>
		<div class="container" id="exibir-cards">
		<div class="row">
			<div class="col-12 text-center">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="dropdown-mulheres" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 80%; ">Selecione um termo
						<span class="caret"></span>
					</button>
					<div id="dropdown-lista"class="dropdown-menu" aria-labelledby="dropdown-mulheres" style="width: 80%; height: 200px; overflow: auto;">
				    <a class="dropdown-item" href="#">Action</a>
				  </div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<section id="dummy"></section>
<section id="exibir">
	
</section>
<section>
<div class="container">
<div class="row">
      <div class="col-lg-9 mx-auto text-justify">
        <!--<div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" scrolling="no" name="janela" src="dicionario.html#0"></iframe>

        </div>-->
        <a href="#exibir-cards" onclick="exibir_termos_letra(1)" target="_self" class="btn btn-primary">A</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(2)" class="btn btn-secondary">B</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(3)" class="btn btn-tertiary">C</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(4)" class="btn btn-primary">D</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(5)" class="btn btn-secondary">E</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(6)" class="btn btn-tertiary">F</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(7)" class="btn btn-primary">G</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(8)" class="btn btn-secondary">H</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(9)" class="btn btn-tertiary">I</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(10)" class="btn btn-primary">J</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(11)" class="btn btn-secondary">K</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(12)" class="btn btn-tertiary">L</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(13)" class="btn btn-primary">M</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(14)" class="btn btn-secondary">N</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(15)" class="btn btn-tertiary">O</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(16)" class="btn btn-primary">P</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(17)" class="btn btn-secondary">Q</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(18)" class="btn btn-tertiary">R</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(19)" class="btn btn-primary">S</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(20)" class="btn btn-secondary">T</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(21)" class="btn btn-tertiary">U</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(22)" class="btn btn-primary">V</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(23)" class="btn btn-secondary">W</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(24)" class="btn btn-tertiary ">X</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(25)" class="btn btn-primary">Y</a>
        <a href="#exibir-cards" onclick="exibir_termos_letra(26)" class="btn btn-secondary">Z</a>
        

        <div class="container my-3 d-flex">
          <div class="row h-100 card-mulheres">
            <div class = "col-12" id ="exibir-descricao">
     

           </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mx-auto barralateral">
        <h2 class="historias-title">Termo Destaque</h2>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title  text-uppercase" id="titulo">SLUTSHAMING</h5>
            <p class="card-text text-left" id="texto">Quando se culpabiliza ou envergonha uma mulher ou pessoa designada mulher ao nascer por comportamentos sexuais ou pela forma com ela se veste.</p>
          </div>
        </div>
        <hr>

      </div>
    </div>


	</div>


</section>
  <!-- Footer -->
  <footer class="bg-light py-5">
      <div class="container">
      	<hr class="separador">
      <div class="row h-100 align-items-center footer-inicial" >
        <div class="col-sm-12 col-md-1 text-left">
			<img src="img/ufop.png" align="left" width="70px" class="space-right " />
		</div>
		<div class="col-md-12  col-lg-9  text-center paragrafo-footer" >
          <p class="mb-4">
            
            <p class="text-uppercase">
              <strong>Projeto SAP - Sob a Pele</strong>
            </p>
            <p> Universidade Federal de Ouro Preto <br />
                Minas Gerais - Brasil <br />
                Pró-Reitoria de Assuntos Comunitários e Estudantis
            </p>
          </p>
         </div>
		<div class="col-sm-12 col-md icones-sociais-gerencia text-right">
		<a href="https://www.facebook.com/projetosapufop/" target="_blank">
			<img src="img/facebook-logo.png" class="icones-sociais"> 
			</a>
		<a href="https://www.instagram.com/projetosap/" target="_blank">
			<img src="img/instagram-logo.png" class="icones-sociais">
			</a>
		</div>
        </div>
      </div>
    </div>

  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript personalizado -->
  <script src="js/personalizado.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.js"></script>

</body>

</html>
