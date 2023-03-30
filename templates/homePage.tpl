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
		</main>
	</body>
</html>