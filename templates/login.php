<!DOCTYPE html>
<html lang="en">
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
					<form method="post" action="../services/login.php">
						<h1 class="fw-bold mb-3">Logowanie</h1>
						<br>
						<div class="form-outline form-white mb-4">
							<label class="form-label" for="fornickname">login</label>
							<input type="text" id="fornickname" class="form-control form-control-lg" name="nickname" />
						</div>
						<div class="form-outline form-white mb-4">
							<label class="form-label" for="forpassword">hasło</label>
							<input type="password" id="forpassword" class="form-control form-control-lg" name="password" />
						</div>
						<button class="btn btn-outline-dark btn-lg px-5" type="submit">zaloguj</button><br><br>
					</form>
				</div>
			</div>
		</main>
	</body>
</html>