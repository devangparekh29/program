<?php
trait MeterToKilo
{
    public function M_to_K($meter)
    {
        return $meter/1000;
    }
}
trait MeterToCemi
{
    public function M_to_C($meter)
    {
        return $meter*100;
    }
}
Class Convertor
{
    public $meter;
    use MeterTokilo,MeterToCemi;
    public function __construct($meter)
    {
        $this->meter=$meter;
    }
    public function convert()
    {
        echo "{$this->meter} meter to Kilometer = ".Convertor::M_to_K($this->meter)."km";
        echo "<br>{$this->meter} meter to Centimeter = ".Convertor::M_to_C($this->meter)."cm";
    }

}
$c=new Convertor(1500);
$c->convert();
?>