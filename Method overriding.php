<?php
class A
{
    public $name="Devang";
    function Print()
    {
        echo "Parent Class" ;
    }
}
class B extends A
{
    function Print()
    {
        echo "Child Class ";
    }
}
$a=new A;
$b=new B;
$a->Print();
$b->Print();
?>