<!DOCTYPE html>
<html>
<head>
    <link href="../libs/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="../libs/jQuery/jQuery.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'http://localhost/App/api/courses.php',
                dataType: 'json',
                success: function(dane) {
                    var gracze = dane;
                    var tabela = '<table class="table table-striped">' +
                        '<thead>' +
                        '<tr>' +
                        '<th>ID</th>' +
                        '<th>Nick</th>' +
                        '<th>Email</th>' +
                        '<th>Czas Rejestracji</th>' +
                        '<th>Ranga</th>' +
                        '<th>Zdjęcie Profilowe</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>';
                    for (var i = 0; i < gracze.length; i++) {
                        tabela += '<tr>';
                        tabela += '<td>' + gracze[i].id + '</td>';
                        tabela += '<td><strong><i>' + gracze[i].nick + '</i></strong></td>';
                        tabela += '<td>' + gracze[i].email + '</td>';
                        tabela += '<td>' + gracze[i].czas_rejestracji + '</td>';
                        tabela += '<td> <img src="../media/img/ranks/' + gracze[i].ranga + '.png" width="64px" height="64px"/></td>';
                        if (gracze[i].url_zdjecia_profilowego != null)
                            tabela += '<td> <img src="' + gracze[i].url_zdjecia_profilowego + '" width="128px" height="128px"/></td>';
                        else tabela += '<td> <img src="../media/img/placeholder.jpg" width="128px" height="128px"/></td>';
                        tabela += '</tr>';
                    }
                    tabela += '</tbody> </table>';
                    $('#tabelaGraczy').html(tabela);
                },
                error: function() { $('#tabelaGraczy').html('BŁĄD ZWRÓCENIA DANYCH Z API'); }
            });
        });
    </script>
</head>
<body>
    <div id="tabelaGraczy"></div>
</body>
</html>