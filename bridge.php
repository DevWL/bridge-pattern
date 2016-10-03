<?php 

abstract class Switcher{
    protected $state = false;
    public function change(){
        if($this->state) $this->state = false;
        else $this->state = true;
        echo $this->state. PHP_EOL;
    }
}

class TV extends Switcher{
    function __construct(){
        if($this->state) echo 'ON'.PHP_EOL;
        else echo 'OFF'.PHP_EOL;
    }
}