<?php

use FFI\ParserException;

    class Controller {

        public function seePage($route){
            require_once $route; 
        }

        public function addAppointment($ide, $med, $dat, $tim, $off){
            $appointment = new Appointment(null, $dat, $tim, $ide, $med, $off, "Solicitada", "Ninguna");
            $appointmentManager = new AppointmentManager(); 
            $id = $appointmentManager->addAppointment($appointment); 
            $result = $appointmentManager->consultAppointmentById($id);
            require_once 'View/html/confirmAppointment.php'; 
        }

        public function consultAppointments($ide){
            $appointmentManager = new AppointmentManager(); 
            $result = $appointmentManager->consultAppointmentsByIdentification($ide); 
            require_once 'View/html/consultAppointments.php'; 
        }

        public function cancelAppointments($ide){
            $appointmentManager = new AppointmentManager(); 
            $result = $appointmentManager->consultAppointmentsByIdentification($ide); 
            require_once 'View/html/cancelAppointments.php'; 
        }

        public function consulPatient($ide){
            $appointmentManager = new AppointmentManager(); 
            $result = $appointmentManager->consultPatient($ide); 
            require_once 'View/html/consultPatient.php'; 
        }

        public function addPatient($ide, $nom, $sur, $dat, $sex){
            $patient = new Patient($ide, $nom, $sur, $dat, $sex); 
            $appointmentManager = new AppointmentManager(); 
            $records = $appointmentManager->addPatient($patient); 
            if($records > 0){
                echo "Se insertó el paciente con éxito"; 
            } else {
                echo "Error al registrar paciente"; 
            }
        }

        public function loadAssign(){
            $appointmentManager = new AppointmentManager(); 
            $result = $appointmentManager->consultMedicals(); 
            $result2 = $appointmentManager->consultOffices(); 
            require_once 'View/html/assing.php'; 
        }

        public function consultAvailableHours($medical,$date){
            $appointmentManager = new AppointmentManager(); 
            $result = $appointmentManager->consultAvailableHours($medical, $date); 
            require_once 'View/html/consutlHours.php'; 
        }

        public function viewAppointment($appointment){
            $appointmentManager = new AppointmentManager(); 
            $result = $appointmentManager->consultAppointmentById($appointment); 
            require_once 'View/html/confirmAppointment.php'; 
        }

        public function confirmCancelAppointment($appointment){
            $appointmentManager = new AppointmentManager(); 
            $records = $appointmentManager->cancelAppointment($appointment); 
            if($records > 0){
                echo "La cita se ha cancelado con éxito"; 
            } else {
                echo "Hubo un error al cancelar la cita"; 
            }
        }

    }

?>