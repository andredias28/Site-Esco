<?php include('conexao.php'); 
    ob_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="inserirProfessores.css">
    <title>InserirProfessores</title>
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
                        <a class="nav-link" href="professores.php">Utilizador</a>
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
            <h1>Inserir Professores</h1>
        </div>
        <form method="post" action="">
            <div class="tabela">
                <label>Numero*</label>
                <input type="number" name="numero">
            </div>
            <div class="tabela">
                <label>Nome*</label>
                <input type="text" name="nome">
            </div>
            <div class="tabela">
                <label>Email*</label>
                <input type="email" class="form-control cel-sp-mask" name="email">
            </div>
            <div class="tabela">
                <label>Telemovel(opcional)</label>
                <input type="text" class="form-control cel-sp-mask" data-mask="000 000 000" maxlength="9" name="tele">
            </div>
            <div class="tabela">
                <label>Senha*</label>
                <input type="password" name="senha">
            </div>
            <div class="tabela">
                <label>Confirmar senha*</label>
                <input type="password" name="confirmarSenha">
            </div>
            <div class="tabela">
                <label>Perfil*</label>
                <select name="Perfil">
                <option></option>
                <option>Utilizador</option>
                <option>Administração</option>
                </select>
            </div>
            <div class="tabela">
            <button type="submit" name="inserir" class="button">Inserir</button>
            </div>
        </form>
<!-- Fim do Header -->
<!-- Script's -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script><!-- Fim dos Script's -->
<!-- Fim dos Script's -->
</body>
</html>

<?php 

    if(isset($_POST['inserir'])){
        $numero = $_POST['numero'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telemovel = $_POST['tele'];
        $senha = $_POST['senha'];
        $confirmarSenha = $_POST['confirmarSenha'];
        $perfil = $_POST['Perfil'];
        $primeiro = 1;
        $Ativo = 1;

        if(empty($numero) || empty($nome) || empty($email) || empty($senha) || empty($confirmarSenha) || empty($perfil)){
            echo "<script type='text/javascript'>alert('tem que preencher todos os campos');</script>";
        }
        else{
            if($senha != $confirmarSenha){
                echo "<script type='text/javascript'>alert('A senha não é igual ao confirmar senha');</script>";
            }else{
                if($perfil == 'Utilizador'){
                    $perfil = '2';
                }else if($perfil == 'Administração'){
                    $perfil = '1';
                }

                if($stmt = $conn->prepare("INSERT INTO professoresadministracao (Numero_P, nome , email , telemovel , senha , primeiro , Perfil , Ativo) VALUES (?,?,?,?,?,?,?,?)")){
                    $stmt->bind_param("ssssssss",$numero,$nome,$email,$telemovel,$senha,$primeiro,$perfil,$Ativo);
                    $stmt->execute();
                    header('location: professores.php');
                    ob_enf_fluch();
                if($stmt->error) die($stmt->error);
                }
                else{
                die("erro na query");
                }
            }
        }
    }

?>