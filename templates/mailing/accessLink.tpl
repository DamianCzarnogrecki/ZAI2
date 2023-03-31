<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Login</title>
		<meta content="Damian Czarnogrecki" name="author">
		<link href="../../libs/Bootstrap/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<main id="main">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Dostęp: {$dostep}</h5>
				<button type="button" class="close" data-dismiss="modal">
				<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<span>{$imie}</span>
				<span>{$nazwisko}</span>
				<hr>
				<a href="{$link}">link</a>
			</div>
			</div>
		</div>
		</main>
	</body>
</html>