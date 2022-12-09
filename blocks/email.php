<?php



    $email = $_POST['email'];
    $message= $_POST['message'];
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

    /* обработка полученных данных
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    $email = urldecode($email);
    $message = urldecode($message);

    $email = trim($email);
    $message = trim($message);
        */
        
    $subject = "=?utf-8?B?".base64_encode("Сообщение от пользователей")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;
        charset=utf-8\r\n";
    
    if(mail('sasyke.moyzent228@mail.ru', $subject, $message, $headers))
        {
            echo('success');
        }

    else {
        echo('noooooo');
    }
    
    //header(Location: '../aboutMe/me.php'); 
    include "../aboutMe/me.php";
    }
    

?>