<?php

trait Published{
    
    public $month;
    public $day;
    public $year;

    public function getDate(){ 
        
        return $this->day . '/' . $this->month . '/' . $this->year ;

    }
}