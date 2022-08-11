<?php

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
            $sql = "INSERT INTO citas values (
                null, 
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
            $sql = "SELECT pacientes.*, medicos.*, consultorios.*, citas.*"
                ."FROM pacientes as p, medicos as m, consultorios as c, citas "
                ."WHERE C.CitPaciente = p.PacIdentificacion "
                ." AND citas.CitMedico = m.MedIdentificacion "
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

    }

?>