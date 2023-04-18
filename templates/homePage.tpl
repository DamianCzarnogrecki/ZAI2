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

		</main>
	</body>
</html>