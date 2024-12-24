<?php 

require_once("");

class Doctor extends users {

    public $spec;

    public function __construct($spec) {
        $this->spec = $spec;
    }

    public function setSpeciality($speciality) {
        $this->speciality = $speciality;
    }

    public function getSpeciality(){
        return $this->spec->speciality;
    }

}



?>