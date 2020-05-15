<?php include('conexao.php');
ob_start();

if(isset($_GET['editaCategoria'])) {
    $id_categoria = $_GET['editaCategoria'];
    $GuardaCategorias = $conn->query("SELECT * FROM categoria WHERE id_categoria=$id_categoria") or die($conn->error());

    $rows = $GuardaCategorias->fetch_array();
    $descricao_categoria = $rows['descricao_Cate'];
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="shortcut icon" href="imagens/icon/favicon-96x96.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="alterarCategoria.css">
    <title>AlterarEmpresa</title>
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
                    <a class="dropdown-item disabled" href="categorias.php">Categoria</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="professores.php">Professores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="avaliacaoAdmin.php">Avaliacao</a>
            </li>
            <li class="nav-item">
                <div id="buttons">
                    <a href="perfil.php"><button id="perfil" class="btn btn-outline-light">Perfil</button></a>
                    <a href="index.html"><button id="botao" class="btn btn-danger">Terminar-Sessão</button></a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- Fim do Header -->

<div class="Texto">
    <h1>Inserir Categoria</h1>
</div>

<!-- Formulario -->
<div class="formulario">
    <form method="post">
        <div class="form-group">
            <label>id_servico</label>
            <input type="text" class="form-control" name="fornecedor" value="<?php echo $id_categoria; ?>" disabled>
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input type="text" name="descricao" value="<?php echo $descricao_categoria; ?>" class="form-control" placeholder="Descrição">
        </div>
        <button type="submit" name="Alterar" class="button">Alterar</button>
    </form>
</div>

<!-- Fim do formulario -->

<!-- Script's -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script><!-- Fim dos Script's -->
<!-- Fim dos Script´s -->

</body>
</html>

<?php

if(isset($_POST['Alterar'])){
    $descricao = $_POST['descricao'];
    if(empty($descricao)){
        echo "<script type='text/javascript'>alert('tem que preencher todos os campos');</script>";
    }else{
        mysqli_query($conn, "UPDATE categoria SET descricao_Cate = '$descricao' WHERE id_categoria = '$id_categoria'");
        header('location: categorias.php');
        ob_enf_fluch();

    }
}

?>
