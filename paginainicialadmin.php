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
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Sistema de Gestão da Qualidade</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <thead>
                        <tr>
                            <th>Áreas</th>
                            <th>Processos</th>
                            <th></th>
                            <th>Nº(s)</th>
                            <th>Nome</th>
                            <th>Intervenientes</th>
                            <th>Indicadores</th>
                        </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>A Desenvolver a estratégia</td>
                            <td>A01<br>
                            A02</td>
                            <td>Modelo <br>
                            Procedimento <br>
                            Fluxograma</td>
                            <td>NA<br>
                            0<br>
                            A01</td>
                            <td>Planear a estratégia e as atividades</td>
                            <td>Diretora / DP / Sandra Alfaiate / Gab. Comunicação </td>
                            <td>Autonomia Financeira<br>
                            Taxa de satisfação dos cursos</td>
                        </tr>
                </tbody>
                <tbody>
                        <tr>
                            <td>B Disponibilizar recursos humanos competentes</td>
                           <td>B01<br><br>
                            B02 <br><br>
                            B03 <br><br>
                            B04 <br>
                            <td>Modelo <br>Procedimento<br>Fluxograma<br><br>Modelo<br>Procedimento<br>Fluxograma<br>Modelo<br>
                            Procedimento<br>
                            Fluxograma<br><br>
                            Modelo<br>
                            Procedimento<br>
                            Fluxograma<br></td>
                            <td>021<br> <br>B01<br>041/DT4<br> <br>B02<br>
                            DT11<br>NA<br>B03<br>
                            NA<br><br>B04<br></td>

                            <td>Recrutar e acolher novo colaborador<br><br>Desenvolver as competências dos colaboradores
                            <br><br>Avaliar o desempenho dos colaboradores<br><br>Cessar vínculo com o colaborador</td>

                            <td>Diretora / DP / Maria Faustino<br><br>Diretora / DP / Coord. Formação Adultos<br><br>Diretora / DP / Maria Faustino / Téc. Administrativo
                            <br><br>Diretora / DP / Maria Faustino<br></td>

                            <td>Avaliação de desempenho no 1º ano de contrato<br><br>Avaliação de desempenho no 1º ano de contrato<br><br>Taxa de avaliação de desempenho</td>
                        </tr>
                </tbody>
                <tbody>
                        <tr>
                            <td>C Disponibilizar meios</td>
                            <td>C01<br><br>C02<br><br>C03<br><br>C04<br><br>C05<br><br>C06</td>
                            <td>Modelo<br>Procedimento<br>Fluxograma<br><br>
                            Modelo<br>Procedimento<br>Fluxograma<br><br>
                            Modelo<br>Procedimento<br>Fluxograma<br><br>
                            Modelo<br>Procedimento<br>Fluxograma<br><br>
                            Modelo<br>Procedimento<br>Fluxograma<br><br>
                            Modelo<br>Procedimento<br>Fluxograma<br>
                            </td>
                            <td>teste</td>

                            <td>Adquirir bens e Serviços<br><br>Disponibilizar meios via centro de recursos<br><br>Disponibilizar meios via serviços administrativos<br><br>Manter infraestrutura
                            <br><br>Avaliar fornecedores<br><br>Gerir utilizadores</td>

                            <td><br>Maria Faustino / Serv. Admin (Sales, Rui, Isabel, Ana Oliveira, Susana Cunha) / Sandra Alfaiate / Diretora<br><br>Isabel Garcia / Sandra Sales<br><br>Maria Faustino / Téc. Manutenção / Ana Oliveira / Susana Cunha / Sandra Sales / Vânia Pinheiro / Isabel Garcia
                            <br><br>Téc. Manutenção / Téc. Informática<br><br>EQ / Sandra Sales / Téc. Manutenção / Téc. Informática / Álvaro Brito / Ana Oliveira / Mafalda Santos / Sandra Alfaiate / Susana Cunha / Maria Faustino / Vânia Pinheiro<br><br>
                            Téc. Informática / Maria Faustino</td>

                            <td>Avaliação de fornecedores<br>Taxa de devolução de materiais (Dentro do Prazo)<br>Média de Satisfação dos Serviços Administrativos
                            <br>Taxa de resolução<br>Taxa de fornecedores críticos<br>Tempo médio de resposta<br></td>
                        </tr>
                </tbody>
                <tbody>
                        <tr>
                            <td>D Gerir a comunicação e divulgação</td>
                            <td></td>
                            <td></td>
                            <td>o</td>
                            <td></td>
                            <td><td>
                        </tr>
                </tbody>
                <tbody>
                        <tr>
                            <td>E Melhorar</td>
                            <td></td>
                            <td></td>
                            <td>o</td>
                            <td></td>
                            <td><td>
                        </tr>
                </tbody>
                <tbody>
                        <tr>
                            <td>F Formar jovens - cursos profissionais</td>
                            <td></td>
                            <td></td>
                            <td>o</td>
                            <td></td>
                            <td><td>
                        </tr>
                </tbody>
                <tbody>
                        <tr>
                            <td>G Formar adultos</td>
                            <td></td>
                            <td></td>
                            <td>o</td>
                            <td></td>
                            <td><td>
                        </tr>
                </tbody>
                <tbody>
                        <tr>
                            <td>H Vender produtos e serviços</td>
                            <td></td>
                            <td></td>
                            <td>o</td>
                            <td></td>
                            <td><td>
                        </tr>
                </tbody>
                <tbody>
                        <tr>
                            <td>I Processar os recebimentos e pagamentos</td>
                            <td></td>
                            <td></td>
                            <td>o</td>
                            <td></td>
                            <td><td>
                        </tr>
                </tbody>
            </table>

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