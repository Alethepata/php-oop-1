<?php

class Production{

    use Published;

    public $name;

    public function __construct($_name, $_day, $_month, $_year){

        $this->name = $_name;
        $this->month = $_month;
        $this->day = $_day;
        $this->year = $_year;

    }
    
}
