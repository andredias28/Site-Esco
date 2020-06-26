<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="primeiro.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Primeiro Login</title>
</head>
<body>
<div class="loginbox">
        <h1>Primeiro Login</h1>
        <form method="post">
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" name="numero" placeholder="Número">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" name="novapasse" placeholder="Senha">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirmar" placeholder="Confirmar Senha">
        </div>
            <input class="btn" type="submit" name="enviar" value="Confirmar">
        </form>
</body>
</html>

<?php
  include('conexao.php');



    if(isset($_POST['enviar'])){
        $novapasse= mysqli_escape_string($conn,$_POST['novapasse']);
        $confirmapasse= mysqli_escape_string($conn,$_POST['confirmar']);
        $numero = mysqli_escape_string($conn,$_POST['numero']);
    }
    if(empty($novapasse) or empty($confirmapasse)){
        echo "Tem que preencher todos os campos";
    }
    else{
        $up = "UPDATE professoresadministracao SET senha='$confirmapasse' WHERE Numero_P='$numero'";
        $teste = mysqli_query($conn,$up);
        header('Location:paginainicio.html');
    }


?>