<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Login</title>
		<meta content="Damian Czarnogrecki" name="author">
		<link href="../../libs/Bootstrap/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://code.jquery.com/qunit/qunit-2.16.0.css">
        <script src="https://code.jquery.com/qunit/qunit-2.16.0.js"></script>
	</head>
	<body>
	<div id="qunit"></div>
	<main id="main">
	<div id="qunit-fixture">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Dostęp: {$dostep}</h5>
					<div>
						<button type="button" onclick="minimizeModal()" id="minmax-button">
							<span id="min-max-icon">_</span>
						</button>
						<button type="button" onclick="closeModal()" id="close-button">
							<span>x</span>
						</button>
					</div>
				</div>
				<div class="modal-body">
					<span id="imie">{$imie}</span>
					<span id="nazwisko">{$nazwisko}</span>
					<hr>
					<a href="{$link}">link</a>
				</div>
			</div>
		</div>
	</div>
	</main>

	<script>
		var isMinimized = false;

		function closeModal()
		{
			document.getElementsByClassName('modal-dialog')[0].remove();
		}
		
		function minimizeModal()
		{
			if(!isMinimized)
			{
				document.getElementsByClassName('modal-body')[0].style.display = 'none';
				document.getElementById('min-max-icon').textContent = '☐';
				isMinimized = true;
			}
			else
			{
				document.getElementsByClassName('modal-body')[0].style.display = '';
				document.getElementById('min-max-icon').textContent = '_';
				isMinimized = false;
			}
		}
	</script>
	<script>
		QUnit.test("Test minimalizacji, maksymalizacji i zamykania powiadomienia", function(assert) {
			var powiadomienie = document.getElementsByClassName('modal-content')[0];
			var przyciskMinimalizacji = document.getElementById('minmax-button');
			var trescPowiadomienia = document.getElementsByClassName('modal-body')[0];
			var przyciskZamkniecia = document.getElementById('close-button');

			assert.equal(przyciskMinimalizacji.getAttribute('onclick'), 'minimizeModal()', 'Przycisk ma przypisany atrybut.');
			assert.equal(trescPowiadomienia.style.display, '', 'Powiadomienie jest początkowo widoczne.');
			przyciskMinimalizacji.click();
			assert.equal(trescPowiadomienia.style.display, 'none', 'Powiadomienie może zostać zminimalizowane.');
			przyciskZamkniecia.click();
			assert.equal(powiadomienie.parentNode, null, 'Powiadomienie może zostać zamknięte.');
		});
	</script>
</body>
</html>