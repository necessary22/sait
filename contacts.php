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
    <header class="container">
        
    </header>

<?php
    include ('tpl/footer.php');
?>
<?php
    include("php/dbconnect.php");

    $result = $mysqli->query("SELECT * FROM remarks");
    $table = "<table id='contacts'>";
    $k = 1;

    while ($myrow = $result->fetch_assoc()) {
        $table .= "<tr>";
        $table .= "<td>".$myrow['tema']."</td>";
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