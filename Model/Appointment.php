<?php

    class Appointment {
        private $number; 
        private $date; 
        private $time; 
        private $patient; 
        private $medical; 
        private $office; 
        private $state; 
        private $observations; 

        public function __construct($num, $dat, $tim, $pat, $med, $off, $sta, $obs) {
            $this->number=$num;
            $this->date=$dat;
            $this->time=$tim;
            $this->patient=$pat;
            $this->medical=$med;
            $this->office=$off;
            $this->state=$sta;
            $this->observations=$obs;
        }

        public function getNumber() {
            return $this->number;
        }

        public function getDate() {
            return $this->date;
        }

        public function getTime() {
            return $this->time;
        }

        public function getPatient() {
            return $this->patient;
        }

        public function getMedical() {
            return $this->medical; 
        }

        public function getOffice() {
            return $this->office; 
        }

        public function getState() {
            return $this->state;
        }

        public function getObservations() {
            return $this->observations; 
        }

    }

?>