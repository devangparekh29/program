<?php
Class A
{
    public $name;
    function __construct($name)
    {
        $this->name=$name;
        echo "Class A =".$this->name;
    }
}
Class B extends A
{
   
    function __construct($name)
    {
        $this->name=$name;
        parent::__construct($name);
        echo "Class B =".$this->name;
    }
}
Class C extends B
{
    
    function __construct($name)
    {
        $this->name=$name;
        parent::__construct($name);
        echo "Class C =".$this->name;
    }
}
Class D extends C
{
    function __construct($name)
    {
        $this->name=$name;
        echo "Class D =".$this->name;
        parent::__construct($name);
    }
    
}
$d=new D('devang');

?>