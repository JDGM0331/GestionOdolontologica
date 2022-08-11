<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <!-- < ?php if($result > 0) {?> -->
    <?php if($result->num_rows > 0) {?>
        <table>
            <tr>
                <th>Número</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
            <?php while($row=$result->fetch_object()){?>
                <tr>
                    <td><?php echo $row->CitNumero; ?></td>
                    <td><?php echo $row->CitFecha; ?></td>
                    <td><?php echo $row->CitHora; ?></td>
                    <td>
                        <a href="#" onclick="confirmCancel(<?php echo $row->CitNumero; ?>)">
                            Cancelar
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p>El paciente no tiene citas asignadas</p>
    <?php } ?>
</body>
</html>