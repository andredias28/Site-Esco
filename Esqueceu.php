<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="esqueceu.css">
    <title>Esqueceu Senha</title>
</head>
<body>
<div class="loginbox">
        <h1>Esqueceu Senha</h1>
        <form>
            <p>Email</p>
            <input type="text" name="email" placeholder="Email">
            <p>Confirmar Email</p>
            <input type="text" name="confirmaemail" placeholder="Confirmar Email">
            <input type="submit" name="enviar" value="Login">
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