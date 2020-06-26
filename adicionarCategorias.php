<?php include('conexao.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="imagens/icon/favicon-96x96.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="adicionarCategoria.css">
    <title>InserirServiços</title>
</head>
<body>
<!-- Header -->
    <nav class="navbar navbar-expand-lg  navbar navbar-dark bg-primary">
            <a class="navbar-brand" href="paginainicialadmin.php"><img src="imagens/escobranco.png" alt="Esco logo" height="40px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="paginainicialadmin.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historico.php">Historico</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Fornecedores</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="empresa.php">Empresa</a>
                        <a class="dropdown-item" href="Servicos.php">Serviço</a>
                        <a class="dropdown-item" href="categorias.php">Categoria</a>
                      </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="professores.php">Utilizadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="avaliacaoAdmin.php">Avaliacao</a>
                    </li>
                    <li class="nav-item">
                        <div id="buttons">
                            <a href="perfil.php"><button id="perfil" class="btn btn-outline-light">Perfil</button></a>
                            <a href="paginainicio.html"><button id="botao" class="btn btn-danger">Terminar-Sessão</button></a>
                        </div>
                    </li>
                </ul>
            </div>
         </nav>
        <div class="Texto">
            <h1>Inserir Categoria</h1>
        </div>
        <form method="post" action="">
            <div class="tabela">
                <label>Descrição da Categoria</label>
                <input type="text" name="descricaoCat">
            </div>
            <div class="tabela">
            <button type="submit" name="salvar" class="button">Salvar</button>
            </div>
        </form>
<!-- Fim do Header -->
<!-- Script's -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<?php 
    if(isset($_POST['salvar'])){
        $descricaoCategoria = $_POST['descricaoCat'];
        if(empty($descricaoCategoria)){
            echo "<script type='text/javascript'>alert('tem que preencher todos os campos');</script>";
    }else{
        if($stmt = $conn->prepare("INSERT INTO categoria (descricao_Cate) VALUES (?)")){
            $stmt->bind_param("s",$descricaoCategoria);
            $stmt->execute();
            header('location: categorias.php');
        if($stmt->error) die($stmt->error);
            header('location: categorias.php');
    }else{
        die("erro na query");
     }
    }

}
?>