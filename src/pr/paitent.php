<?php 



require_once("main.php");



class Paitent extends users {
    public $date;

    public function __construct($date) {
        $this->date = $date;
    }

    public function set_date($date) {
        $this->date = $date;
    }

    public function get_date() {
        return $this->date;
    }

}


?>