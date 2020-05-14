<?php include('conexao.php');
ob_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="shortcut icon" href="imagens/icon/favicon-96x96.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="adicionarClassificacao.css">
    <title>Adicionar Classificaçã</title>
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
                        <a class="nav-link" href="adicionarprofessores.php">Professores</a>
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
            <h1>Inserir Avaliações</h1>
        </div>
        <form method="post" action="">
            <div class="tabela">
                <label>Fornecedores</label>
                <select name='fornecedor'>
                    <option></option>
                    <?php while($coluna = $sql->fetch_assoc()){
                            $service = $coluna['nome_empresa'];
                            echo "<option value='$service'>$service</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="tabela">
                <label>Servico</label>
                <select name='servico'>
                    <option></option>
                    <?php while($coluna = $servico->fetch_assoc()){
                            $service = $coluna['descricao'];
                            echo "<option value='$service'>$service</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="tabela">
                <label>Email</label>
                <select name="Email">
                    <option></option>
                    <?php while ($coluna = $irbuscaremail->fetch_assoc()){
                        $teste = $coluna['email'];
                        echo "<option value='$teste'>$teste</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="tabela">
            <label>Quem Avalia</label>
                <select name="quem_Avalia">
                    <option></option>
                    <?php while($coluna = $professores->fetch_assoc()){
                            $service = $coluna['nome'];
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
    $fornecedor = $_POST['fornecedor'];
    $servicos = $_POST['servico'];
    $email = $_POST['Email'];
    $quemAvalia = $_POST['quem_Avalia'];
    $idEmpresa = mysqli_query($conn, "SELECT id_empresa FROM empresa WHERE nome_empresa = '".$fornecedor."'");
    $numero = mysqli_query($conn, "SELECT Numero_P FROM professoresadministracao WHERE nome = '".$quemAvalia."'");
    $servicoAv = mysqli_query($conn, "SELECT id_servico FROM servico WHERE descricao = '".$servicos."'");
    $Email = mysqli_query($conn, "SELECT email FROM empresa WHERE email='".$email."'");
    /* Resolução do problema de insereção*/    
        $rows= $idEmpresa->fetch_assoc();
        $numeros = $numero->fetch_assoc();
        $services = $servicoAv->fetch_assoc();
        $Emailrow = $Email->fetch_assoc();
        echo $numeros['Numero_P'];
        if($stmt = $conn->prepare("INSERT INTO avaliacao ( Numero, id_empresa) VALUES (?,?)")){
            $stmt->bind_param("ss",$numeros['Numero_P'],$rows['id_empresa']);
            $stmt->execute();
            header('location: avaliacao.php');
        if($stmt->error) die($stmt->error);
            header('location: avaliacao.php');
        }else{
        die("erro na query");
        }
        ob_enf_fluch();
}

?>