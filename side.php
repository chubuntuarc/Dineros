<?php
session_start();
if($_SESSION["user_id"] == 0){
    header("Location: login.php");
}else{
    $user =$_SESSION["user_id"];
}
//tomamos los datos del archivo conexion.php
require("connect.php");
$sql = "SELECT * FROM users WHERE id_user = $user";
//se envia la consulta
$result=$mysqli->query($sql);
$rows = $result->num_rows;
while($row = mysqli_fetch_assoc($result)){
    $name = $row["name"];
    $mail = $row["mail"];
}
 ?>
<ul id="slide-out" class="side-nav" >
    <li><div class="user-view">
        <div class="background" style="background-color:#004d40;">
            <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Flag_green_white_5x3.svg/1280px-Flag_green_white_5x3.svg.png"> -->
        </div>
        <a href="#!user"><img class="circle" src="https://avatars3.githubusercontent.com/u/9604554?s=460&v=4"></a>
        <a href="#!name"><span class="white-text name"><?php echo $name; ?></span></a>
        <a href="#!email"><span class="white-text email"><?php echo $mail; ?></span></a>
    </div></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">￼￼
            <li>
                <a class="collapsible-header" style="margin-top:-50px;">Cuentas<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <?php
                    $sql = "SELECT (SELECT SUM(cash) FROM accounts WHERE owner = $user AND type = 1) as 'debito' ,
                    (SELECT SUM(cash) FROM accounts WHERE owner = $user AND type = 2) as 'credito' ,
                    SUM(cash) as 'efectivo' FROM accounts WHERE owner = $user AND type = 3";
                    //se envia la consulta
                    $result=$mysqli->query($sql);
                    $rows = $result->num_rows;
                    while($row = mysqli_fetch_assoc($result)){
                        $debito = $row["debito"];
                        $credito = $row["credito"];
                        $efectivo = $row["efectivo"];
                    }
                    ?>
                    <ul>
                        <li><a href="#!">Débito &nbsp;&nbsp;&nbsp;<span style="color:#004d40;"><?php if($debito > 0){echo "$" . $debito;}else{ echo "$0.00"; }; ?></span></a></li>
                        <li><a href="#!">Crédito &nbsp;&nbsp;<span style="color:#004d40;"><?php if($credito > 0){echo "$" . $credito;}else{ echo "$0.00"; }; ?></span></a></li>
                        <li><a href="#!">Efectivo &nbsp;<span style="color:#004d40;"><?php if($efectivo > 0){echo "$" . $efectivo;}else{ echo "$0.00"; }; ?></span></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li><div class="divider"></div></li>
    <li><a href="#!">Pagos</a></li>
    <li><a href="#!">Creditos</a></li>
    <li><a href="#!">Entradas</a></li>
    <li><div class="divider"></div></li>
    <li><a href="history.php">Historial</a></li>
</ul>
