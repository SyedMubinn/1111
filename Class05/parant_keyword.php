<?php 

class Admin
{
    public function giveTasks()
    {
        echo "Giveing task to employees";
    }
}
class Employess extends Admin
{
public function performtasks ()
{
    echo "employees done the assigned tasks";
    parent::giveTasks();
}

}
$karim = new employees();
$karim->performtasks ();







?>