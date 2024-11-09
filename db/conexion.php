<?php 
$link = mysqli_connect("localhost", "root", "", "php1_sami27avila"); 
if (!$link) { 
die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); 
} 
echo 'Éxito... ' . mysqli_get_host_info($link) . "\n"; ?> 
