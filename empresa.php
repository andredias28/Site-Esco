<?php include('conexao.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="empresa.css">
    <title>Empresas</title>
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
                        <a class="dropdown-item disabled" href="#">Empresa</a>
                        <a class="dropdown-item" href="Servicos.php">Serviço</a>
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
        <h1>Empresas</h1>
    </div>
</div>
<a href="inserirEmpresa.php"><button type="button" id="inserir" class="btn btn-success">Inserir</button></a>
    <table id="teste">
        <thead>
             <tr>
                <th>Fornecedor</th>
                <th>Email</th>
                <th>telemovel</th>
                <th>Produto/Serviço</th>
                <th>Morada</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while(($row = mysqli_fetch_array($sql))){ ?> 
                <tr>
                    <td><?php echo $row['nome_empresa']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['numeroTelemovel']?></td>
                    <td><?php echo $row['descricao']?></td>
                    <td><?php echo $row['morada']?></td>
                    <td> 
                        <a class="btnAltera" href="alterarEmpresa.php?edita=<?php echo $row['id_empresa'];?>">Alterar</a>
                     </td>
                     <td>
                        <a class="btn btn-danger" href="empresa.php?delete=<?php echo $row['id_empresa']; ?>">X</a>
                     </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="footer">
        <img src="imagens/barra de logos.png" alt="barra de logos" class="barradelogos"/>
    </div>
<!-- Script's -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>        
        <script>
             $(document).ready( function () {
             $('#teste').DataTable();
            } );
        </script>
<!-- Fim dos Script's -->    
    </body>
</html>

<?php
    if(isset($_POST['salvar'])){
        $Fornecedor = $_POST['fornecedor'];
        $email = $_POST['email'];
        $produto = $_POST['produto'];

        if($stmt = $conn->prepare("INSERT INTO empresa ( nome_empresa, email, produto_servico) VALUES (?,?,?)")){
                $stmt->bind_param("sss",$Fornecedor,$email,$produto);
                $stmt->execute();
            if($stmt->error) die($stmt->error);
                header('location: adicionarempresa.php');
        }else{
            die("erro na query");
        }
    }
?>
    