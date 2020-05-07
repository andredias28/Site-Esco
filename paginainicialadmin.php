<?php 
    session_start();
    if($_SESSION['logado']==true){

    }else{
        header('Location:index.html');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="paginainicialadmin.css">
    <link rel="stylesheet" href="historico.css">
    <title>SiteEsco</title>
</head>
    <body>
<!-- NavBar -->
    <nav class="navbar navbar-expand-lg  navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="paginainicialadmin.php"><img src="imagens/escobranco.png" alt="Esco logo" height="40px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="paginainicialadmin.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="historico.php">Historico</a>
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
<!-- Fim da NavBar -->
<table id="tabelaProcessadores">
                <thead>
                    <tr>
                        <th colspan="7">Sistema de Gestão da Qualidade</th>        
                    </tr>
                </thead>
                <thead>
                        <tr>
                            <th>Áreas</th>
                            <th> </th>
                            <th>Processos</th>
                            <th>Nº(s)</th>
                            <th>Nome</th>
                            <th>Intervenientes</th>
                            <th>Indicadores</th>
                        </tr>
                </thead>
                <tbody>
                        <tr>
                            <td rowspan="6">
                                A Desenvolver a estratégia
                            </td>
                            <td rowspan="3">A01</td>
                            <td>Modelo</td>
                            <td>NA</td>
                            <td rowspan="3">Planear a estratégia e as atividades</td>
                            <td rowspan="3">Diretora / DP / Sandra Alfaiate / Gab. Comunicação</td>
                            <td>Autonomia Financeira</td>
                        </tr>
                        <tr>
                            <td>Procedimento</td>
                            <td></td>
                            <td rowspan="2">Taxa de satisfação dos cursos</td>
                        </tr>
                        <tr>
                            <td>Fluxograma</td>
                            <td>A01</td>
                        </tr>
                        <!--- Fim do A01 !-->
                        <tr>
                            <td rowspan="3">A02</td>
                            <td>Modelo</td>
                            <td>023</td>
                            <td rowspan="3">Analisar a realização das atividades</td>
                            <td rowspan="3">Equipa Qualidade / Diretora / DP / Sandra Alfaiate / Gab. Comunicação</td>
                            <td rowspan="3">Taxa de execução do Plano de Ação</td>
                        </tr>
                        <tr>
                            <td>Procedimento</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Fluxograma</td>
                            <td>A02</td>
                        </tr>
                </tbody>
                <!--- Inicio do B --->
                <tbody>
                    <tr>
                        <td rowspan="11">B Disponibilizar recursos humanos competentes</td>
                        <td rowspan="3">B01</td>
                        <td>Modelo</td>
                        <td>021</td>
                        <td rowspan="3">Recrutar e acolher novo colaborador</td>
                        <td rowspan="3">Diretora / DP / Maria Faustino</td>
                        <td rowspan="3">Avaliação de desempenho no 1º ano de contrato</td>
                    </tr>
                    <tr>
                        <td>Procedimento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>B01</td>
                    </tr>
                    <tr>
                        <td rowspan="4">B02</td>
                    </tr>
                    <tr>
                        <td>Modelo</td>
                        <td>041/DT4</td>
                        <td rowspan="4">Desenvolver as competências dos colaboradores</td>
                        <td rowspan="4">Diretora / DP / Coord. Formação Adultos</td>
                        <td rowspan="4">Taxa de eficácia de formações internas</td>
                    </tr>
                    <tr>
                        <td>Procedimento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>B02</td>
                    </tr>
                    <tr>
                        <td rowspan="4">B03</td>
                    </tr>
                    <tr>
                        <td>Modelo</td>
                        <td>DT11</td>
                        <td rowspan="4">Avaliar o desempenho dos colaboradores</td>
                        <td rowspan="4">Diretora / DP / Maria Faustino / Téc. Administrativo</td>
                        <td>Taxa de avaliação de desempenho</td>
                    </tr>
                    <tr>
                        <td>Procedimento</td>
                        <td style="background-color:gray; color:white;">NA</td>
                        <td>Avaliação de desempenho dos Funcionários Internos</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>B03</td>
                        <td>Avaliação de desempenho dos Funcionários Externos</td>
                    </tr>
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
      $('#tabelaHistorico').DataTable();
   } );
</script>

<!-- Fim dos Script's-->
    </body>
</html>