<?php

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

    }

?>