<?php
require('header.php');

$laboratorio = $_POST['laboratorio'];
$prazo = $_POST['prazo'];
$solicitacao = $_POST['solicitacao'];
$curso = $_POST['curso'];

// adicionado a variável arquivo, para definir se a demanda é DSM ou GE

if($curso == 'DSM') {
    $arquivo = 'DSM.txt';
} else {$arquivo = 'GE.txt';}

$fp = fopen($arquivo, 'a');

fwrite($fp, $laboratorio);
fwrite($fp, " | ");
fwrite($fp, $prazo);
fwrite($fp, " | ");
fwrite($fp, $solicitacao);
fwrite($fp, "\n");
fclose($fp);

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1>Demanda enviada!</h1>
    <p>Acesse o menu inicial para visualizar todas as demandas enviadas!</p>
    <a href="welcome.php" class="btn btn-primary">Voltar</a>
</body>
</html>