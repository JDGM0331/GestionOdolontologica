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
            <h2>Asignar cita</h2>
            <p>Contenido de la página</p>

            <form id="frmAssign" action="index.php?action=saveAppointment" method="post">
                <table>
                    <tr>
                        <td>Documento del paciente</td>
                        <td><input type="text" name="assignDocument" id="assignDocument"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="button" value="Consultar" name="assignConsult" id="assignConsult"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div id="patient"></div></td>
                    </tr>
                    <tr>
                        <td>Médico</td>
                        <td>
                            <select name="medical" id="medical">
                                <option value="-1" selected="selected">---Seleccione el Médico</option>
                                <option value="12345">12345-Pepito Pérez</option>
                                <option value="67890">67890-Pepita Medieta</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha</td>
                        <td>
                            <input type="date" name="date" id="date">
                        </td>
                    </tr>
                    <tr>
                        <td>Hora</td>
                        <td>
                            <select name="time" id="time">
                                <option value="-1" selected="selected"> ---Seleccione la hora ---</option>
                                <option>08:00:00</option>
                                <option>08:20:00</option>
                                <option>08:40:00</option>
                                <option>09:00:00</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Consultorio</td>
                        <td>
                            <select name="office" id="office">
                                <option value="-1" selected="selected">---Seleccione el Consultorio</option>
                                <option value="1">1 Consultas 1</option>
                                <option value="2">2 Tratamientos 1</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="assignSend" id="assignSend" value="Enviar">
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>

</body>
</html>