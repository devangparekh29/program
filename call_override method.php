<?php
 Class Bank
 {
    public $name,$branch;

    public function Detail()
    {
        echo "
        Name of Bank is= '{$this->name}'<br>
        Branch of Bank is ='{$this->branch}'<br>
        ";
    }
 }  
 Class Customer extends Bank
 {
    public $cname,$balance;
    function __construct($name,$branch,$cname,$balance)
    {
        $this->name=$name;
        $this->branch=$branch;
        $this->cname=$cname;
        $this->balance=$balance;
        
    }
    public function Detail()
    {
        parent::Detail();
        echo "
        <br>Custome is ='{$this->cname}'<br>
        Total Balance is -'{$this->balance}'<br>
        ";
    }
 }
 $c=new Customer('CBI','Racecose','Devang',25000);
 $c->Detail();
?>