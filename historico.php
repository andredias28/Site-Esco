<?php include('conexao.php');?>

<!DOCTYPE html>
<html lang="pt">

<!-- CSS --> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="historico.css">
    <title>Fornecedores</title>
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
                  <a class="nav-link disabled" href="historico.php">Historico</a>
                </li>
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
                  <a class="nav-link" href="professores.php">Professores</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="avaliacaoAdmin.php">Avaliação</a>
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

<!-- Tabela -->
<div class="cima">
        <a href="adicionarClassificacao.php"><button type="button" id="inserir" class="btn btn-success">Adicionar Classificação</button></a>
    </div>
            <table id="tabelaHistorico">
                <thead>
                    <tr>
                        <th>Fornecedor</th>
                        <th>Email</th>
                        <th>Quem avaliou</th>
                        <th>Data de avaliação</th>
                        <th>Cumprimento de prazos</th>
                        <th>Satisfação de requisitos técnicos</th>
                        <th>Não conformidades</th>
                        <th>Categoria</th>
                        <th>Classificação</th>
                        <th>Cumprimento do prazo</th>
                        <th>Satisfação de requisitos técnico</th>
                        <th>Não conformidades</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while(($row = mysqli_fetch_array($sql)) && ($rows = mysqli_fetch_array($historicoAvalia))){ ?> 
                      <tr>
                       <td><?php echo $row['nome_empresa']?></td>
                       <td><?php echo $row['email']?></td>
                       <td><?php echo $rows['nome']?></td>
                       <td><?php echo $rows['data']?></td>
                       <td><?php echo $rows['cumprimento']?></td>
                       <td><?php echo $rows['satisfacao']?></td>
                       <td><?php echo $rows['naoConformidades']?></td>
                       <td><?php echo $rows['categoria']?></td>
                       <td><?php echo $rows['classificacao']?></td>
                       <td><?php echo $rows['satisfacaoAv']?></td>
                       <td><?php echo $rows['cumprimentoAv']?></td>
                       <td><?php echo $rows['naoConformidadesAv']?></td>
                       </tr>
                    <?php } ?>
                </tbody>
            </table>
<!-- Fim da tabela -->

<!-- Script's -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
    $(document).ready( function () {
      $('#tabelaHistorico').DataTable();
   } );
</script>
<!-- Fim dos Script's -->
  </body>
</html>   