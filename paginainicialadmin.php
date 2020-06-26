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
    <link rel="shortcut icon" href="imagens/icon/favicon-96x96.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="paginainicialadmin.css">
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
                <a class="nav-link" href="professores.php">Utilizadores</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="avaliacaoAdmin.php">Avaliacao</a>
             </li>
             <li class="nav-item">
                <div id="botao">
                    <a href="perfil.php"><button id="perfil" class="btn btn-outline-light">Perfil</button></a>
                    <a href="paginainicio.html"><button id="termina" class="btn btn-danger">Terminar-Sessão</button></a>
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
<!-- Inicio do A -->
                        <tr>
                            <td rowspan="6">
                                A Desenvolver a estratégia
                            </td>
                            <td rowspan="3">A01</td>
                            <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                            <td style="background-color:gray; color:white;">NA</td>
                            <td rowspan="3">Planear a estratégia e as atividades</td>
                            <td rowspan="3">Diretora / DP / Sandra Alfaiate / Gab. Comunicação</td>
                            <td>Autonomia Financeira</td>
                        </tr>
                        <tr>
                            <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
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
                            <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                            <td>023</td>
                            <td rowspan="3">Analisar a realização das atividades</td>
                            <td rowspan="3">Equipa Qualidade / Diretora / DP / Sandra Alfaiate / Gab. Comunicação</td>
                            <td rowspan="3">Taxa de execução do Plano de Ação</td>
                        </tr>
                        <tr>
                            <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Fluxograma</td>
                            <td>A02</td>
                        </tr>
                </tbody>
<!-- Fim do A -->
<!--- Inicio do B --->
                <tbody>
                    <tr>
                        <td rowspan="15">B Disponibilizar recursos humanos competentes</td>
                        <td rowspan="3">B01</td>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>021</td>
                        <td rowspan="3">Recrutar e acolher novo colaborador</td>
                        <td rowspan="3">Diretora / DP / Maria Faustino</td>
                        <td rowspan="3">Avaliação de desempenho no 1º ano de contrato</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
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
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>041/DT4</td>
                        <td rowspan="4">Desenvolver as competências dos colaboradores</td>
                        <td rowspan="4">Diretora / DP / Coord. Formação Adultos</td>
                        <td rowspan="4">Taxa de eficácia de formações internas</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
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
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>DT11</td>
                        <td rowspan="4">Avaliar o desempenho dos colaboradores</td>
                        <td rowspan="4">Diretora / DP / Maria Faustino / Téc. Administrativo</td>
                        <td>Taxa de avaliação de desempenho</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                        <td>Avaliação de desempenho dos Funcionários Internos</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>B03</td>
                        <td>Avaliação de desempenho dos Funcionários Externos</td>
                    </tr>
                    <tr>
                        <td rowspan="4">B04</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>DT11</td>
                        <td rowspan="4">Avaliar o desempenho dos colaboradores</td>
                        <td rowspan="4">Diretora / DP / Maria Faustino / Téc. Administrativo</td>
                        <td rowspan="4">Taxa de desvinculações</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>B03</td>
                    </tr>
                </tbody>
<!--- Fim do B -->
<!--- Inicio do C -->
                <tbody>
                    <tr>
                        <td rowspan="23">C Disponibilizar meios</td>
                        <td rowspan="3">C01</td>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>012</td>
                        <td rowspan="3">Recrutar e acolher novo colaborador</td>
                        <td rowspan="3">Maria Faustino / Serv. Admin (Sales, Rui, Isabel, Ana Oliveira, Susana Cunha) / Sandra Alfaiate / Diretora</td>
                        <td rowspan="3">Avaliação de fornecedores</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>C01</td>
                    </tr>
                    <tr>
                        <td rowspan="4">C02</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>010</td>
                        <td rowspan="4">Disponibilizar meios via centro de recursos</td>
                        <td rowspan="4">Isabel Garcia / Sandra Sales</td>
                        <td rowspan="2">Taxa de devolução de materiais (Dentro do Prazo)</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>C02</td>
                        <td rowspan="2">Taxa de satisfação de requisições</td>
                    </tr>
                    <tr>
                        <td rowspan="4">C03</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>011/012/013/014/040</td>
                        <td rowspan="4">Disponibilizar meios via serviços administrativos</td>
                        <td rowspan="4">Maria Faustino / Téc. Manutenção / Ana Oliveira / Susana Cunha / Sandra Sales / Vânia Pinheiro / Isabel Garcia</td>
                        <td rowspan="4">Média de Satisfação dos Serviços Administrativos</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>C03</td>
                    </tr>
                    <tr>
                        <td rowspan="4">C04</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>DT5/042</td>
                        <td rowspan="4">Manter infraestrutura</td>
                        <td rowspan="4">Téc. Manutenção / Téc. Informática</td>
                        <td rowspan="4">Taxa de resolução</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td>Pr.12</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>C04</td>
                    </tr>
                    <tr>
                        <td rowspan="4">C05</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>005</td>
                        <td rowspan="4">Avaliar fornecedores</td>
                        <td rowspan="4">EQ / Sandra Sales / Téc. Manutenção / Téc. Informática / Álvaro Brito / Ana Oliveira / Mafalda Santos / Sandra Alfaiate / Susana Cunha / Maria Faustino / Vânia Pinheiro</td>
                        <td rowspan="4">Taxa de fornecedores críticos</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>C05</td>
                    </tr>
                    <tr>
                        <td rowspan="4">C06</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                        <td rowspan="4">Gerir utilizadores</td>
                        <td rowspan="4">Téc. Informática / Maria Faustino</td>
                        <td rowspan="4">Tempo médio de resposta</td>
                    </tr>
                    <tr>
                        <td>Procedimento</td>
                        <td style="background-color:gray; color:white;">NA</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>C06</td>
                    </tr>
                </tbody>
