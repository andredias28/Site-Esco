<?php include('conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagens/icon/favicon-96x96.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Servicos.css">
    <link href="bootstrap.min.css" rel="stylesheet"/>
    <title>Serviço</title>
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
        <h1>Serviços</h1>
    </div>
</div>
<a href="adicionarServicos.php"><button type="button" id="inserir">Inserir</button></a>
<table id="tabelaFin">
        <thead>
             <tr>
                <th>id_Serviço</th>
                <th>Tipo do Serviço</th>
                <th>Categoria</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while(($rows = mysqli_fetch_array($servico))){ ?> 
                <tr>
                    <td><?php echo $rows['id_servico']?></td>
                    <td><?php echo $rows['descricao']?></td>
                    <td><?php echo $rows['descricao_Cate']?></td>
                    <td>
                        <a class="btn btn-success" href="alterarServico.php?editaSer=<?php echo $rows['id_servico']; ?>">Mudar</a>
                     </td>
                    <td>
                        <a class="btn btn-danger" href="Servicos.php?deleteSer=<?php echo $rows['id_servico']; ?>">X</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<!-- Script's -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
        <script>
             $(document).ready( function () {
             $('#tabelaFin').DataTable({
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
<!-- Fim dos Script's -->    
    </body>
</html>