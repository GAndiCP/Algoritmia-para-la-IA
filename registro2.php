<?php
include('connection.php');
$name=$_POST['txtname'];
$pat=$_POST['txtpat'];
$mat=$_POST['txtmat'];
$mail=$_POST['txtmail'];
$user=$_POST['txtuser'];
$pass=$_POST['txtpass'];
$consulta="call usp_InsertarUsuario('$name','$pat','$mat','$mail','$user','$pass')";
$respuesta=mysqli_query($con,$consulta);
if($respuesta)
{
  header("Location: indexx.php");
} 
else
{
  header("Location: registro.php");        
}
mysqli_close($con);
?>