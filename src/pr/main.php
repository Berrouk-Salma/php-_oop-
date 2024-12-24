<?php

class users {
    public $firsName;
    public $lastName;
    public $role;

    public function __construct($firsName, $lastName, $role) {
        $this->firsName = $firsName;
        $this->lastName = $lastName;
        $this->role = $role;
    }

    public function getname() {
        return $this->firsName $this->lastName;
    }

    public function changename($firsName,$lastName) {
        $this->firsName = $firsName;
        $this->lastName = $lastName;
    }

}

?>