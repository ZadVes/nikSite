<?php


  
    $email = $_POST['email'];
    $message= $_POST['message'];
    $message = wordwrap($message, 150, "\r\n");
    $to = "sasyke.moyzent228@mail.ru";

    $error='';


    if(trim($message) == ''){
        $error='Введите сообщение';
    }
    else if(strlen($message)<=10){
        $error='Сообщение слишком короткое';
    }

    else{
        if($error !=''){
            echo $error;
            exit;
        }

     /*обработка полученных данных
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    $email = urldecode($email);
    $message = urldecode($message);

    $email = trim($email);
    $message = trim($message);
      */  
        
    $subject = "=?utf-8?B?".base64_encode("Сообщение от пользователей")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nReturn-Path: $email\r\nContent-type: text/html;
        charset=utf-8\r\nContent-Transfer-Encoding: 8bit";
    
    if(mail($to, $subject, $message, $headers))
        {
            echo('success');
        }

    else {
        echo('noooooo');
    }
    
    //header(Location: '../aboutMe/me.php'); 
    include "../aboutMe";
    }
    

?>