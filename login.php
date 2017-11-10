<?php
session_start();
error_reporting(0);
require("connect.php");
$message="";
if(!empty($_POST["login"])) {
	$sql = "SELECT * FROM users WHERE user='" . $_POST["user_name"] . "' and pass = '". $_POST["password"]."'";
    $result=$mysqli->query($sql);
    $rows = $result->num_rows;
    while($row = mysqli_fetch_assoc($result)){
        $_SESSION["user_id"] = $row['id_user'];
    }
	if($_SESSION["user_id"]!="") {
    header("Location: index.php");
	} else {
        $message = "Invalid Username or Password!";
        header("Location: login.php");

	}
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

    <div class="row">
        <div class="container">
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="col s12 m6 offset-m3">
                <div class="card-panel">
                    <div class="row">
                        <form class="" action="" method="post">
                            <p class="col s8 offset-s2">Ingresa tu usuario y contraseña</p><br/>
                            <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s8 offset-s2">
                                        <input placeholder="Nombre de usuario" name="user_name" id="user" type="text" class="validate" required>
                                        <label for="user">Usuario</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s8 offset-s2">
                                        <input placeholder="Contraseña" id="pass" name="password" type="password" class="validate" required>
                                        <label for="pass">Contraseña</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container">
                                        <button class="btn waves-effect waves-light col s12" name="login" value="Acceder" type="submit">Acceder
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <br><br><br>
            <hr>
                <br><br>
                <p style="font-size:10px;margin-top:-20px;">Desarrollado por <a href="http://proyectoalis.com">Jesus Arciniega</a> &copy; 2017</p>
        </div>
    </div>

</script>
</body>
</html>
