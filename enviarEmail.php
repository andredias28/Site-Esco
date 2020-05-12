<?php
    ob_start();

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
       $mail->addAddress('andre3785@gmail.com');

       $mail->isHTML(true);
       $mail->Subject = 'Teste recuperar senha';
       $mail->Body = 'Chegou o email teste da <strong>Esco</strong> para mais informações consulte o link http://localhost/au/Site-Esco/Esqueceu.php';
       $mail->AltBody = 'Chegou o email teste da para mais informações consulte o link http://localhost/au/Site-Esco/Esqueceu.php';
       if($mail->send()){
           echo "O email foi enviado com sucesso";
       }else{
           echo "Email não enviado";
       }


   }catch (Exception $e){
       echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
   }
   header('Location: login.php');
    ob_enf_fluch();

?>
