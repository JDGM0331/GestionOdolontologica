<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión Odontológica</title>

    <link rel="stylesheet" type="text/css" href="View/css/styles.css">
    <script type="text/javascript" src="View/jquery/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="View/jquery/jquery-ui-1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="View/jquery/jquery-ui-1.13.2/jquery-ui.min.css">
    <script type="text/javascript" src="View/js/script.js"></script>

</head>
<body>
    
    <div id="container">
        <div id="header">
            <h1>Sistema de gestión Odontológica</h1>
        </div>

        <ul id="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php?action=assign">Asignar</a></li>
            <li><a href="index.php?action=consult">Consultar Cita</a></li>
            <li class="active"><a href="index.php?action=cancel">Cancelar Cita</a></li>
        </ul>

        <div id="contents">
            <h2>Cancelar cita</h2>
            <form action="index.php?action=cancelAppointment" id="frmCancel" method="get">
                <table>
                    <tr>
                        <td>Documento del Paciente </td>
                        <td>
                            <input type="text" name="cancelIdentification" id="cancelIdentification">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="button" name="consultCancel" id="consultCancel" value="Consultar" onclick="cancelAppointment()">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><div id="patient3"></div></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>
</html>