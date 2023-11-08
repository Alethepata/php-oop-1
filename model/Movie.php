<?php

class Movie extends Production{
    public $time;
    public function __construct($_name, $_day, $_month, $_year,$_time){

        $this->time = $_time;
        
        parent::__construct($_name, $_day, $_month, $_year);
    }
    
}

