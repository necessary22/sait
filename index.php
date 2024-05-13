<?php 
    // Запуск сессии
    session_start();
    include ('tpl/header.php');
    include ('tpl/nav.php');
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
    <div id = "menu">

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
    </main>
<?php
    include ('tpl/footer.php');
?>
</body>
</html>