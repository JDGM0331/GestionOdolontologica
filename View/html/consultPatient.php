<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php if($result->num_rows > 0){ ?>
        <table>
            <tr>
                <th>Documento</th>
                <th>Nombre Completo</th>
                <th>Sexo</th>
            </tr>
            <?php while($row=$result->fetch_object()){ ?>
                <tr>
                    <td><?php echo $row->PacIdentificacion; ?></td>
                    <td><?php echo $row->PacNombres." ".$row->PacApellidos; ?></td>
                    <td><?php echo $row->PacSexo; ?></td>
                    <td>Ver</td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p>El paciete no existe en la base de datos.</p>
        <input type="button" name="entPatient" id="entPatient" value="Ingresar Paciente" onclick="showForm()">
    <?php } ?>
</body>
</html>