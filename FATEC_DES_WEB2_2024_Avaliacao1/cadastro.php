<?php
require('header.php');

/*esse if verifica se o usuário que está acessando não é o coordenação, mesmo os tecnicos não tendo acesso ao botão cadastro, ele poderia acessar pelo caminho
dessa forma o problema foi resolvido */

if ($_SESSION["username"] !== 'Coordenação') {
    header("location: welcome.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Demandas</h2>
        <p>Cadastrar sua Demanda</p>

<form action="registro.php" method="POST">
            <div class="form-group">
                <label for="laboratorio">Laboratório</label>
                <select name="laboratorio" id="laboratorio" class="form-control" required> <!-- bloqueado para em branco -->
                    <option value=""></option>
                    <option value="Laboratorio 1">Laboratório 1</option> <!-- consultei documentação bootstrap para formulário com opções -->
                    <option value="Laboratorio 2">Laboratório 2</option>
                    <option value="Laboratorio 3">Laboratório 3</option>
                </select>
            </div>

            <div class="form-group">
                <label for="prazo">Prazo limite</label>
                <input type="text" name="prazo" id="prazo" class="form-control" placeholder="DD/MM/AAAA" required> <!-- bloqueado para em branco -->
            </div>

            <div class="form-group">
                <label for="solicitacao">Solicitação</label>
                <input type="text" name="solicitacao" id="solicitacao" class="form-control" placeholder="" required> <!-- bloqueado para em branco -->
            </div>

            <div class="form-group">
                <label for="curso">Curso Atendido</label>
                <select name="curso" id="curso" class="form-control" required> <!-- block, resolve o problema se o usuário não informar o curso, teria erro em qual txt carregar o chamado -->
                    <option value=""></option>
                    <option value="DSM">DSM</option>
                    <option value="GE">GE</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Cadastrar">
            </div>
        </form>

        <a href="welcome.php" class="btn btn-primary">Voltar</a>
    </div>    
</body>
</html>