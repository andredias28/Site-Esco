<?php include('conexao.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="imagens/icon/favicon-96x96.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="adicionarServicos.css">
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
                    <a class="dropdown-item disabled" href="#">Serviço</a>
                    <a class="dropdown-item" href="categorias.php">Categoria</a>
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
                    <a href="paginainicio.html"><button id="botao" class="btn btn-danger">Terminar-Sessão</button></a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- Fim do Header -->


        <div class="Texto">
            <h1>Adicionar Serviços</h1>
        </div>
        <form method="post" action="">
            <div class="tabela">
                <label>Descrição do Serviço</label>
                <input type="text" name="descricaoServ">
            </div>
            <div class="tabela">
                <label>Categoria</label>
                <select name="categoria">
                <option></option>
                    <?php while($coluna = $categoria->fetch_assoc()){
                        $service = $coluna['descricao_Cate'];
                        echo "<option value='$service'>$service</option>";
                     }
                    ?>
                </select>
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
<!-- Fim dos Script's -->
</body>
</html>

<?php 

    if(isset($_POST['salvar'])){
        $categorias = $_POST['categoria'];
        $descricaoServico = $_POST['descricaoServ'];
        if(empty($categorias) && empty($descricaoServico)){
            echo "<script type='text/javascript'>alert('tem que preencher todos os campos');</script>";
        }else{
            $id = mysqli_query($conn, "SELECT id_categoria FROM categoria WHERE descricao_Cate = '".$categorias."'");
    /* Resolução do problema de insereção*/    
        $rows= $id->fetch_assoc();
        if(empty($categorias) || empty($descricaoServico)){
            echo "<script type='text/javascript'>alert('tem que preencher todos os campos');</script>";
        }else{
            if($stmt = $conn->prepare("INSERT INTO servico ( descricao, id_categoria) VALUES (?,?)")){
                $stmt->bind_param("ss",$descricaoServico,$rows['id_categoria']);
                $stmt->execute();
            if($stmt->error) die($stmt->error);
                header('location: Servicos.php');
            }else{
            die("erro na query");
                }
            }
        }
    }
?>