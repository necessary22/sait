
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Туры</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<header class = "container">
        <div class = "row">
            <div class = "col">
                <img id = "logo" src = "../img/logo.jpg" >
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