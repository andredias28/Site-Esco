<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    
    <div class="loginbox">
        <img src="imagens/avatar.png" class="avatar">
        <h1>Iniciar-Sessão</h1>
        <form method="post">
            <p>Número de Funcionário</p>
            <input type="text" name="numero" placeholder="Número de Funcionário">
            <p>Senha</p>
            <input type="password" name="passe" placeholder="Senha">
            <input type="submit" name="enviar" value="Entrar">
            <a href="Esqueceu.php">Esqueceu-se da senha?</a>
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
                echo "A senha ou o número esta mal";
            }
         }else if($pass == $dados['senha'] ){
             $up = "UPDATE professoresadministracao SET primeiro='0' WHERE Numero_P='$numero'";
             $resultado = mysqli_query($conn,$up);
             header('Location:primeirologin.php');
         }
    }else{
        echo "Não foi encontrado esse usuario";
    }
 
    }
}


?>