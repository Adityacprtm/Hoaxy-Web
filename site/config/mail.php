<?php
    include "phpmailer/class.phpmailer.php";
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->SMTPSecure = ‘tls’;
    $mail->Host = "localhost"; //hostname masing-masing provider email
    $mail->SMTPDebug = 2;
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = "aditya@adityacprtm.com"; //user email
    $mail->Password = "aydict97"; //password email
    $mail->SetFrom("bot@adityacprtm.com","Hoaxy Web"); //set email pengirim
    $mail->Subject = "Pemberitahuan Email dari Website"; //subyek email
    $mail->AddAddress("adityacprtm@gmail.com","Aditya"); //tujuan email
    $mail->isHTML(true);
    $mail->Body = "<b>Alfa</b> telah meninggalkan pesan bla bla";
    if($mail->Send()) echo "Message has been sent";
    else echo "Failed to sending message";
?>