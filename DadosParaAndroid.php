<?php
    require_once __DIR__ . '/config.php';
    class API{
        function Select(){
            $db = new Connect;
            $users = array();
            $data = $db->prepare('SELECT * FROM professoresadministracao ORDER BY Numero_P');
            $data->execute();
            while ($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
                $users[$OutputData['Numero_P']] = array(
                    'Numero_P' => $OutputData['Numero_P'],
                    'nome' => $OutputData['nome'],
                    'email' => $OutputData['email'],
                    'senha' => $OutputData['senha'],
                );
            }
            return json_encode($users);
        }
    }
    $API = new API;
    header('Content-Type: application/json');
    echo $API->Select();
?>
