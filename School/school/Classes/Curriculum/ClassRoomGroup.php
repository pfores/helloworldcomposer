<?php
/**
 * Created by PhpStorm.
 * User: pau
 * Date: 5/10/15
 * Time: 20:10
 */

namespace Com\Iesebre\Dam2\paufores\Curriculum;


use Com\Iesebre\Dam2\paufores\Persons\Student;

/**
 * Class ClassRoomGroup
 * @package Com\Iesebre\Dam2\paufores\Curriculum
 */
class ClassRoomGroup
{

    public $students = array();

    /**
     * ClassRoomGroup constructor.
     * @param array $students
     */
    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function  addStudent(Student $student)
    {
        array_push($this->students,$student);
    }

    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }

}