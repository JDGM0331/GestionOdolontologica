<?php 

    class Patient {
        private $identification; 
        private $names; 
        private $surnames; 
        private $dateBirth;
        private $sex; 

        public function __construct($ide, $nom, $sur, $dBi, $sex) {
            $this->identification=$ide;
            $this->names=$nom;
            $this->surnames=$sur;
            $this->dateBirth=$dBi;
            $this->sex=$sex;
        }

        public function getIdentification(){
            return $this->identification; 
        }

        public function getNames(){
            return $this->names; 
        }

        public function getSurnames(){
            return $this->surnames;
        }

        public function getDateBirth(){
            return $this->dateBirth;
        }

        public function getSex(){
            return $this->sex;
        }
    }

?>