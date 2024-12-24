<?php 

require_once("main.php");

class Doctor extends users {
    public $speciality;

    public function __construct($lastName, $firstName, $role, $speciality) {
        parent::__construct($lastName, $firstName, $role);
        $this->speciality = $speciality;
    }

    public function consult($patient) {
        return "Dr. " . $this->getname() . " consulte " . $patient->getname();
    }
}

?>