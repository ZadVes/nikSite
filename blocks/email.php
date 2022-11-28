<?php
    $email = $_POST['email'];
    $message= $_POST['massage'];
    $message = wordwrap($message, 150, "\r\n");

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
    
        $subject = "=?utf-8?B?".base64_encode("Сообщение от пользователей")."?=";
        $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;
        charset=utf-8\r\n";
    
        mail('sasyke.moyzent228@mail.ru', $subject, $message, $headers);
    
        header('Location: ../me.php'); 
    }
    

?>