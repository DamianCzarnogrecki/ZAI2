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
				<h5 class="modal-title">{$nazwa_wydarzenia}</h5>
				<button type="button" class="close" data-dismiss="modal">
				  <span>&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<p>{$imie}</p>
				<p>{$nazwisko}</p>
				<hr>
				<p>{$miejsce}</p>
				<p>{$data}</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-primary">Zatwierdź</button>
			  </div>
			</div>
		  </div>
		</main>
	</body>
</html>



