<?php
$con = mysqli_connect('164.92.64.133', 'pepe', 'Coope2022', 'Facturacion');

if (isset($_POST['txtIdtConsulta'])) {
    $txtIdtConsulta = $_POST['txtIdtConsulta'];

    $query = "SELECT * FROM `Emisor` WHERE `identificacion` = '$txtIdtConsulta'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        echo '<!DOCTYPE html>';
        echo '<html lang="en" dir="ltr">';
        echo '  <head>';
        echo '    <meta charset="UTF-8">';
        echo '    <title> Consultas </title>';
        echo '    <link rel="stylesheet" href="style.css">';
        echo '    <link rel="stylesheet" type="text/css" href="estilos.css">';
        echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '  </head>';
        echo '<body>';
        echo '  <div class="container">';
        echo '    <div class="title">Resultado de la consulta</div>';
        echo '    <div class="content">';
        echo '      <form method="POST" action="save_new_info.php">';
        echo '        <input type="hidden" name="txtIdtOriginal" value="' . $txtIdtConsulta . '">';
        echo '        <div class="user-details">';
        echo '          <div class="input-box">';
        echo '            <label for="name" class="details">Nombre de su empresa</label>';
        echo '            <input type="text" name="txtName" value="' . $row['NombreEmisor'] . '" required><br>';
        echo '          </div>';
        echo '          <div class="input-box">';
        echo '            <label for="email" class="details">Email</label>';
        echo '            <input type="text" name="txtEmail" value="' . $row['CorreoElectronicoEmisor'] . '" required><br>';
        echo '          </div>';
        echo '          <div class="input-box" style="position: relative; width: 200px;">';
        echo '            <label for="idtype">Tipo de identificación:</label>';
        echo '            <select name="txtIdtype" id="txtIdtype">';
        echo '              <option value="Física">Física</option>';
        echo '              <option value="Jurídica">Jurídica</option>';
        echo '            </select>';
        echo '          </div>';
        echo '          <div class="input-box">';
        echo '            <label for="phone" class="details">Teléfono</label>';
        echo '            <input type="text" name="txtPhone" value="' . $row['NumTelefonoEmisor'] . '" required pattern="[0-9]+" title="Por favor, ingrese solo números"><br>';
        echo '          </div>';
        echo '          <div class="input-box">';
        echo '            <label for="ubicacion" class="details">Ubicación</label>';
        echo '            <input type="text" name="txtUbicacion" value="' . $row['Ubicacion'] . '" required><br>';
        echo '          </div>';
        echo '        </div>';
        echo '        <div class="button">';
        echo '          <input type="submit" name="SubmitModificar" id="SubmitModificar" value="Guardar Cambios">';
        echo '        </div>';
        echo '      </form>';
        echo '      <form>';
        echo '        <div class="button">';
        echo '          <input type="submit" name="Submit" id="Submit" value="Cancelar" formaction="index.html">';
        echo '        </div>';
        echo '      </form>';
        echo '    </div>';
        echo '  </div>';
        echo '</body>';
        echo '</html>';
    } else {
        echo '<!DOCTYPE html>';
        echo '<html lang="en" dir="ltr">';
        echo '  <head>';
        echo '    <meta charset="UTF-8">';
        echo '    <title> Upps! </title>';
        echo '    <link rel="stylesheet" href="style.css">';
        echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '  </head>';
        echo '<body>';
        echo '  <div class="container">';
        echo '    <div class="title">No se han encontrado datos relacionados a ese número de idenfificación</div>';
        echo '    <div class="content">';
        echo '      <form>';
        echo '        <div class="button">';
        echo '            <input type="submit" name="Submit" id="Submit" value="Volver a buscar" formaction="check_info_id.html">';
        echo '        </div>';
        echo '      </form>';
        echo '    </div>';
        echo '    <form>';
        echo '      <div class="button">';
        echo '          <input type="submit" name="Submit" id="Submit" value="Registrarse" formaction="index.html">';
        echo '      </div>';
        echo '    </form>';
        echo '  </div>';
        echo '</body>';
        echo '</html>';
    }
}

mysqli_close($con);
?>
