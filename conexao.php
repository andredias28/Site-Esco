<?php

$server = "localhost";
$username = "Admin";
$password = "admin123";
$dbname = "esco";
$numeroProfessor = 0;
$guardaServicos = 0;

$conn = new mysqli($server,$username,$password,$dbname);
mysqli_set_charset($conn,'utf8');
if($conn->connect_error){
    die('Conection failed' .$conn->connect_error);
}

        session_start();
        if(empty($_SESSION['numero'])){
            $numeroProfessor = 0;
        }else{
            $numeroProfessor = $_SESSION['numero'];
        }
        $sql = mysqli_query($conn, "SELECT * FROM empresa INNER JOIN servico ON empresa.id_servico = servico.id_servico;");
        $servico = mysqli_query($conn, "SELECT * FROM servico INNER JOIN categoria ON servico.id_categoria = categoria.id_categoria;");
        $professores = mysqli_query($conn,"SELECT * FROM professoresadministracao WHERE Ativo='1'");
        $categoria = mysqli_query($conn, "SELECT * FROM categoria;");
        $historicoAvalia = mysqli_query($conn, "SELECT * FROM avaliacao INNER JOIN professoresadministracao ON avaliacao.Numero = professoresadministracao.Numero_P INNER JOIN empresa ON avaliacao.id_empresa = empresa.id_empresa INNER JOIN servico ON avaliacao.id_servico = servico.id_servico  WHERE avaliacaoFeita='0';");
        $empresaAv = mysqli_query($conn, "SELECT * FROM empresa INNER JOIN avaliacao ON empresa.id_empresa = avaliacao.id_empresa WHERE Numero = '$numeroProfessor' AND avaliacaoFeita='0';");
        $avaliacao = mysqli_query($conn, "SELECT * FROM avaliacao INNER JOIN professoresadministracao ON avaliacao.Numero = professoresadministracao.Numero_P INNER JOIN empresa ON avaliacao.id_empresa = empresa.id_empresa INNER JOIN servico ON avaliacao.id_servico = servico.id_servico  WHERE avaliacaoFeita='1' AND Numero_P = '$numeroProfessor';");
        $teste = mysqli_query($conn, "SELECT * FROM servico INNER JOIN avaliacao ON servico.id_servico = avaliacao.id_servico WHERE avaliacaoFeita='0';");
        $irbuscaremail = mysqli_query($conn, "SELECT email FROM empresa INNER JOIN servico ON empresa.id_servico = servico.id_servico;");

if (isset($_GET['delete'])){
            $idEmp = $_GET['delete'];
            mysqli_query($conn, "DELETE FROM empresa WHERE id_empresa = $idEmp");
            header('location: empresa.php');
        }
        if(isset($_GET['deleteSer'])){
            $idServi = $_GET['deleteSer'];
            mysqli_query($conn, "DELETE FROM servico WHERE id_servico = $idServi");
            header('location: Servicos.php');
        }
        if(isset($_GET['deleteCat'])){
            $idCate = $_GET['deleteCat'];
            echo $idCate;
            mysqli_query($conn,"DELETE FROM categoria WHERE id_categoria = $idCate");
            header('location: categorias.php');
        }
        if(isset($_GET['deleteProf'])){
            $idProf = $_GET['deleteProf'];
            mysqli_query($conn, "UPDATE professoresadministracao SET Ativo = 0 WHERE Numero_P = $idProf");
            header('location: professores.php');
        }
?>