<?php
    $email = 'nikita.zatokovenko2015@yandex.ru';
    $message= $_POST['massage'];
    $message = wordwrap($message, 150, "\r\n");

    $error='';


    if(trim($message) == '')
        $error='Введите сообщение';
    
    else if(strlen($message)==10)
        $error='Сообщение слишком короткое';
    
    if($error !=''){
        echo $error;
        exit;
    }

    $subject = "=?utf-8?B?".base64_encode("Сообщение от пользователей")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;
    charset=utf-8\r\n";

    mail($email, $subject, $message, $headers);

    header('Location: /me.php');

?>