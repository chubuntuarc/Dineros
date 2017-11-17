<?php require("session_check.php");error_reporting(0); setlocale(LC_ALL,”es_ES”); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="apple-icon-57x57.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
</head>
<body>
    <?php include("navigation.php"); ?>

    <section>
        <div class="columns">
            <div class="column">
                <div class="tabs is-centered">
                    <ul>
                        <li class="is-active"><a class="tablinks" onclick="openTab(event, 'Today')">Hoy</a></li>
                        <li><a class="tablinks" onclick="openTab(event, 'Tomorrow')">Mañana</a></li>
                        <li><a class="tablinks" onclick="openTab(event, 'Next')">Próximos 5 días</a></li>
                        <li><a class="tablinks" onclick="openTab(event, 'Calendar')">Calendario</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script>
function openTab(evt, Day) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(Day).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

    <section class="wrap">
        <div class="columns">
            <div class="column is-3"></div>
            <div class="column is-6">
                <div class="tabcontent" id="Today">
                    <p>Hoy</p>
                </div>

                <div class="tabcontent" id="Tomorrow" style="display:none;">
                    <p>Mañana</p>
                </div>

                <div class="tabcontent" id="Next" style="display:none;">
                    <p>Próximos 5 días</p>
                </div>

                <div class="tabcontent" id="Calendar" style="display:none;">
                    <p>Calendario</p>
                </div>
            </div>
            <div class="column is-3"></div>
        </div>
    </section>

    <?php include("footer.php"); ?>

</body>
</html>
