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
            <input type="email" name="Email" placeholder="Email">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="email" name="confirmeEmail" placeholder="Confirmar Email">
        </div>
        <input class="btn" type="submit" name="enviar" value="Confirmar">
    </form>
</body>
</html>


<?php
    include('conexao.php');
    ob_start();

if(isset($_POST['enviar'])){
        $numero = $_POST['numero'];
        echo $numero;
        $emailBd = mysqli_query($conn,"SELECT email FROM professoresadministracao WHERE Ativo='1' and Numero_P='".$numero."'");
        $converterEmail = $emailBd->fetch_assoc();
        $emailteste = $converterEmail['email'];
        $email = $_POST['Email'];
        $confirmaemail = $_POST['confirmeEmail'];
        if(empty($email) || empty($confirmaemail)){

        }else{
            session_start();
            $_SESSION['emailEnviar'] = $emailteste;
            header('Location: enviarEmail.php');
            ob_enf_fluch();
        }
}

?>