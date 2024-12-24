
<?php 


class users
{
    public $first_name;
    public $last_name;
    public $role;



    public function __construct($first_name,$last_name,$role){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->role = $role;
    }

  // Methods
  function set_name($first_name,$last_name) {
    $this->last_name = $last_name;
    $this->first_name = $first_name;
  }
  function get_name() {
    return $this->last_name ." ". $this->first_name;
  }
}

?>

