<?php
    ob_start();
    session_start();
    $email = $_SESSION['emailEnviar'];
    require_once('src/PHPMailer.php');
    require_once('src/SMTP.php');
    require_once('src/Exception.php');

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;

   $mail = new PHPMailer(true);

   try{
       $mail->SMTPDebug = SMTP::DEBUG_SERVER;
       $mail->isSMTP();
       $mail->Host = "smtp.gmail.com";
       $mail->SMTPAuth = true;
       $mail->Username = 'testeemailesco@gmail.com';
       $mail->Password = '#Sefo123';
       $mail->Port = 587;

       $mail->setFrom('testeemailesco@gmail.com');
       $mail->addAddress($email);

       $mail->isHTML(true);
       $mail->Subject = 'Recuperar a palavra-passe';
       $mail->Body = 'Por razações de segurança foi mandado um link para o utilizador conseguir mudar a palavra passe, o link encontrasse na linha abaixo 
        <br><br><br> link para mudar a passe: http://localhost/au/Site-Esco/Esqueceu.php';
       $mail->AltBody = 'Por razações de segurança foi mandado um link para o utilizador conseguir mudar a palavra passe, o link encontrasse na linha abaixo 
        <br><br><br> link para mudar a passe: http://localhost/au/Site-Esco/Esqueceu.php';
       if($mail->send()){
           echo "O email foi enviado com sucesso";
           header('Location: login.php');
           ob_enf_fluch();
       }else{
           echo "Email não enviado";
       }


   }catch (Exception $e){
       echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
   }

?>
