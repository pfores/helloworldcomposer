<?php namespace Com\Iesebre\Dam2\paufores\Persons;

/**
 * Created by PhpStorm.
 * User: pau
 * Date: 5/10/15
 * Time: 17:51
 */
class Student extends Person
{
    use Worker;

    public $dual = false;

   public $classRoomGroup;

    public function  __construct($dual=null)
    {
        parent::__construct();
        if ($dual != null) {
            $this->dual = $dual;
        }
    }

    public function render()
    {
        $this->type = "Alumne";
        if ($this->dual) {
            parent::render() . "i cobra" . $this->salary;
        } else {
            parent::render();
        }
    }
}