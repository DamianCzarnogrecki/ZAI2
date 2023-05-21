<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Login</title>
		<meta content="Damian Czarnogrecki" name="author">
		<link href="../libs/Bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://code.jquery.com/qunit/qunit-2.16.0.css">
        <script src="https://code.jquery.com/qunit/qunit-2.16.0.js"></script>
	</head>
	<body>
    <div id="qunit"></div>
		<main id="main">
        <div id="qunit-fixture">
            <table class="table table-striped">
                <tr>
                    {foreach $naglowki as $naglowek}
                        <th>{$naglowek}</th>
                    {/foreach}
                </tr>
                {foreach $godziny as $g => $godzina}
                    <tr>
                        <td>{$godzina}</td>
                        {foreach $lekcje as $lekcja}
                            <td>{$lekcja[$g]}</td>
                        {/foreach}
                    </tr>
                {/foreach}
            </table>
            <hr>
            <form method="post" action="../services/csvSaver.php">
                {include file='fields.tpl'}
                <button type="submit" class="btn btn-tertiary btn-lg btn-block">Zapisz do pliku CSV</button>
            </form>
            <hr>
            <form method="post" action="../services/jsonSaver.php">
                {include file='fields.tpl'}
                <button type="submit" class="btn btn-tertiary btn-lg btn-block">Zapisz do pliku JSON</button>
            </form>
            <hr>
            <form method="post" action="../services/xmlSaver.php">
                {include file='fields.tpl'}
                <button type="submit" class="btn btn-tertiary btn-lg btn-block">Zapisz do pliku XML</button>
            </form>
        </div>
		</main>

        <div style="display: flex; justify-content: center;">
            <button class="mt-5" onclick="swap()" id="swap-button">&#8633;</button>
        </div>

        <script>
            function swap()
            {
                var tabela = document.getElementsByClassName('table')[0];

                var nowaTabela = document.createElement('table');
                nowaTabela.classList.add('table');
                nowaTabela.classList.add('table-striped');

                var naglowekTabeli = document.createElement('thead');
                nowaTabela.appendChild(naglowekTabeli);

                var cialoTabeli = document.createElement('tbody');
                nowaTabela.appendChild(cialoTabeli);

                var noweWiersze = [];

                tabela.querySelectorAll('tr').forEach(function(wiersz){
                    var i = 0;
                    wiersz.querySelectorAll('td, th').forEach(function(komorka) {
                        i++;
                        if (noweWiersze[i] == undefined) noweWiersze[i] = document.createElement('tr');

                        var nowaKomorka = document.createElement(i == 1 ? 'th' : 'td');
                        nowaKomorka.innerHTML = komorka.innerHTML;

                        noweWiersze[i].appendChild(nowaKomorka);
                    });
                });

                noweWiersze.forEach(function(nowyWiersz, indeks){
                    if (indeks == 0) naglowekTabeli.appendChild(nowyWiersz);
                    else cialoTabeli.appendChild(nowyWiersz);
                });

                tabela.parentNode.insertBefore(nowaTabela, tabela.nextSibling);
                tabela.remove();
            }
        </script>

        <script>
            QUnit.test("Test transponowania tabeli", function(assert) {
                document.getElementById("swap-button").click();
                assert.equal(document.getElementsByClassName('table').length, 0, "Tabela oryginalna powinna zostać usunięta.");
                assert.equal(document.getElementsByTagName('table').length, 1, "Nowa tabela powinna zostać dodana..");
                var nowaTabela = document.getElementsByTagName('table')[0];
                var wiersze = nowaTabela.getElementsByTagName('tr');
                var kolumny = wiersze[0].getElementsByTagName('th').length;
                assert.equal(kolumny, 7, "Tabela powinna mieć 7 kolumn.");
                assert.equal(wiersze.length, 9, "Tabela powinna mieć 9 wierszy.");
            });
        </script>
	</body>
</html>