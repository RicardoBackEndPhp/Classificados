<!DOCTYPE html>
<html>
<head>
	<title>Meu site</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css" />
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="<?php echo BASE_URL;?>" class="navbar-brand">Classificados</a>
			</div>
				<ul class="nav navbar-nav navbar-left">
				<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
					<h2>Olá <?php echo $_SESSION['cNome'] ?></h2> 
				<?php endif?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
					<li><a href="<?php echo BASE_URL;?>anuncios/meusAnuncios">Meus Anúncios</a></li>
					<li><a href="<?php echo BASE_URL;?>login/sair">Sair</a></li>
				<?php else: ?>
					<li><a href="<?php echo BASE_URL;?>cadastrar/cadastro">Cadastre-se</a></li>
					<li><a href="<?php echo BASE_URL;?>login/logar">Login</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>
	
	<?php $this->loadViewInTemplate($viewName, $viewData)  ?>


	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>