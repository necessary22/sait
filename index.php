<?php 
    // Запуск сессии
    session_start();
    ?> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главный страничка</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class = "body-top">
    <header class = "container">
        <div class = "row">
            <div class = "col-3">
                <img id = "logo" src = "img/logo.jpg" >
            </div>
            <div class = "col-9">
                <h1>Путешествуйте с нами! </h1>
            </div>
        </div>

        <?php
            if (empty($_SESSION['login']) or empty($_SESSION['id']))
            {
        ?>
        <div id="auth_block">
            <div id="link_register">
                <a href = "php/registr.php">Регистрация</a>
            </div>
            <div id="link_auth">
                <a href = "php/avtor.php">Авторизация</a>
            </div>
        </div>
        
        <?php 
            }
            else
            {
        ?>
        <div id="exit_block">
            <div id="link_remark">
                <a href = "php/remarks.php">Вы можете оставить отзыв</a>
            </div>
            <div id="link_exit">
                <a href = "php/exit.php">Выход</a>
            </div>
        </div>
        
        <?php
            }
        ?>
    </header>
    <div id = "menu">
        <nav class = "nav nav-pills flex-column flex-sm-row">
            <a class="flex-sm-fill text-sm-center nav-link" href="index.php" >Главная</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="turs.php" >Наши туры</а>
            <a class="flex-sm-fill text-sm-center nav-link" href="contacts.php">0 нас</a>
        </nav>
    </div>
    <main class ="flex">
        <div class ="row">
            <div class ="col">
                Наши акции
            </div>
        </div>
        <div class ="row">
                <div class="col">
                    <div class="tour">
                        <img src="img/crimea.jpg" alt="">
                        <p>
                            <a class="actia" href="#">Подробнее об акции</a>
                        </p>
                    </div>
                </div>
            <div class="col">
                <div class="tour">
                    <img src="img/kavkaz.jpg" alt="">
                    <p>
                        <a class="actia" href="#">Подробнее об акции</a>
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="tour">
                    <img src="img/altay.jpg" alt="">
                    <p>
                        <a class="actia" href="#">Подробнее об акции</a>
                    </p>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="row">
                <div class="col">
                    Это сайт, предназначенный для обучения 
                </div>
            </div>
        </footer>
    </main>
</body>
</html>