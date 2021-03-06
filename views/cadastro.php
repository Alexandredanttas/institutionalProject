<?php
	session_start();
	if(!$_SESSION['tipo_de_acesso'] == 1){ header('Location: index.php'); }
	include('../models/functions.php');
	include('../controllers/cadastro_controller.php');
?>

<html lang="PT-BR">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrar ~ Quadro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body id="index">
	<nav class="navbar navbar-findcond">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar glyphicon glyphicon-option-vertical"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Grade Horária</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="quadro.php">voltar</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-fw fa-bell-o"></i> acesso 
							<span class="badge">
								<?php if($_SESSION['tipo_de_acesso'] == 1){ echo $_SESSION['tipo_de_acesso']; }?>
							</span>
						</a>
					</li>
					<li class="active"><a href="#"><?php echo $_SESSION['user_name']; ?></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="register">
		<div class="container">
			<div class="card card-container">
				<img class="profile-img-card" src="img/logo_escola.png" />
				<p id="profile-name" class="profile-name-card"></p>
				<form action="../controllers/cadastro_controller.php" method="post" class="form-signin">
					<span id="reauth-email" class="reauth-email"></span>
						<input type="text" id="inputCurso" class="form-control" placeholder="Curso" name="nome" required/>
						<input type="text" id="inputTurno" class="form-control" placeholder="Turno" name="turno" required/>
						<input type="text" id="inputEspaco" class="form-control" placeholder="Espaço(P12, P13)" name="espaco" required/>
						<input type="text" id="inputDisciplina" class="form-control" placeholder="Disciplina" name="disciplina" required/>
						<input type="text" id="inputSala" class="form-control" placeholder="Sala" name="sala" required/>
						<input type="text" id="inputProfessor" class="form-control" placeholder="Professor" name="professor" required/>
					<button type="submit" name="add" class="btn btn-lg btn-primary btn-block btn-signin">Cadastrar</button>
				</form><!-- /form -->
			</div><!-- /card-container -->
		</div><!-- /container -->
	</section>

	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="js/bootstrap-3.1.0.min.js"></script>
	<script>
		$('.close').click(function(){
			$('.alert').fadeOut();
		});
	</script>
</body>
</html>