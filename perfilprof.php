<?php
include('conexao.php');
ob_start();
$numero = $_SESSION['numero'];
$professore = mysqli_query($conn,"SELECT * FROM professoresadministracao WHERE Numero_P = $numero");
    while(($row = mysqli_fetch_array($professore))){
        $nome = $row['nome'];
        $email = $row['email'];
        $telemovel = $row['telemovel'];
        $senha = $row['senha'];
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="perfilprof.css">
    <link rel="stylesheet" type="text/css" href="jquery.dataTables.css">
    <title>Professores</title>
</head>
<body>

        <!-- Header -->
        <nav class="navbar navbar-expand-lg  navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="professoresinicial.php"><img src="imagens/escobranco.png" alt="Esco logo" height="40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="professoresinicial.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                                <a class="nav-link" href="avaliacao.php">Avaliacao</a>
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
        <div class="imagem">
        <img class="avatar" src="imagens/AvatarDois.png"/>
            <h1 class="userName">Perfil</h1>
        </div>
        <button id="altera" onclick="funcao()" class="btn btn-primary">Alterar</button>
        <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputNumver">Numero</label>
            <input type="text" class="form-control" id="numero" name="numero" disabled value="<?php echo $numero ?>">
            </div>
            <div class="form-group col-md-6">
            <label for="inputName">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" disabled placeholder="Nome" value="<?php echo $nome ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="email" name="email" disabled placeholder="Email" value="<?php echo $email ?>">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputPhone">Telemovel</label>
            <input type="text" data-mask="000 000 000" maxlength="9" name="telemovel" class="form-control" id="telemovel" disabled placeholder="Email" value="<?php echo $telemovel ?>">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" disabled placeholder="Password" value="<?php echo $senha ?>">
            </div>
        </div>
        <button name="Guardar" class="btn btn-primary">Guardar</button>
        </form>
        <div class="footer">
            <img src="imagens/barra de logos.png" alt="barra de logos" class="barradelogos"/>
            </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script><!-- Fim dos Script's -->
    </body>
</html>

        <script>
            document.getElementById("altera").addEventListener("click", myFunction);

            function funcao(){
                document.getElementById("nome").disabled = false;
                document.getElementById("email").disabled = false;
                document.getElementById("telemovel").disabled = false;
                document.getElementById("senha").disabled = false;

                }
        </script>

        <?php
            if(isset($_POST['Guardar'])){
                $name = $_POST['nome'];
                $mail = $_POST['email'];
                $tele = $_POST['telemovel'];
                $senha = $_POST['senha'];
                
                if(empty($name) || empty($mail) || empty($tele) || empty($senha)){
                    echo "<script type='text/javascript'>alert('tem que preencher todos os campos');</script>";
                }else{
                    mysqli_query($conn, "UPDATE professoresadministracao SET nome = '$name', email = '$mail', telemovel = '$tele', senha = '$senha' WHERE Numero_P = $numero");
                    header('location: perfil.php');
                    ob_enf_fluch();
                }
            }
        ?>




