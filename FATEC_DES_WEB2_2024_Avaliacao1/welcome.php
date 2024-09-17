<?php
require('header.php');

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
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]) ?>!
        <br>
        </b>Bem vindo ao SDF (Sistema de Demandas Fatec)</h1>
    </div>
    <p>

         <?php if ($_SESSION["username"] === 'Coordenação'): // verificação de usuário, se não for coordenação, não aparece o botão de cadastro ?> 
        <a href="cadastro.php" class="btn btn-primary">Cadastro Demandas</a>
        <br><br>
        <?php endif; ?>
        <a href="DSM.php" class="btn btn-success">Visualizar solicitações DSM</a>
        <br><br>
        <a href="GE.php" class="btn btn-success">Visualizar solicitações GE</a>
        <br><br>
        <a href="todes.php"  class="btn btn-success">Visualizar todas solicitações</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>