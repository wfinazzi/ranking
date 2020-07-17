<!DOCTYPE html>
<html lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Ranking Digital Clubes de Futebol - São Paulo</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bootstrap 4 Mobile App Template">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('public/bootstrap/css/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
	<style>
		body {
			font-size:14px;
			height: 800px;
		}
		.form-error{
			font-size:12px;
			color:red;
		}
		li {
			list-style-type: none;
		}		

		.conteudo {    
			min-height: 800px;
		}
	</style>
</head>

<body>
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="<?= base_url(); ?>">Ranking Digital Clubes de Futebol - São Paulo</a>					
			</div>
		</nav>
	</header>