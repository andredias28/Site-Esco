<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="esqueceu.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Nova Senha</title>
</head>
<body>
        <div class="loginbox">
        <h1>Nova Senha</h1>
        <form method="post">
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" name="numero" placeholder="Número">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" name="passe" placeholder="Senha">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirmaPasse" placeholder="Confirmar Senha">
        </div>
            <input class="btn" type="submit" name="enviar" value="Confirmar">
        </form>
</body>
</html>


<?php
include('conexao.php');

if(isset($_POST['enviar'])){
    $passe = mysqli_escape_string($conn, $_POST['passe']);
    $confirmaPasse= mysqli_escape_string($conn, $_POST['confirmaPasse']);
    $numero = $_POST['numero'];

    if(empty($passe) or empty($confirmaPasse)){
        echo "o campo tem que ser preenchio";
    }else{
        $up = "UPDATE professoresadministracao SET senha='$passe' WHERE Numero_P='$numero'";
        $resultado = mysqli_query($conn,$up);
        header('Location:paginainicio.html');
    }
}

?>