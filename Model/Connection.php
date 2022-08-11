<?php

    class Connection {

        private $mySQLI; 
        private $sql; 
        private $result; 
        private $affectedRows; 
        private $appointmentId; 
        
        public function open(){
            $this->mySQLI=new mysqli("localhost", "root", "", "citas");
            if(mysqli_connect_error()){
                return 0; 
            } else {
                return 1; 
            }
        }

        public function close(){
            $this->mySQLI->close();
        }

        public function consult($sql){
            $this->sql = $sql; 
            $this->result = $this->mySQLI->query($this->sql);
            $this->affectedRows = $this->mySQLI->affected_rows; 
            $this->appointmentId = $this->mySQLI->insert_id; 
        }

        public function getResult(){
            return $this->result; 
        }

        public function getAffectedRows(){
            return $this->affectedRows; 
        }

        public function getAppointmentId(){
            return $this->appointmentId;
        }

    }

?>