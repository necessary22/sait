<?php 
    // Запуск сессии
    session_start();
    include ('tpl/header.php');
    include ('tpl/nav.php');
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Туры</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body-top">
    <div class="container">
        <main class="flex">
            <div class="row">
                <div class="col">
                    Наши туры
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="tour">
                            <img src="img/crimea.jpg" class="tour_img" alt="Крым">
                            <p>Это прекрасная возможность отдохнуть всей семьей</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Рассчитать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="tour">
                            <img src="img/kavkaz.jpg" class="tour_img" alt="Кавказ">
                            <p>Море, солнце, горы!</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Рассчитать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="tour">
                            <img src="img/altay.jpg" class="tour_img" alt="Алтай">
                            <p>Незабываемые впечатления!</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Рассчитать стоимость
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Рассчитать стоимость</h5>
                        <button type="button" class="Close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" style="max-width: 600px;">
                        <form method="get" action="#" id="orderForm">
                            <div class="tour">
                                <label for="name" class="label">
                                    Выберите тур:
                                </label>
                                <select id="inp1">
                                    <option value="Крым" selected>Крым</option>
                                    <option value="Кавказ">Кавказ</option>
                                    <option value="Алтай">Алтай</option>
                                </select>
                            </div>
                            <div class="tour">
                                <label class="label" for="data">
                                    Выберите дату начала:
                                </label>
                                <input type="date" id="inp2">
                            </div>
                            <div class="tour">
                                <label class="label" for="number">
                                    Выберите количество участников:
                                </label>
                                <select id="inp3">
                                    <option value="1">1</option>
                                    <option value="2" selected>2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="tour">
                                <label class="label" for="email">
                                    Ваш E-Mail:
                                </label>
                                <input type="email" id="inp4" class="input-xlarge" style="width: 350px;" required="required">
                            </div>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary" id="submit">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
            include ('tpl/footer.php');
    ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#orderForm').on('submit', function() {
            let tour = $("#inp1").val();
            let date = new Date($("#inp2").val());
            let month = date.getMonth();
            let kol = $("#inp3").val();
            kol = Number(kol);
            let email = $("#inp4").val();
            let stoim = 0;
            if (tour == 'Крым') {
            if ((month == 5) || (month == 6) || (month == 7) || (month == 8)) {
                stoim = kol * 500;
            } else {
                stoim = kol * 300;
            }
            }
            if (tour == 'Кавказ') {
            if ((month == 12) || (month == 1) || (month == 2) || (month == 5) || (month == 6) || (month == 7) || (month == 8)) {
                stoim = kol * 300;
            } else {
                stoim = kol * 250
            }
            }
            if (tour == 'Алтай') {
            {
                stoim = kol * 1000;
            }
            }
            alert(`Примерная стоимость вашего тура на ${kol} человек составит ${stoim} у.е. Мы свяжемся с ВАМИ!`);
        }); 
    });   
    </script>
    <style>
    .container {
        padding-right: 0;
        padding-left: 0;
    }
    </style>
</body>
</html>