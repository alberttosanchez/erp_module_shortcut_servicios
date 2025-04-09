<?php

// URL a la que deseas redireccionar
$nueva_url = "http://domain.local/services";

// Generar el código JavaScript para abrir una nueva ventana y redireccionar
echo '<script type="text/javascript">';
echo 'window.open("' . $nueva_url . '", "_blank");';
echo 'window.location.href = "/app"';
echo '</script>';

?>