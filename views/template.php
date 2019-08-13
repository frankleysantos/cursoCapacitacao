<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Capacitação PMTO</title>
    <link href="<?=BASE_URL?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=BASE_URL?>assets/css/print.css" rel="stylesheet">
    <link href="<?=BASE_URL?>assets/css/default.css" rel="stylesheet">
		<script type="text/javascript" src="<?=BASE_URL?>assets/js/funcoes.js"></script>
    <script src="<?=BASE_URL?>assets/js/jquery.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  			<a class="navbar-brand" href="#">Capacitação</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNavDropdown">
    			<ul class="navbar-nav">
      				<li class="nav-item active">
        				<a class="nav-link" href="<?=BASE_URL?>">Home <span class="sr-only">(Página atual)</span></a>
      				</li>
      				<li class="nav-item dropdown">
                <a class="nav-link" href="<?=BASE_URL?>home/sair">Sair</a>
      				</li>
    			</ul>
  			</div>
		</nav>
		<div class="container">
		<?php
		//chama a view para dentro do template
		$this->carregaViewInTemplate($viewName, $viewDados);
		?>
        <!-- Footer -->
<footer class="page-footer font-small indigo hidden-print" style="background-color: white !important">
   
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://www.teofilootoni.mg.gov.br"> Prefeitura Municipal de Teófilo Otoni</a>
  </div>
  <!-- Copyright -->
  <div class="row">
    <div class="col-md d-flex justify-content-start">
      <img src="<?=BASE_URL?>assets/images/cpd.png" class="img-responsive" class="img-thumbnail" height="80px">
    </div>
    <div class="col-md d-flex justify-content-center">
      <img src="<?=BASE_URL?>assets/images/pmto.png" class="img-responsive" class="img-thumbnail" height="80px">
    </div>
    <div class="col-md d-flex justify-content-end">
      <img src="<?=BASE_URL?>assets/images/ufvjm.png" class="img-responsive" class="img-thumbnail" height="80px">
    </div>
  </div>

</footer>

		</div>
    <script src="<?=BASE_URL?>assets/js/bootstrap.min.js"></script>
    <script src="<?=BASE_URL?>assets/js/jquery.min.js"></script>
	</body>
</html>