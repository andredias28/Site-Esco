<?php include('conexao.php'); 
ob_start();

if(isset($_GET['edita'])){
    $id_empresa = $_GET['edita'];
    $teste = $conn->query("SELECT * FROM empresa WHERE id_empresa=$id_empresa") or die($conn->error());

        $row = $teste->fetch_array();
        $nomeEmpresa = $row['nome_empresa'];
        $morada_empresa = $row['morada'];
        $email_empresa = $row['email'];
        $codigoPostal_Empresa = $row['codigoPostal'];
        $numeroTelemovel_Empresa = $row['numeroTelemovel'];

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
    <link rel="stylesheet" href="alterarEmpresa.css">
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
                        <a class="dropdown-item disabled">Empresa</a>
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
                            <a href="index.html"><button id="botao" class="btn btn-danger">Terminar-Sessão</button></a>
                        </div>
                    </li>
                </ul>
            </div>
         </nav>
<!-- Fim do Header -->
    <div class="Texto">
        <h1>Alterar Empresa</h1>
    </div>
<!-- Formulario -->
    <div class="formulario">
        <form method="post">
            <div class="form-group">
                <label>Fornecedor</label>
                <input type="text" class="form-control"
                       value="<?php echo $nomeEmpresa; ?>" name="fornecedor" placeholder="Fornecedor">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email"
                       value="<?php echo $email_empresa; ?>" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Telemovel</label>
                <input type="text" maxlength="9" name="numeroTelemovel"
                       value="<?php echo $numeroTelemovel_Empresa; ?>" class="form-control cel-sp-mask" data-mask="000 000 000" placeholder="Telemovel">
            </div>
            <div class="form-group">
                <label>Codigo-Postal</label>
                <input type="text" class="form-control"
                       value="<?php echo $codigoPostal_Empresa; ?>" name="codigoPostal" data-mask="0000-000" maxlength="7" type="text" placeholder="Codigo-Postal">
            </div>
            <div class="form-group">
                <label>Morada</label>
                <input type="text" name="morada"
                       value="<?php echo $morada_empresa; ?>" class="form-control" placeholder="Morada">
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
        $nome = $_POST['fornecedor'];
        $morada = $_POST['morada'];
        $email = $_POST['email'];
        $codigo_postal = $_POST['codigoPostal'];
        $numeroTelemovel = $_POST['numeroTelemovel'];

        if(empty($nome) || empty($morada) || empty($email) || empty($codigo_postal) || empty($numeroTelemovel)){
            echo "<script type='text/javascript'>alert('tem que preencher todos os campos');</script>";
        }else{
            mysqli_query($conn, "UPDATE empresa SET nome_empresa = '$nome', morada = '$morada', email = '$email', codigoPostal = '$codigo_postal', numeroTelemovel = '$numeroTelemovel' WHERE id_empresa = $id_empresa");
            header('location: empresa.php');
            ob_enf_fluch();
        }
    }
?>

