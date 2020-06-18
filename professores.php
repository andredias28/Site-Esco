<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagens/icon/favicon-96x96.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="professores.css">
    <title>Professores</title>
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
    <!-- DropDown -->
    <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Fornecedores</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="empresa.php">Empresa</a>
                    <a class="dropdown-item" href="Servicos.php">Serviço</a>
                    <a class="dropdown-item" href="categorias.php">Categoria</a>
                </div>
            </li>
<!-- Fim da DropDown -->
      <li class="nav-item">
        <a class="nav-link disabled active" href="#">Professores</a>
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
        <h1>Professores</h1>
    </div>
</div>
<a href="inserirProfessores.php"><button type="button" id="inserir">Inserir</button></a>
<!-- Tabela -->
          <table id="table">
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
               <?php while(($row = mysqli_fetch_array($professores))){ ?> 
                  <tr>
                    <td><?php echo $row['Numero_P']?></td>
                    <td><?php echo $row['nome']?></td>
                    <td><?php echo $row['email']?></td>
                    <td>
                      <a class="btn btn-danger" href="professores.php?deleteProf=<?php echo $row['Numero_P']; ?>">X</a>
                    </td>
                  </tr>
                <?php } ?>
            </tbody> 
          </table>
        </div>
      </div>

<!-- Fim da Tabela -->
<div class="footer">
    <img src="imagens/barra de logos.png" alt="barra de logos" class="barradelogos"/>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>        
        <script>
             $(document).ready( function () {
             $('#table').DataTable({
                 "language": {
                     "paginate": {
                         "previous": "Anterior",
                         "next": "Próximo"
                     },
                     "sSearch": "Pesquisar:",
                     "sInfoEmpty" : "Mostrando 0 até 0 registos de 0 registos",
                     "sEmptyTable" : "Não existem dados para serem mostrados",
                     "sInfoFiltered": "(filtro aplicado em MAX registos)",
                 }
             });
            } );
        </script>
  </body>
</html>

<!-- Salvar os dados do formulario na base de dados -->           
    <?php
        if(isset($_POST['salvar'])){
            $Numero = $_POST['numero'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telemovel = null;
            $senha = 'esco';
            $Ativo = 1;
            $primeiro = 1;
            $Perfil = 1;

            if($stmt = $conn->prepare("INSERT INTO professoresadministracao ( Numero_P, nome, email, telemovel, senha ,Ativo, primeiro, Perfil) VALUES (?,?,?,?,?,?,?,?)")){
                 $stmt->bind_param("ssssssss", $Numero,$nome,$email,$telemovel,$senha,$Ativo,$primeiro,$Perfil);
                 $stmt->execute();
                if($stmt->error) die($stmt->error);
                    header('location: adicionarprofessores.php');
            } else
            {
                die("erro na query"); 
            }
        }
    ?>
<!-- Fim do PHP -->

