<?php
session_start();
if($_SESSION["user_id"] == 0){
    header("Location: login.php");
}else{
    $type = $_GET["type"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dineros | Mis cuentas</title>
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

    <link rel="stylesheet" href="css/content.css">
    <div class="row">
        <div class="container">
            <div class="row">
                <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header green white-text active">
                            <?php
                            switch ($type) {
                                case 'deb':
                                    echo "<h5>Mis cuentas de débito</h5>";
                                    break;
                                case 'cre':
                                    echo "<h5>Mis cuentas de crédito</h5>";
                                    break;
                                case 'efe':
                                    echo "<h5>Mi efectivo</h5>";
                                    break;
                                default:
                                    echo "Mis cuentas";
                                    break;
                            }
                             ?>
                         </div>
                        <div class="collapsible-body white">
                            <table  class="highlight">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th <?php if($type == 'efe'){echo "style='display:none;'";} ?>>Fecha expiración</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>

                            <?php
                            switch ($type) {
                                case 'deb':
                                    $sql = "SELECT name,expiration, cash FROM accounts WHERE owner = $user AND type = 1";
                                    break;
                                case 'cre':
                                    $sql = "SELECT name,expiration, cash FROM accounts WHERE owner = $user AND type = 2";
                                    break;
                                case 'efe':
                                    $sql = "SELECT name,expiration, cash FROM accounts WHERE owner = $user AND type = 3";
                                    break;
                                default:
                                    $sql = "SELECT name,expiration, cash FROM accounts WHERE owner = $user";
                                    break;
                            }
                            //se envia la consulta
                            $result=$mysqli->query($sql);
                            $rows = $result->num_rows;
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>".$row["name"]."</td>";
                                if($type!='efe'){echo "<td>".$row["expiration"]."</td>";}
                                echo "<td>$".number_format($row["cash"])."</td>";
                                echo "</tr>";
                            }
                             ?>
                         </tbody>
                     </table>
                        </div>
                    </li>
                </ul>

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
