<?php include "./conexion.php"; 
$sql = "DELETE FROM usuarios WHERE cedula='$_GET[eli]'"; 
$result = mysqli_query($link, $sql); 
if (!mysqli_error($link)) { 
?> 
<script> 
alert("Se elimino con exito"); 
</script> 
<?php } else { ?> 
<script> 
alert("Estamos en mantenimiento preventivo");
</script> 
<?php } ?> 
<meta http-equiv="refresh" content="0;URL=modificar.php"> 
