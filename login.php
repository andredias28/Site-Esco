<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="shortcut icon" href="imagens/icon/favicon-96x96.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Iniciar-Sessão</title>
</head>
<body>
    
    <div class="loginbox">
        <h1>Iniciar-Sessão</h1>
        <form method="post">
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" name="numero" placeholder="Número">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" name="passe" placeholder="Senha">
        </div>
            <input class="btn" type="submit" name="enviar" value="Entrar">
            <a href="confirmarEmail.php">Esqueceu-se da senha?</a>
        </form>
</body>
</html>

<?php
include('conexao.php');

$Ativo = "SELECT Ativo FROM `professoresadministracao` Where Ativo = 1";


if(isset($_POST['enviar'])){
   $numero= mysqli_escape_string($conn, $_POST['numero']);
   $pass= mysqli_escape_string($conn, $_POST['passe']);

   if(empty($numero) or empty($pass)){
       echo "o campo tem que ser preenchio";
   }else{
    $sql = "SELECT Numero_P FROM professoresadministracao WHERE Numero_P = '$numero'";
    $resultado = mysqli_query($conn, $sql);

    if(mysqli_num_rows($resultado)>0){

        $sql = "SELECT Numero_P,senha,primeiro,Perfil FROM professoresadministracao WHERE Numero_P = '$numero' AND senha ='$pass'";
        $resultado = mysqli_query($conn, $sql);
        $dados = mysqli_fetch_array($resultado);

        if($dados['primeiro']==0){
            if($pass == $dados['senha'] ){
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['numero'] = $dados['Numero_P'];
            $_SESSION['tipo'] = $dados['Perfil'];
            if($dados['Perfil']==1){
                header('Location: paginainicialadmin.php');

            }else{
                header('Location: professoresinicial.php');
                //session_start();
                
            }
            
            }else{
                echo "<script type='text/javascript'>alert('A senha que inseriu esta errada');</script>";
            }
         }else if($pass == $dados['senha'] ){
             $up = "UPDATE professoresadministracao SET primeiro='0' WHERE Numero_P='$numero'";
             $resultado = mysqli_query($conn,$up);
             header('Location:primeirologin.php');
         }
    }else{
        echo "<script type='text/javascript'>alert('Número invalido');</script>";
    }
 
    }
}
?>