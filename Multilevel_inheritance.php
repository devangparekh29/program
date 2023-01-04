<?php 
class A
{
    public $n1 ="This is public";
    protected $n2 ="This is protected";
    private $n3="This is private";

}
class B extends A
{
    public function printB1()
    {
        echo "public method".$this->n1."\n".$this->n2."\n".$this->n3;//you can not access n3 becoz it is private only for parent class itself 
    }
    protected function printB2()
    {
        echo "protected method".$this->n1."\n".$this->n2."\n".$this->n3;//you can not access n3 becoz it is private only for parent class itself 
    }
    private function printB3()
    {
        echo "private method".$this->n1."\n".$this->n2."\n".$this->n3;//you can not access n3 becoz it is private only for parent class itself 
    }

}
class C extends B
{
    function printC()
    {
        echo "C Class=".$this->n1."\n".$this->n2."\n".$this->n3;//you can not access n3 becoz it is private only for parent class itself 
    }
}
$a=new A;
$b=new B;
 $b->printB1();
//  $b->printB2();//not access
//  $b->printB3();//not access
$c=new C;
$c->printc();
echo "<br>Class A=".$a->n1."\n";//you can not access n3 and n2 
?>