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
            <li><a href="index.php?action=assign">Asignar</a></li>
            <li class="active"><a href="index.php?action=consult">Consultar Cita</a></li>
            <li><a href="index.php?action=cancel">Cancelar Cita</a></li>
        </ul>

        <div id="contents">
            <h2>Consultar Cita</h2>
            <form action="index.php?action=consultAppointment" id="frmConsult" method="post">
                <table>
                    <tr>
                        <td>Documento del Paciente</td>
                        <td><input type="text" name="consultDocument" id="consultDocument"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="consultConsult" id="consultConsult" value="Consultar">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><div id="patient2"></div></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>
</html>