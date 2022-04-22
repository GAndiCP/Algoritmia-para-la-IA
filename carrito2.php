<?php
include('connection.php');
$pro=$_POST['txtpo'];
$ram=$_POST['txtra'];
$tar=$_POST['txtta'];
$vr=$_POST['txtvr'];
$dis=$_POST['txtti'];
$dis2=$_POST['txtca'];
$precio=$_POST['txtprecio'];
$id=$_POST['txtid'];
$cant=$_POST['txtcant'];
$consulta="call usp_InsertarCompra($id,'$pro','$ram','$tar','$vr','$dis','$dis2',$cant,$precio)";
$respuesta=mysqli_query($con,$consulta);
if($respuesta)
{
   header("Location: rcompra.php");
} 
else
{
   header("Location: carrito.php");        
}
mysqli_close($con);
?>