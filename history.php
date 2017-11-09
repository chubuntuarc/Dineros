<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dineros | Historial</title>
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

    <div class="container white z-depth-2">
        <div class="row">
            <div class="container">
                <h5 style="padding-top:20px;" class="teal-text">Historial</h5>
                <table  class="highlight">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Tipo</th>
                            <th>Importe</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Agua</td>
                            <td>Pago</td>
                            <td>$200</td>
                            <td>Nov 11 2017</td>
                        </tr>
                        <tr>
                            <td>Agua</td>
                            <td>Pago</td>
                            <td>$200</td>
                            <td>Nov 11 2017</td>
                        </tr>
                        <tr>
                            <td>Agua</td>
                            <td>Pago</td>
                            <td>$200</td>
                            <td>Nov 11 2017</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
