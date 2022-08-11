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
                $controller->seePage('View/html/assing.php');
            }
            elseif($_GET["action"] == "consult"){
                $controller->seePage('View/html/consult.php');
            }
            elseif($_GET["action"] == "cancel"){
                $controller->seePage('View/html/cancel.php'); 
            }
            elseif($_GET["action"] == "saveAppointment"){$controller->addAppointment($_POST["assignDocument"],
                $_POST["medical"],
                $_POST["date"],
                $_POST["time"],
                $_POST["office"]); 
            }
            elseif($_GET["action"] == "consultAppointment") {
                $controller->consultAppointments($_POST["consultIdentification"]);
            }
            elseif($_GET["action"] == "cancelAppointment"){
                $controller->cancelAppointments($_POST["cancelIdentification"]); 
            } 
        } else {
            $controller->seePage('View/html/homepage.php'); 
        }

    ?>
</body>