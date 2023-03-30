<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Login</title>
		<meta content="Damian Czarnogrecki" name="author">
		<link href="../libs/Bootstrap/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<main id="main">
			<div class="row d-flex align-items-center justify-content-center h-100">
				<div class="col-12 col-xl-4 text-center">
					<form method="post">
						<h1 class="fw-bold mb-3">Logowanie</h1>
						<br>
						<div class="form-outline form-white mb-4">
							<label class="form-label" for="login">login</label>
							<input type="text" id="login" class="form-control form-control-lg" name="login" />
						</div>
						<div class="form-outline form-white mb-4">
							<label class="form-label" for="haslo">hasło</label>
							<input type="password" id="haslo" class="form-control form-control-lg" name="haslo" />
						</div>
						<button class="btn btn-outline-dark btn-lg px-5" type="submit">zaloguj</button><br><br>
						<a href="{$link_rejestracji}"><button class="btn btn-outline-dark btn-md px-5" disabled>zarejestruj</a>
						<a href="{$link_resetu_hasla}"><button class="btn btn-outline-dark btn-md px-5" disabled>resetuj hasło</a>
					</form>
				</div>
			</div>
		</main>
	</body>
</html>