<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión Odontológica</title>

    <link rel="stylesheet" type="text/css" href="View/css/styles.css">

</head>
<body>
    
    <div id="container">
        <div id="header">
            <h1>Sistema de gestión Odontológica</h1>
        </div>

        <ul id="menu">
            <li><a href="index.php">Inicio</a></li>
            <li class="active"><a href="index.php?action=assign">Asignar</a></li>
            <li><a href="index.php?action=consult">Consultar Cita</a></li>
            <li><a href="index.php?action=cancel">Cancelar Cita</a></li>
        </ul>

        <div id="contents">
            <?php $row = $result->fetch_object(); ?>
            <h2>Información Cita</h2>
            <table>
                <tr>
                    <th colspan="2">Datos del paciente</th>
                </tr>
                <tr>
                    <td>Documento</td>
                    <td><?php echo $row->PacIdentificacion; ?></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><?php echo $row->PacNombres." ".$row->PacApellidos; ?></td>
                </tr>
                <tr>
                    <th colspan="2">Datos del Médico</th>
                </tr>
                <tr>
                    <td>Documento</td>
                    <td><?php echo $row->MedIdentificacion; ?></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><?php echo $row->MedNombres." ".$row->MedApellidos; ?></td>
                </tr>
                <tr>
                    <th colspan="2">Datos de la Cita</th>
                </tr>
                <tr>
                    <td>Número</td>
                    <td><?php echo $row->CitNumero; ?></td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <td><?php echo $row->CitFecha; ?></td>
                </tr>
                <tr>
                    <td>Hora</td>
                    <td><?php echo $row->CitHora; ?></td>
                </tr>
                <tr>
                    <td>Número de Consultorio</td>
                    <td><?php echo $row->CitConsultorio; ?></td>
                </tr>
                <tr>
                    <td>Estado</td>
                    <td><?php echo $row->CitEstado; ?></td>
                </tr>
                <tr>
                    <td>Observaciones</td>
                    <td><?php echo $row->CitObservaciones; ?></td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>