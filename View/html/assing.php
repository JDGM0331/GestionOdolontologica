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
                        <td><input type="text" name="assignIdentification" id="assignIdentification"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="button" value="Consultar" name="assignConsult" id="assignConsult" onclick="consultPatient()"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div id="patient"></div></td>
                    </tr>
                    <tr>
                        <td>Médico</td>
                        <td>
                            <select name="medical" id="medical">
                                <option value="-1" selected="selected">---Seleccione el Médico</option>
                                <option value="6789">12345-Pepito Pérez</option>
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

    <div id="frmPatient" title="Agregar Nuevo Paciente">
        <form id="addPatient">
            <table>
                <tr>
                    <td>Documento</td>
                    <td><input type="text" name="PatIdentification" id="PatIdentification"></td>
                </tr>
                <tr>
                    <td>Nombres</td>
                    <td><input type="text" name="PatNames" id="PatNames"></td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" name="PatSurnames" id="PatSurnames"></td>
                </tr>
                <tr>
                    <td>Fecha de Nacimiento</td>
                    <td><input type="date" name="PatBirth" id="PatBirth"></td>
                </tr>
                <tr>
                    <td>Sexo</td>
                    <td>
                        <select name="PatSex" id="PatSex">
                            <option value="-1" selected="selected">--Seleccione el sexo ---</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>