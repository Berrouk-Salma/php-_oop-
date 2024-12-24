<?php 



require_once("main.php");



class Patient extends users {
    public $date;

    public function __construct($firsName, $lastName, $role) {
        parent::__construct($firsName, $lastName, $role);
        $this->date = [];
    }

    public function make_a_date($date) {
        $this->date[] = $date;
    }
}


?>