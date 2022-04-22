<?php
include('connection.php');
$pass=$_POST['txtpass'];
$user=$_POST['txtuser'];
$consulta="call usp_Validar('$user','$pass')";
$respuesta=mysqli_query($con,$consulta);
if($respuesta)
{
  if($fila=mysqli_fetch_array($respuesta))
  {
     header("Location: indexx.php");
  } 
  else
  {
     header("Location: login.php");        
  }
} 
mysqli_close($con);
?>