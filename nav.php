<?php
error_reporting(0);
setlocale(LC_ALL,”es_ES”);
?>
<link rel="stylesheet" href="css/nav.css">
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Control de finanzas</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <!-- <li><a href="sass.html">Sass</a></li> -->
        <li><a href="#!"><?php echo strftime("%A %d de %B del %Y"); ?></a></li>
        <li><a href="collapsible.html">Salir</a></li>
      </ul>
    </div>
  </nav>