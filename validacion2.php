<?php
include('connection.php');
$names=$_POST['txtnames'];
$num=$_POST['txtnum'];
$mes=$_POST['txtmes'];
$año=$_POST['txtaño'];
$cvv=$_POST['txtcvv'];
$consulta="call usp_Validar2('$names','$num','$mes','$año','$cvv')";
$respuesta=mysqli_query($con,$consulta);
if($respuesta)
{
  if($fila=mysqli_fetch_array($respuesta))
  {
     header("Location: compra.php");
  } 
  else
  {
     header("Location: validacion.php");        
  }
} 
mysqli_close($con);
?>
