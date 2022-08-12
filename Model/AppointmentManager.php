<?php

use LDAP\Result;

    class AppointmentManager {

        public function addAppointment(Appointment $appointment){
            $connection = new Connection();
            $connection->open(); 
            $date = $appointment->getDate(); 
            $time = $appointment->getTime();
            $patient = $appointment->getPatient();
            $medical = $appointment->getMedical();
            $office = $appointment->getOffice(); 
            $state = $appointment->getState(); 
            $observations = $appointment->getObservations(); 
            $sql = "INSERT INTO citas values (null, 
                '$date', 
                '$time', 
                '$patient', 
                '$medical', 
                '$office', 
                '$state', 
                '$observations')";
            $connection->consult($sql);
            $appointmentId = $connection->getAppointmentId();
            $connection->close(); 
            return $appointmentId;  
        }

        public function consultAppointmentById($id){
            $connection = new Connection();
            $connection->open(); 
            $sql = "SELECT pacientes.*, medicos.*, consultorios.*, citas.* "
                ."FROM pacientes, medicos, consultorios, citas "
                ."WHERE citas.CitPaciente = pacientes.PacIdentificacion "
                ." AND citas.CitMedico = medicos.MedIdentificacion "
                ." AND citas.CitNumero = $id"; 
            $connection->consult($sql); 
            $result = $connection->getResult(); 
            $connection->close(); 
            return $result;
        }

        public function consultAppointmentsByIdentification($ide){
            $connection = new Connection(); 
            $connection->open(); 
            $sql = "SELECT * FROM citas "
                ."WHERE CitPaciente = '$ide' "
                ." AND CitEstado = 'Solicitada' "; 
            $connection->consult($sql);   
            $result = $connection->getResult();    
            $connection->close(); 
            return $result; 
        }

        public function consultPatient($ide){
            $connection = new Connection(); 
            $connection->open(); 
            $sql = "SELECT * FROM pacientes WHERE PacIdentificacion = '$ide' "; 
            $connection->consult($sql); 
            $result = $connection->getResult(); 
            $connection->close();
            return $result; 
        }

        public function addPatient(Patient $patient){
            $connection = new Connection(); 
            $connection->open(); 
            $identification = $patient->getIdentification(); 
            $names = $patient->getNames(); 
            $surnames = $patient->getSurnames(); 
            $dateBith = $patient->getDateBirth(); 
            $sex = $patient->getSex(); 
            $sql = "INSERT INTO pacientes VALUES (
                '$identification',
                '$names',
                '$surnames',
                '$dateBith', 
                '$sex')"; 
            $connection->consult($sql);
            $affectedRows = $connection->getAffectedRows(); 
            $connection->close(); 
            return $affectedRows; 
        }

        public function consultMedicals(){
            $connection = new Connection(); 
            $connection->open(); 
            $sql = "SELECT * FROM medicos "; 
            $connection->consult($sql); 
            $result = $connection->getResult(); 
            $connection->close(); 
            return $result; 
        }

        public function consultAvailableHours($medical, $date){
            $connection = new Connection(); 
            $connection->open(); 
            $sql = "SELECT hora FROM horas WHERE hora NOT IN "
                ."(SELECT CitHora FROM citas WHERE CitMedico = '$medical' AND CitFecha = '$date' "
                ."AND CitEstado = 'Solicitada')"; 
            $connection->consult($sql); 
            $result = $connection->getResult(); 
            $connection->close(); 
            return $result; 
        }

        public function consultOffices(){
            $connection = new Connection(); 
            $connection->open(); 
            $sql = "SELECT * FROM consultorios "; 
            $connection->consult($sql);
            $result = $connection->getResult(); 
            $connection->close(); 
            return $result; 
        }

        public function cancelAppointment($appointment){
            $connection = new Connection(); 
            $connection->open(); 
            $sql = "UPDATE citas SET CitEStado = 'Cancelada' WHERE CitNumero = $appointment"; 
            $connection->consult($sql); 
            $affectedRows = $connection->getAffectedRows(); 
            $connection->close(); 
            return $affectedRows; 
        }

    }

?>