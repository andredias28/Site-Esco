<?php include('conexao.php');
ob_start();
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="avaliacaoAdmin.css">
    <title>Avaliações</title>
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
                  <a class="nav-link disable">Avaliacao</a>
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
<form method="post" action="">
    <table id="av">
        <thead>
            <tr>
                <th>Nome Fornecedor</th>
                <th>Produto</th>
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
                <?php while(($row = mysqli_fetch_array($empresaAv)) && ($rows = mysqli_fetch_array($avaliacao)) && ($servicos = mysqli_fetch_array($teste))){ ?> 
                    <tr>
                       <td><?php echo $row['nome_empresa']?></td>
                       <td><?php echo $servicos['descricao']?></td>
                       <td id="cumprimento">
                       <select name="cumprimento">
                            <option></option>
                            <option value="4">Sempre</option>
                            <option value="3">Frequentemente</option>
                            <option value="2">Raramente</option>
                            <option value="1">Nunca</option>
                       </select>
                       </td>
                       <td id="satisfacao">
                       <select name="satisfacao">
                            <option></option>
                            <option value="4">100%</option>
                            <option value="3">80-99%</option>
                            <option value="2">50-79%</option>
                            <option value="1">0-50%</option>
                       </select></td>
                       <td id="conformidades">            
                            <select name="conformidades">
                                <option></option>
                                <option value="4">não ocorreram</option>
                                <option value="3">ocorreram mas sem impacto</option>
                                <option value="2">ocorreram mas só causaram problemas internos</option>
                                <option value="1">ocorreram e causaram problemas ao cliente</option>
                            </select>
                        </td>
                        <td name="categoria" id="categoria"></td>
                        <td name="classificacaoAv" id="classificacaoAv"></td>
                        <td name="cumprimentoAv" id="cumprimentoAv"></td>
                        <td name="satisfacaoAv" id="satisfacaoAv"></td>
                        <td name="conformidadesAv" id="conformidadesAv"></td>
                       <td>
                            <button type="submit" class="btn btn-success" name="botao" value="<?=$rows['id_avaliacao']?>">Avaliar</button>
                       </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</div>
</form>
    <div class="footer">
        <img src="imagens/barra de logos.png" alt="barra de logos" class="barradelogos"/>
    </div>
<!-- Script's -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
        <!-- Fim dos Script's-->
    </body>
</html>

<script>
        $(document).change(function(){
            var selectCumprimento = $('#cumprimento :selected').val();
            var selectSatisfacao = $('#satisfacao :selected').val(); 
            var selectConformidade = $('#conformidades :selected').val();

            /*TESTES*/
            /*Cumprimento de Prazos*/
            if(selectCumprimento == "4"){
                $('#cumprimentoAv').text("4");
            }else if(selectCumprimento == "3"){
                $('#cumprimentoAv').text("3");
            }else if(selectCumprimento == "2"){
                $('#cumprimentoAv').text("2");
            }else if(selectCumprimento == "1"){
                $('#cumprimentoAv').text("1");
            }
            /*Fim da avaliacao de cumprimento*/

            /*Cumprimento de Prazos*/
            if(selectSatisfacao == "4"){
                $('#satisfacaoAv').text("4");
            }
            else if(selectSatisfacao == "3"){
                $('#satisfacaoAv').text("3");
                $Avaliar = false;
            }
            else if(selectSatisfacao == "2"){
                $('#satisfacaoAv').text("2");
                $Avaliar = false;
            }
            else if(selectSatisfacao == "1"){
                $('#satisfacaoAv').text("1");
                $Avaliar = false;
            }
            /*Fim da avaliacao Cumprimento de Prazos*/

            /*Conformidades*/
            if(selectConformidade == "4"){
                $('#conformidadesAv').text("4");
                $Avaliar = false;
            }
            else if(selectConformidade == "3"){
                $('#conformidadesAv').text("3");
                $Avaliar = false;
            }
            else if(selectConformidade == "2"){
                $('#conformidadesAv').text("2");
                $Avaliar = false;
            }
            else if(selectConformidade == "1"){
                $('#conformidadesAv').text("1");
                $Avaliar = false;
            }
            /*Fim da avaliacao de conformidades*/
            
            /*Classificação e Categoria*/

            /*4------------------------- */
            if(selectCumprimento == "4" && selectSatisfacao == "4" && selectConformidade =="4"){
                $('#classificacaoAv').text("4");
                $('#categoria').text("A");
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "3" && selectConformidade =="4"){
                $('#classificacaoAv').text("3,75");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "3" && selectConformidade =="3"){
                $('#classificacaoAv').text("3,25");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "3" && selectConformidade =="2"){
                $('#classificacaoAv').text("2,75");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "3" && selectConformidade =="1"){
                $('#classificacaoAv').text("2,25");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "4" && selectConformidade =="3"){
                $('#classificacaoAv').text("3,75");
                $('#categoria').text("A"); 
            }else if(selectCumprimento == "4" && selectSatisfacao == "4" && selectConformidade =="2"){
                $('#classificacaoAv').text("3,50");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "4" && selectConformidade =="1"){
                $('#classificacaoAv').text("3,25");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "2" && selectConformidade =="4"){
                $('#classificacaoAv').text("3,50");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "2" && selectConformidade =="3"){
                $('#classificacaoAv').text("3");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "2" && selectConformidade =="2"){
                $('#classificacaoAv').text("2,50");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "2" && selectConformidade =="1"){
                $('#classificacaoAv').text("2");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "1" && selectConformidade =="4"){
                $('#classificacaoAv').text("3,25");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "1" && selectConformidade =="3"){
                $('#classificacaoAv').text("2,75");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "1" && selectConformidade =="2"){
                $('#classificacaoAv').text("2,25");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "4" && selectSatisfacao == "1" && selectConformidade =="1"){
                $('#classificacaoAv').text("1,75");
                $('#categoria').text("C"); 
            }
            /* Fim do teste 4 --------------*/
            /*3-----------------------------*/
            else if(selectCumprimento == "3" && selectSatisfacao == "4" && selectConformidade =="4"){
                $('#classificacaoAv').text("3,75");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "4" && selectConformidade =="3"){
                $('#classificacaoAv').text("3,75");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "4" && selectConformidade =="2"){
                $('#classificacaoAv').text("2,75");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "4" && selectConformidade =="1"){
                $('#classificacaoAv').text("2,25");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "3" && selectConformidade =="4"){
                $('#classificacaoAv').text("3,50");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "3" && selectConformidade =="3"){
                $('#classificacaoAv').text("3");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "2" && selectConformidade == "3"){
                $('#classificacaoAv').text("2,75");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "1" && selectConformidade == "3"){
                $('#classificacaoAv').text("2,50");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "3" && selectConformidade == "2"){
                $('#classificacaoAv').text("2,50");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "3" && selectConformidade == "1"){
                $('#classificacaoAv').text("2");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "2" && selectConformidade == "2"){
                $('#classificacaoAv').text("2,25");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "2" && selectConformidade == "1"){
                $('#classificacaoAv').text("1,75");
                $('#categoria').text("C"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "1" && selectConformidade == "2"){
                $('#classificacaoAv').text("2");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "3" && selectSatisfacao == "1" && selectConformidade == "1"){
                $('#classificacaoAv').text("1,50");
                $('#categoria').text("C"); 
            }
            /* Fim do TESTE 3---------------------*/
            /*2-----------------------------------*/
            else if(selectCumprimento == "2" && selectSatisfacao == "4" && selectConformidade =="4"){
                $('#classificacaoAv').text("3,50");
                $('#categoria').text("A"); 
            }else if(selectCumprimento == "2" && selectSatisfacao == "3" && selectConformidade =="4"){
                $('#classificacaoAv').text("3,25");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "2" && selectConformidade =="4"){
                $('#classificacaoAv').text("3");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "1" && selectConformidade =="4"){
                $('#classificacaoAv').text("2,75");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "4" && selectConformidade =="3"){
                $('#classificacaoAv').text("3");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "4" && selectConformidade =="2"){
                $('#classificacaoAv').text("2,50");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "4" && selectConformidade =="1"){
                $('#classificacaoAv').text("2");
                $('#categoria').text("B"); 
            } 
            else if(selectCumprimento == "2" && selectSatisfacao == "3" && selectConformidade =="3"){
                $('#classificacaoAv').text("2,75");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "3" && selectConformidade =="2"){
                $('#classificacaoAv').text("2,25");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "3" && selectConformidade =="1"){
                $('#classificacaoAv').text("1,75");
                $('#categoria').text("C"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "2" && selectConformidade =="3"){
                $('#classificacaoAv').text("2,50");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "1" && selectConformidade =="3"){
                $('#classificacaoAv').text("2,25");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "2" && selectConformidade =="2"){
                $('#classificacaoAv').text("2");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "1" && selectConformidade =="2"){
                $('#classificacaoAv').text("1,75");
                $('#categoria').text("C"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "2" && selectConformidade =="1"){
                $('#classificacaoAv').text("1,50");
                $('#categoria').text("C"); 
            }
            else if(selectCumprimento == "2" && selectSatisfacao == "1" && selectConformidade =="1"){
                $('#classificacaoAv').text("1,25");
                $('#categoria').text("C"); 
            }
            /* Fim do TESTE 2 ----------------------*/
            /*1-------------------------------------*/
            else if(selectCumprimento == "1" && selectSatisfacao == "4" && selectConformidade =="4"){
                $('#classificacaoAv').text("3,25");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "3" && selectConformidade =="4"){
                $('#classificacaoAv').text("3");
                $('#categoria').text("A"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "2" && selectConformidade =="4"){
                $('#classificacaoAv').text("2,75");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "1" && selectConformidade =="4"){
                $('#classificacaoAv').text("2,50");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "4" && selectConformidade =="3"){
                $('#classificacaoAv').text("2,75");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "4" && selectConformidade =="2"){
                $('#classificacaoAv').text("2,25");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "4" && selectConformidade =="1"){
                $('#classificacaoAv').text("1,75");
                $('#categoria').text("C"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "3" && selectConformidade =="3"){
                $('#classificacaoAv').text("2,50");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "3" && selectConformidade =="2"){
                $('#classificacaoAv').text("2");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "3" && selectConformidade =="1"){
                $('#classificacaoAv').text("1,50");
                $('#categoria').text("C"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "1" && selectConformidade =="3"){
                $('#classificacaoAv').text("2");
                $('#categoria').text("B"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "1" && selectConformidade =="2"){
                $('#classificacaoAv').text("1,50");
                $('#categoria').text("C"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "1" && selectConformidade =="1"){
                $('#classificacaoAv').text("1");
                $('#categoria').text("C"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "2" && selectConformidade =="2"){
                $('#classificacaoAv').text("1,75");
                $('#categoria').text("C"); 
            }
            else if(selectCumprimento == "1" && selectSatisfacao == "2" && selectConformidade =="1"){
                $('#classificacaoAv').text("1,25");
                $('#categoria').text("C");
            }
            /*Fim da Classificação e Categoria*/

        });

    /*     if($Avaliar == false){
            window.onbeforeunload = function () {
            return 'Os seus dados não foram guardados. Pretende sair?';
            }
        }
        $Avaliar = true; */
</script>

<?php
    if(isset($_POST['botao'])){
            $cumprimento = $_POST['cumprimento'];
            $satisfacao = $_POST['satisfacao'];
            $naoConfor = $_POST['conformidades'];
            $id = $_POST['botao'];
        
        if(empty($cumprimento) && empty($satisfacao) && empty($naoConfor)){
            echo "<script type='text/javascript'>alert('tem que preencher todos os campos');</script>";
        }else{
            $classificacao = " ";
            $categoria = " ";
            $cumprimentoBd = "";
            $satisfacaoBd = "";
            $naoConforBd = "";

            if($cumprimento == "4" && $satisfacao == "4" && $naoConfor =="4"){
                $classificacao = "4";
                $categoria = "A";
            }
            else if($cumprimento == "4" && $satisfacao == "3" && $naoConfor =="4"){
                $classificacao = "3,75";
                $categoria = "A"; 
            }
            else if($cumprimento == "4" && $satisfacao == "3" && $naoConfor =="3"){
                $classificacao = "3,25";
                $categoria = "A";
            }
            else if($cumprimento == "4" && $satisfacao == "3" && $naoConfor =="2"){
                $classificacao = "2,75";
                $categoria = "B";
            }
            else if($cumprimento == "4" && $satisfacao == "3" && $naoConfor =="1"){
                $classificacao = "2,25";
                $categoria = "B";
            }
            else if($cumprimento == "4" && $satisfacao == "4" && $naoConfor =="3"){
                $classificacao = "3,75";
                $categoria = "A";
            }else if($cumprimento == "4" && $satisfacao == "4" && $naoConfor =="2"){
                $classificacao = "3,50";
                $categoria = "A";
            }
            else if($cumprimento == "4" && $satisfacao == "4" && $naoConfor =="1"){
                $classificacao = "3,25";
                $categoria = "A";
            }
            else if($cumprimento == "4" && $satisfacao == "2" && $naoConfor =="4"){
                $classificacao = "3,50";
                $categoria = "A"; 
            }
            else if($cumprimento == "4" && $satisfacao == "2" && $naoConfor =="3"){

                $classificacao = "3";
                $categoria = "A";
            }
            else if($cumprimento == "4" && $satisfacao == "2" && $naoConfor =="2"){
                $classificacao = "2,50";
                $categoria = "B";
            }
            else if($cumprimento == "4" && $satisfacao == "2" && $naoConfor =="1"){
                $classificacao = "2";
                $categoria = "B";
            }
            else if($cumprimento == "4" && $satisfacao == "1" && $naoConfor =="4"){
                $classificacao = "3,25";
                $categoria = "A";
                }
            else if($cumprimento == "4" && $satisfacao == "1" && $naoConfor =="3"){
                $classificacao = "2,75";
                $categoria = "B";
                }
            else if($cumprimento == "4" && $satisfacao == "1" && $naoConfor =="2"){
                $classificacao = "2,25";
                $categoria = "B";
            }
            else if($cumprimento == "4" && $satisfacao == "1" && $naoConfor =="1"){
                $classificacao = "1,75";
                $categoria = "C";
            }
            /* Fim do teste 4 --------------*/
            /*3-----------------------------*/
            else if($cumprimento == "3" && $satisfacao == "4" && $naoConfor =="4"){
                $classificacao = "3,75";
                $categoria = "A";
            }
            else if($cumprimento == "3" && $satisfacao == "4" && $naoConfor =="3"){
                $classificacao = "3,75";
                $categoria = "A";
            }
            else if($cumprimento == "3" && $satisfacao == "4" && $naoConfor =="2"){
                $classificacao = "2,75";
                $categoria = "B";
            }
            else if($cumprimento == "3" && $satisfacao == "4" && $naoConfor =="1"){
                $classificacao = "2,25";
                $categoria = "B";
            
            }
            else if($cumprimento == "3" && $satisfacao == "3" && $naoConfor =="4"){
                $classificacao = "3,50";
                $categoria = "A";
            }
            else if($cumprimento == "3" && $satisfacao == "3" && $naoConfor =="3"){
                $classificacao = "3";
                $categoria = "A";
            }
            else if($cumprimento == "3" && $satisfacao == "2" && $naoConfor == "3"){
                $classificacao = "2,75";
                $categoria = "B";
            }
            else if($cumprimento == "3" && $satisfacao == "1" && $naoConfor == "3"){
                $classificacao = "2,50";
                $categoria = "B";
            }
            else if($cumprimento == "3" && $satisfacao == "3" && $naoConfor == "2"){
                $classificacao = "2,50";
                $categoria = "B";
            }
            else if($cumprimento == "3" && $satisfacao == "3" && $naoConfor == "1"){
                $classificacao = "2";
                $categoria = "B";
            }
            else if($cumprimento == "3" && $satisfacao == "2" && $naoConfor == "2"){
                $classificacao = "2,25";
                $categoria = "B";
            }
            else if($cumprimento == "3" && $satisfacao == "2" && $naoConfor == "1"){
                $classificacao = "1,75";
                $categoria = "C";
            
            }
            else if($cumprimento == "3" && $satisfacao == "1" && $naoConfor == "2"){
                $classificacao = "2";
                $categoria = "B";
            }
            else if($cumprimento == "3" && $satisfacao == "1" && $naoConfor == "1"){
                $classificacao = "1,50";
                $categoria = "C";
            }
            /* Fim do TESTE 3---------------------*/
            /*2-----------------------------------*/
            else if($cumprimento == "2" && $satisfacao == "4" && $naoConfor =="4"){
                $classificacao = "3,50";
                $categoria = "A";
            }else if($cumprimento == "2" && $satisfacao == "3" && $naoConfor =="4"){
                $classificacao = "3,25";
                $categoria = "A";
            }
            else if($cumprimento == "2" && $satisfacao == "2" && $naoConfor =="4"){
                $classificacao = "3";
                $categoria = "A";
            }
            else if($cumprimento == "2" && $satisfacao == "1" && $naoConfor =="4"){
                $classificacao = "2,75";
                $categoria = "B";
            }
            else if($cumprimento == "2" && $satisfacao == "4" && $naoConfor =="3"){
                $classificacao = "3";
                $categoria = "A";
            }
            else if($cumprimento == "2" && $satisfacao == "4" && $naoConfor =="2"){
                $classificacao = "2,50";
                $categoria = "B";
            }
            else if($cumprimento == "2" && $satisfacao == "4" && $naoConfor =="1"){
                $classificacao = "2";
                $categoria = "B";
            } 
            else if($cumprimento == "2" && $satisfacao == "3" && $naoConfor =="3"){
                $classificacao = "2,75";
                $categoria = "B";
            }
            else if($cumprimento == "2" && $satisfacao == "3" && $naoConfor =="2"){
                $classificacao = "2,25";
                $categoria = "B";
            }
            else if($cumprimento == "2" && $satisfacao == "3" && $naoConfor =="1"){
                $classificacao = "1,75";
                $categoria = "C";
            }
            else if($cumprimento == "2" && $satisfacao == "2" && $naoConfor =="3"){
                $classificacao = "2,50";
                $categoria = "B";
            }
            else if($cumprimento == "2" && $satisfacao == "1" && $naoConfor =="3"){
                $classificacao = "2,25";
                $categoria = "B";
            }
            else if($cumprimento == "2" && $satisfacao == "2" && $naoConfor =="2"){
                $classificacao = "2";
                $categoria = "B"; 
            }
            else if($cumprimento == "2" && $satisfacao == "1" && $naoConfor =="2"){
                $classificacao = "1,75";
                $categoria = "C";
            }
            else if($cumprimento == "2" && $satisfacao == "2" && $naoConfor =="1"){
                $classificacao = "1,50";
                $categoria = "C"; 
            }
            else if($cumprimento == "2" && $satisfacao == "1" && $naoConfor =="1"){
                $classificacao = "1,25";
                $categoria = "C"; 
            }
            /* Fim do TESTE 2 ----------------------*/
            /*1-------------------------------------*/
            else if($cumprimento == "1" && $satisfacao == "4" && $naoConfor =="4"){
                $classificacao = "3,25";
                $categoria = "A";
            }
            else if($cumprimento == "1" && $satisfacao == "3" && $naoConfor =="4"){
                $classificacao = "3";
                $categoria = "A";
            }
            else if($cumprimento == "1" && $satisfacao == "2" && $naoConfor =="4"){
                $classificacao = "2,75";
                $categoria = "B";
            }
            else if($cumprimento == "1" && $satisfacao == "1" && $naoConfor =="4"){
                $classificacao = "2,50";
                $categoria = "B"; 
            }
            else if($cumprimento == "1" && $satisfacao == "4" && $naoConfor =="3"){
                $classificacao = "2,75";
                $categoria = "B"; 
            }
            else if($cumprimento == "1" && $satisfacao == "4" && $naoConfor =="2"){
                $classificacao = "2,25";
                $categoria = "B"; 
            }
            else if($cumprimento == "1" && $satisfacao == "4" && $naoConfor =="1"){
                $classificacao = "1,75";
                $categoria = "C";
            }
            else if($cumprimento == "1" && $satisfacao == "3" && $naoConfor =="3"){
                $classificacao = "2,50";
                $categoria = "B";
            }
            else if($cumprimento == "1" && $satisfacao == "3" && $naoConfor =="2"){
                $classificacao = "2";
                $categoria = "B";
            }
            else if($cumprimento == "1" && $satisfacao == "3" && $naoConfor =="1"){
                $classificacao = "1,50";
                $categoria = "C";
            }
            else if($cumprimento == "1" && $satisfacao == "1" && $naoConfor =="3"){
                $classificacao = "2";
                $categoria = "B";
            }
            else if($cumprimento == "1" && $satisfacao == "1" && $naoConfor =="2"){
                $classificacao = "1,50";
                $categoria = "C";
            }
            else if($cumprimento == "1" && $satisfacao == "1" && $naoConfor =="1"){
                $classificacao = "1";
                $categoria = "C"; 
            }
            else if($cumprimento == "1" && $satisfacao == "2" && $naoConfor =="2"){
                $classificacao = "1,75";
                $categoria = "C";
            }
            else if($cumprimento == "1" && $satisfacao == "2" && $naoConfor =="1"){
                $classificacao = "1,25";
                $categoria = "C"; 
            }
            /* Testa */
            if($cumprimento == 4){
                $cumprimentoBd = "Sempre";
            }else if ($cumprimento == 3){
                $cumprimentoBd = "Frequentemente";
            }
            else if ($cumprimento == 2){
                $cumprimentoBd = "Raramente";
            }else{
                $cumprimentoBd = "Nunca";
            }
            /* Fim do Cumprimento */
            /* Satisfacao */
            if($satisfacao == 4){
                $satisfacaoBd = "100%";
            }else if($satisfacao == 3){
                $satisfacaoBd = "80-99%";
            }else if($satisfacao == 2){
                $satisfacaoBd = "50-79%";
            }else{
                $satisfacaoBd = "0-50%";
            }
            /* Fim da Satisfacao */
            if($naoConfor == 4){
                $naoConforBd = "não ocorreram";
            }else if($naoConfor == 3){
                $naoConforBd = "ocorreram mas sem impacto";
            }else if($naoConfor == 2){
                $naoConforBd = "ocorreram mas só causaram problemas internos";
            }else{
                $naoConforBd = "ocorreram e causaram problemas ao cliente";
            }
            echo $cumprimentoBd;
            echo $satisfacaoBd;
            echo $naoConforBd;
            $data = date('Y/m/d');
            echo $data;
            echo $id;

            /* INSERIR NA BASE DE DADOS */
                mysqli_query($conn, "UPDATE avaliacao SET data = '$data', satisfacao='$satisfacaoBd', cumprimento='$cumprimentoBd', naoConformidades='$naoConforBd',categoria='$categoria',classificacao='$classificacao',satisfacaoAv='$satisfacao',cumprimentoAv='$cumprimento',naoConformidadesAv='$naoConfor', avaliacaoFeita = '1' WHERE id_avaliacao = $id");
                header('location: historico.php');
                ob_enf_fluch();
        }
        //header('location:professoresinicial.php');
    }
?>

<!-- <script>
    $('#cumprimento').click(function(){
        var name = $(this).text();
        $(this).html('');
        $('<input></input>')
            .attr({
                'type': 'text',
                'name': 'fname',
                'id': 'txt_fullname',
                'size': '10',
                'value': name
            }).appendTo('#cumprimento');
            $('#txt_fullname').focus().val("").val(name);
    });

    $(document).on('blur','#txt_fullname',function(){
        var name = $(this).val();
        $.ajax({
            type: 'post',
            url: 'change-name.xhr?name=' + name,
            success: function(){
            $('#cumprimento').text(name);
            }
        });
        $(this).replaceWith(name);
    });
    $(this).replaceWith(name);
</script>

<script>
    $('#satisfacao').click(function(){
        var satisfacao = $(this).text();

        $(this).html('');
        $('<input></input>')
            .attr({
                'type': 'text',
                'name': 'fname',
                'id': 'txt_satisfacao',
                'size': '10',
                'value': satisfacao,
            }).appendTo('#satisfacao');
            $('#txt_satisfacao').focus().val("").val(satisfacao);
    });

    $(document).on('blur','#txt_satisfacao',function(){
        var satisfacao = $(this).val();
        $.ajax({
            type: 'post',
            url: 'change-name.xhr?name=' + satisfacao,
            success: function(){
            $('#satisfacao').text(satisfacao);
            }
        });
        $(this).replaceWith(satisfacao);
    });
    $(this).replaceWith(satisfacao);
</script>

<script>
    $('#conformidades').click(function(){
        var conformidadeR = $(this).text();
        $(this).html('');
        $('<input></input>')
            .attr({
                'type': '',
                'name': 'fname',
                'id': 'txt_conformida',
                'size': '10',
                'value': conformidadeR
            }).appendTo('#conformidades');
            $('#txt_conformida').focus().val("").val(conformidadeR);
    });

    $(document).on('blur','#txt_conformida',function(){
        var conformidadeR = $(this).val();
        $.ajax({
            type: 'post',
            url: 'change-name.xhr?name=' + conformidadeR,
            success: function(){
            $('#conformidades').text(conformidadeR);
            }
        });
        $(this).replaceWith(conformidadeR);
    });
    $(this).replaceWith(conformidadeR);
</script>
 -->
