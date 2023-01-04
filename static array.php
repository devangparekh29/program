<?php
class Array_print
{
    public static $a=0;
}
Class Child extends Array_print
{
    public function Print()
    {
        for($i=0;$i<5;$i++)
        {   
            echo self::$a++;
        }
    }
}
$c=new Child;
$c->Print();
?>