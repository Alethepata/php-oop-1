<?php

class Production{

    use Published;

    public $name;

    public function __construct($_name, $_day, $_month, $_year){

        if(empty($_name)){
            throw new Exception('Ci deve essere un titolo');
        }else{
            $this->name = $_name;            
        }


        $this->month = $_month;
        $this->day = $_day;
        $this->year = $_year;

    }
    
}
