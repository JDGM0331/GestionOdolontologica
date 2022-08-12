<body>
    <?php

        require_once 'Controller/controller.php'; 
        require_once 'Model/AppointmentManager.php'; 
        require_once 'Model/Appointment.php'; 
        require_once 'Model/Patient.php'; 
        require_once 'Model/Connection.php'; 

        $controller = new Controller(); 

        if( isset($_GET["action"])){
            if($_GET["action"] == "assign"){
                $controller->loadAssign(); 
            }
            elseif($_GET["action"] == "consult"){
                $controller->seePage('View/html/consult.php');
            }
            elseif($_GET["action"] == "cancel"){
                $controller->seePage('View/html/cancel.php'); 
            }
            elseif($_GET["action"] == "saveAppointment"){$controller->addAppointment($_POST["assignIdentification"],
                $_POST["medical"],
                $_POST["date"],
                $_POST["time"],
                $_POST["office"]); 
            }
            elseif($_GET["action"] == "consultAppointment") {
                $controller->consultAppointments($_GET["consultIdentification"]);
            }
            elseif($_GET["action"] == "cancelAppointment"){
                $controller->cancelAppointments($_GET["cancelIdentification"]); 
            } 
            elseif($_GET["action"] == "consultPatient"){
                $controller->consulPatient($_GET["identification"]); 
            } 
            elseif($_GET["action"] == "addPatient"){
                $controller->addPatient(
                    $_GET["PatIdentification"],
                    $_GET["PatNames"],
                    $_GET["PatSurnames"],
                    $_GET["PatBirth"],
                    $_GET["PatSex"]
                ); 
            } 
            elseif($_GET["action"] == "consultHour"){
                $controller->consultAvailableHours($_GET["medical"],$_GET["date"]); 
            } 
            elseif($_GET["action"] == "viewAppointment"){
                $controller->viewAppointment($_GET["number"]); 
            } 
            elseif($_GET["action"] == "confirmCancel"){
                $controller->confirmCancelAppointment($_GET["number"]); 
            } 
        } else {
            $controller->seePage('View/html/homepage.php'); 
        }

    ?>
</body>