<!-- Fim do C -->
<!-- Inicio do D -->
                <tbody>
                    <tr>
                        <td rowspan="6">D Gerir a comunicação e divulgação</td>
                        <td rowspan="3">D01</td>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>009 / 034 / 035</td>
                        <td rowspan="3">Divulgar conteúdos</td>
                        <td rowspan="3">Gabinete Comunicação  (Ana Oliveira) / Diretora</td>
                        <td>Nº de notícias produzidas: > 12/ano</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td>8</td>
                        <td>Nº artigos publicados no site: >  12/Ano</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>D01</td>
                        <td>Nº presenças em eventos de divulgação institucional e da oferta formativa (jovens e adultos): > 8/ ano</td>
                    </tr>
                    <!--- Fim do D01 !-->
                    <tr>
                        <td rowspan="3">D02</td>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>006</td>
                        <td rowspan="3">Gerir a Documentação do SGQ</td>
                        <td rowspan="3">Equipa Qualidade / Diretora / Téc. Informática</td>
                        <td rowspan="3">Idade média dos documentos</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td style="background-color:gray; color:white;"></td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>D02</td>
                    </tr>
            </tbody>
<!-- Fim do D -->
<!-- Inicio do E -->
            <tbody>
                    <tr>
                        <td rowspan="15">E Melhorar</td>
                        <td rowspan="3">E01</td>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>002/023</td>
                        <td rowspan="3">Tratar não conformidades e melhorias</td>
                        <td rowspan="3">Equipa Qualidade</td>
                        <td rowspan="3">Taxa de eficácia de AC</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>E01</td>
                    </tr>
                    <tr>
                        <td rowspan="4">E02</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>003/004</td>
                        <td rowspan="4">Realizar auditorias internas</td>
                        <td rowspan="4">Equipa Qualidade / Diretora</td>
                        <td rowspan="1">Taxa de execução de AI</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                        <td rowspan="2">Tempo médio para análise de NC</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>E02</td>
                    </tr>
                    <tr>
                        <td rowspan="4">E03</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>007</td>
                        <td rowspan="4">Tratar reclamações</td>
                        <td rowspan="4">Equipa Qualidade / Diretora / Maria Faustino</td>
                        <td rowspan="4">Taxa de resposta às reclamações</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>E03</td>
                    </tr>
                    <tr>
                        <td rowspan="4">E04</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>001</td>
                        <td rowspan="4">Monitorizar Processos</td>
                        <td rowspan="4">Equipa Qualidade</td>
                        <td rowspan="4">Taxa de tratamento de desvios</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>E04</td>
                    </tr>
                </tbody>
<!-- Fim do E -->
<!-- Inicio do F -->
                <tbody>
                    <tr>
                        <td rowspan="15">F Formar jovens - cursos profissionais</td>
                        <td rowspan="3">F01</td>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>018/019/020/025/026</td>
                        <td rowspan="3">Planear a Formação de jovens</td>
                        <td rowspan="3">DP / Diretora / Sandra Alfaiate / EEE / CC's / Marta Malhado</td>
                        <td rowspan="3">Taxa de Aprovação de 100% dos cursos propostos</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td>2 / 6</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>F01</td>
                    </tr>
                    <tr>
                        <td rowspan="4">F02</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>025/026</td>
                        <td rowspan="4">Selecionar novos alunos</td>
                        <td rowspan="4">SPO / DP / Diretora / Isabel Garcia</td>
                        <td rowspan="4">Taxa de Ocupação das turmas de 1º Ano (28 alunos/Turma)</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td>2/6</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>F02</td>
                    </tr>
                    <tr>
                        <td rowspan="4">F03</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>022</td>
                        <td rowspan="4">Desenvolver  Formação de Jovens</td>
                        <td rowspan="4">DP / Marta Malhado / EQ / DT's / Margarida Caldeira / Sandra Franco</td>
                        <td>Taxa de Abandono</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td>2</td>
                        <td>Taxa de Empregabilidade + Empregabilidade na área</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>F03</td>
                        <td>Taxa de Conclusão</td>
                    </tr>
                    <tr>
                        <td rowspan="4">F04</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>008/017/025/028/036/ 037/039</td>
                        <td rowspan="4">Apoiar o aluno</td>
                        <td rowspan="4">DTs / GAE / GAAF (Filipa Correia) / ESS / GPES / SPO</td>
                        <td rowspan="4">Tempo de resposta para avaliar e responder às sinalizações</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td>3/4/6/7</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>F04</td>
                    </tr>
                </tbody>
