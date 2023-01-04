<?php
abstract class Office
{
    
    public $Address, $name;
    abstract public function Detail($ename,$salary,$ecode); 
    public function Welcome()
    {
        echo "Welcome to Company!!!<br>";
    } 
}
class Employee extends Office
{
    function __construct($Address,$name)
    {   
        $this->Address=$Address;
        $this->name=$name;
    }
    function Detail($ename,$salary,$ecode)
    {
        echo "Company name = '{$this->name}'<br>";
        echo "Employee Name= '{$ename}'<br>";
        echo "Employee Code ='{$ecode}'<br>";
        echo "Salary = '{$salary}'<br>";
        echo "Company Address= '{$this->Address}'<br>";
    }
}
$e=new Employee('Wappnet','ISQUARE,Sola');
$e->Welcome();

$e->Detail('Devang',30000,96);

?>