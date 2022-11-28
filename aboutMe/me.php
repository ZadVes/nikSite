<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./me.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300&family=Inconsolata:wght@200&family=Roboto+Mono:wght@200;300&display=swap" rel="stylesheet">
        <title>About Us</title>
    </head>
    <body>

        <header class="header">
            <div class="container">
                <div class="header_inner">
                    <div class="logo">О нас</div>
                    <a class="nav" href="../index.php">На главную</a>
                </div>
            </div>
        </header>

       <div class = "intro">
            <div class = "container">
                <div class="intro_inner">
                    <h1 class="intro_text">Здесь, вы можете узнать нас получше ;)</h1>
                    <div class="photo">
                        <img src="../images/Office.jpg" width="351" height="211" alt="">
                    </div>
                </div>
            </div>
       </div> 

       <div class = "email">
            <div class = "container">
                <h1>Если, вы хотите задать вопрос, то вам вниз</h1>
                <from action = "../blocks/email.php" method="post">
                    <input type="email" name="email" placeholder="Введите вашу почту">
                    <textarea name="message" class="from-control"
                    placeholder="Введите сообщение"></textarea><br>
                    <button type="submit" name="send" class="btn btn-success">Отправить</button>
                </from>
            </div>
        </div> 
       
    </body>