<!-- Fim do F -->
<!-- Inicio do G -->
                <tbody>
                    <tr>
                        <td rowspan="15">G Formar adultos</td>
                        <td rowspan="3">G01</td>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>NA</td>
                        <td rowspan="3">Planear formação de adultos</td>
                        <td rowspan="3">Coord. Formação Adultos / Susana Cunha / Ana Cunha / EEE / Sandra Alfaiate / Diretora / DP</td>
                        <td rowspan="3">Taxa de realização</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>G01</td>
                    </tr>
                    <tr>
                        <td rowspan="4">G02</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                        <td rowspan="4">Processar inscrições</td>
                        <td rowspan="4">Susana Cunha / Téc. Administrativa (Ana Cunha)</td>
                        <td rowspan="4">Taxa de processamento das fichas de inscrição</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>G02</td>
                    </tr>
                    <tr>
                        <td rowspan="4">G03</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>030 / 031 / 032 / 033</td>
                        <td rowspan="4">Preparar, planear e desenvolver a formação de adultos</td>
                        <td rowspan="4">Coord. Formação Adultos / Sandra Alfaiate / Susana Cunha / Ana Cunha / Maria Faustino</td>
                        <td>Média de Satisfação - Formação Pós-Laboral</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td>1</td>
                        <td rowspan="2">Taxa de aprovação de candidaturas financiadas</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>G03</td>
                    </tr>
                    <tr>
                        <td rowspan="4">G04</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>031</td>
                        <td rowspan="4">Formação para empresas – não co-financiada</td>
                        <td rowspan="4">Coord. Formação Adultos / Sandra Sales / Ana Cunha / Susana Cunha / Sandra Alfaiate</td>
                        <td rowspan="4">Média de Satisfação - Formação Empresarial</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>G04</td>
                    </tr>
                </tbody>
<!-- Fim do G -->
<!-- Inicio do H -->
                <tbody>
                    <tr>
                        <td rowspan="6">H Vender produtos e serviços</td>
                        <td rowspan="3">H01</td>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td>012</td>
                        <td rowspan="3">Vender produtos reprografia</td>
                        <td rowspan="3">Susana Cunha / Ana Cunha / Vânia Pinheiro / Ana Oliveira / Isabel Garcia / Sandra Sales</td>
                        <td rowspan="3">Média de Satisfação Reprografia</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>H01</td>
                    </tr>
                    <!--- Fim do H01 -->
                    <!-- Inicio do H02 -->
                    <tr>
                        <td rowspan="3">H02</td>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                        <td rowspan="3">Aluguer de espaço</td>
                        <td rowspan="3">Susana Cunha / Sandra Sales / Diretora</td>
                        <td rowspan="3">Média de Satisfação</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>H02</td>
                    </tr>
                    <!--- Fim do H02 -->
                </tbody>
<!--- Fim do H -->
<!-- Inicio do I -->
                <tbody>
                   <tr>
                        <td rowspan="6">I Processar os recebimentos e pagamentos</td>
                        <td rowspan="3">I01</td>
                       <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                        <td rowspan="3">Processar recebimento de clientes</td>
                        <td rowspan="3">Susana Cunha / Téc. Manutenção / Ana Oliveira / Luís Couto</td>
                        <td rowspan="3">Taxa de Envio do SAFT (12/Mês)</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>I01</td>
                    </tr>
                    <!--- Fim do I01 !-->
                    <!--- Inicio do I02 -->
                    <tr>
                        <td rowspan="3">I02</td>
                        <td><a href="https://file//escoserver2/Qualidade/Modelos">Modelo</a></td>
                        <td style="background-color:gray; color:white;">NA</td>
                        <td rowspan="3">Processar vencimentos</td>
                        <td rowspan="3">Maria Faustino / Luís Couto</td>
                        <td rowspan="3">Taxa de Envio do DMR (10/Mês)</td>
                    </tr>
                    <tr>
                        <td><a href="https://file//escoserver2/Qualidade/Procedimentos">Procedimento</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fluxograma</td>
                        <td>I02</td>
                    </tr>
                    <!--- Fim do I02 -->
                </tbody>
<!--- Fim do I -->
                
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