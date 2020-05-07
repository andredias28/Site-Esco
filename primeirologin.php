<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="primeiro.css">
    <title>Nova palavra-passe</title>
</head>
<body>
<div class="loginbox">
        <h1>Nova palavra-passe</h1>
        <form method="post">
            <p>Numero</p>
            <input type="text" name="numeros" placeholder="Numero">
            <p>Nova palavra-passe</p>
            <input type="password" name="novapasse" placeholder="Nova palavra-passe">
            <p>Confirmar palavra-passe</p>
            <input type="password" name="confirmar" placeholder="Confirmar palavra-passe">
            <input type="submit" name="submeter" value="Muda Palavra">
        </form>
</body>
</html>

<?php
  include('conexao.php');



    if(isset($_POST['submeter'])){
        $novapasse= mysqli_escape_string($conn,$_POST['novapasse']);
        $confirmapasse= mysqli_escape_string($conn,$_POST['confirmar']);
        $numero = mysqli_escape_string($conn,$_POST['numeros']);


    }
    if(empty($novapasse) or empty($confirmapasse)){
        echo "Tem que preencher todos os campos";
    }
    else{
        $up = "UPDATE professoresadministracao SET senha='$novapasse' WHERE Numero_P='$numero'";
        $resultado = mysqli_query($conn,$up);
        header('Location:index.html');
    }


?>