<?php
session_start();
if($_SESSION["user_id"] == 0){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dineros | Administrador de finanzas</title>
    <!-- JQuery 3.X-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- Iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Estilo del index -->
    <link rel="stylesheet" href="css/index.css">
</head>
<body class="grey lighten-3">
    <?php include("nav.php"); ?>
    <?php include("side.php");?>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

    <?php include("content.php"); ?>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large green">
            <i class="large material-icons">blur_circular</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">clear
            </i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">add</i></a></li>
        </ul>
    </div>


    <script type="text/javascript">
    $(document).ready(function(){
        $('.tap-target').tapTarget('open');
        $('.collapsible').collapsible();
    });
    $(".button-collapse").sideNav();
    </script>
</body>
</html>
