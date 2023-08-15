<?php
$con = mysqli_connect('164.92.64.133', 'pepe', 'Coope2022','Facturacion');

$txtIdtOriginal = $_POST['txtIdtOriginal'];
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtIdtype = $_POST['txtIdtype'];
$txtPhone = $_POST['txtPhone'];
$txtUbicacion = $_POST['txtUbicacion'];

$sql = "UPDATE `Emisor` SET `NombreEmisor`='$txtName', `CorreoElectronicoEmisor`='$txtEmail', `TipoIdentificacionEmisor`='$txtIdtype', `NumTelefonoEmisor`='$txtPhone', `Ubicacion`='$txtUbicacion' WHERE `identificacion`='$txtIdtOriginal'";

$rs = mysqli_query($con, $sql);

if($rs) {
    include 'datamod_ok.html';
}

mysqli_close($con);
?>
