<?php
interface Cars
{
    public function start();
    public function run();
    public function stop();
    public function optional();
    
}
class Maruti implements Cars
{
    public function start()
    {
        echo "car is starting<br>";
    }
    public function run()
    {
        echo "car is running<br>";
    }public function stop()
    {
        echo "car is stop";
    }
    
    public function optional(){}//if no need this method then just declare it like that no body part open and close
}
$m=new Maruti;
$m->start();
$m->run();
$m->stop();


?>