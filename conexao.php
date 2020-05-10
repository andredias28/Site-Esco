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
        $historicoAvalia = mysqli_query($conn, "SELECT * FROM avaliacao INNER JOIN professoresadministracao ON avaliacao.Numero = professoresadministracao.Numero_P WHERE avaliacaoFeita='1';");
        $empresaAv = mysqli_query($conn, "SELECT * FROM empresa INNER JOIN avaliacao ON empresa.id_empresa = avaliacao.id_empresa WHERE Numero = '$numeroProfessor' AND avaliacaoFeita='0';");
        $avaliacao = mysqli_query($conn, "SELECT * FROM avaliacao INNER JOIN professoresadministracao ON avaliacao.Numero = professoresadministracao.Numero_P WHERE Numero_P = '$numeroProfessor' AND avaliacaoFeita = '0';");
        $teste = mysqli_query($conn, "SELECT * FROM servico INNER JOIN avaliacao ON servico.id_servico = avaliacao.id_servico WHERE avaliacaoFeita='0';");

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
            mysqli_query($conn,"DELETE FROM categoria WHERE id_categoria = $idCate");
            header('location: categorias.php');
        }
        if(isset($_GET['deleteProf'])){
            $idProf = $_GET['deleteProf'];
            mysqli_query($conn, "DELETE FROM professoresadministracao WHERE Numero_P = $idProf");
            header('location: professores.php');
        }
?>