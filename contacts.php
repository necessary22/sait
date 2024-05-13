<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Туры</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body-top">
    <header class="container">
        <div class="row">
            <div class="col-3">
                <img id="logo" src="img/logo.jpg" alt="Logo">
            </div>
            <div class="col-9">
                <h1>Путешествуйте с нами!</h1>
            </div>
        </div>
    </header>
    <div class="container">
        <div id = "menu">
            <nav class = "nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link" href="index.php" >Главная</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="turs.php" >Наши туры</а>
                <a class="flex-sm-fill text-sm-center nav-link" href="contacts.php">0 нас</a>
            </nav>
        </div>
        
        <footer class="footer">
            <div class="row">
                <div class="col">
                    Это сайт, предназначенный для обучения 
                </div>
            </div>
        </footer>
            <?php
                include("php/dbconnect.php");

                $result = $mysqli->query("SELECT * FROM remarks");
                $table = "<table id='contacts'>";
                $k = 1;

                while ($myrow = $result->fetch_assoc()) {
                    $table .= "<tr>";
                    $table .= "<td>".$myrow['topic']."</td>";
                    $table .= "<td>".$myrow['text']."</td>";
                    $table .= "</tr>";
                    $k++;
                }
                $table .= "</table>";
                echo $table;
            ?>       
    <style>
    .container {
        padding-right: 0;
        padding-left: 0;
    }
    </style>
</body>
</html>