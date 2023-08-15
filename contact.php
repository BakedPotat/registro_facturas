<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('164.92.64.133', 'pepe', 'Coope2022','Facturacion');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtIdtype = $_POST['txtIdtype'];
$txtIdt = $_POST['txtIdt'];
$txtPhone = $_POST['txtPhone'];
$txtUbicacion = $_POST['txtUbicacion'];

// database insert SQL code
$sql = "INSERT INTO `Emisor` (`Id`, `NombreEmisor`, `CorreoElectronicoEmisor`, `TipoIdentificacionEmisor`, `NumTelefonoEmisor`, `Ubicacion`) VALUES ('0', '$txtName', '$txtEmail', '$txtIdtype', '$txtPhone',  '$txtUbicacion')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	include 'datasent_ok.html';
}

?>