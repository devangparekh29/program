<?php
    Class Bank
    {
        static $date='Today is 10/01/2023';
        public  static function Details()
        {
            
            return "Name=SBI<br>Branch= Mg Road<br>";
        }
    }
    Class Saving
    {
        function Withdraw($acc,$amount)
        {
            echo Bank::$date."<br>".Bank::Details();
            echo "Account number=".$acc."<br>Amount for Withdraw=".$amount;
            
        }
    }
    Class MiniStatement
    {
        function Print($acc,$balance)
        {
            echo Bank::Details();
            echo "Account number=".$acc."<br>Balance=".$balance;
            
        }
    }
    $s=new Saving;
    $s->Withdraw(361175482,500);
    echo"<br>";
    $m=new MiniStatement;
    $m->Print(361175482,49500);
    
    
?>