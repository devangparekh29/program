<?php
//this file contain constants(code is given in comment) 
// <?php 
// const PI=3.14,RATE=9.5; 
include 'Constant_File.php';
Class Circle
{
    public $r;
    public function __construct($r)
    {
        $this->r=$r;
    }
    public function area()
    {
        return (PI * $this->r * $this->r);
    }
}
Class Loan
{
    public $amount,$time;
    public function __construct($amount,$time)
    {
        $this->amount=$amount;
        $this->time=$time;        
    }
    public function Intrest()
    {
        return ($this->amount*RATE*$this->time)/100;
    }
}
$c=new Circle(10);
echo "Area Of cicle is = ".$c->area();

$l=new Loan(10000,3);
echo "<br>9.5% Intrest of your Loan is =".$l->Intrest();

?>