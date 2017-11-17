<?php require("session_check.php");
$type = $_GET["type"];
switch ($type) {
    case 'deb':
    $titulo = 'Mis cuentas de débito';
    $head = 'Mis cuentas | Débito';
    break;
    case 'cre':
    $titulo = 'Mis cuentas de crédito';
    $head = 'Mis cuentas | Crédito';
    break;
    case 'efe':
    $titulo = 'Mis cuentas de efectivo';
    $head = 'Mis cuentas | Efectivo';
    break;
    default:
    $titulo = 'Mis cuentas';
    $head = 'Mis cuentas';
    break;
} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $head; ?></title>
    <link rel="shortcut icon" href="apple-icon-57x57.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
</head>
<body>
    <?php include("navigation.php"); ?>

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    <?php echo $titulo ?>
                </h1>
                <h2 class="subtitle">
                    Administrar cuentas
                </h2>
            </div>
        </div>
    </section>

    <section>
        <br>
        <nav class="level">
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
                echo '<div class="level-item has-text-centered">';
                echo '<div>';
                echo '<p class="heading">'.$row["name"].'</p>';
                echo '<p class="title">$'.number_format($row["cash"]).'</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </nav>
    </section>

    <?php include("footer.php"); ?>

</body>
</html>
