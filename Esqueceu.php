<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="esqueceu.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Esqueceu Senha</title>
</head>
<body>
        <div class="loginbox">
        <h1>Esqueceu senha?</h1>
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
            <input type="password" name="passe" placeholder="Confirmar Senha">
        </div>
            <input class="btn" type="submit" name="enviar" value="Confirmar">
        </form>
</body>
</html>


<?php
include('conexao.php');

if(isset($_POST['enviar'])){
    $email = mysqli_escape_string($conn, $_POST['email']);
    $confirmaemail= mysqli_escape_string($conn, $_POST['confirmaemail']);

    if(empty($email) or empty($confirmaemail)){
        echo "o campo tem que ser preenchio";
    }else{$up = "UPDATE professoresadministracao SET primeiro='0' WHERE numero='$numero'";
        $resultado = mysqli_query($conn,$up);
        header('Location:primeirologin.php');
    }
}

?>