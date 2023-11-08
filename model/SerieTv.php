<?php

class SerieTv extends Production{
    public $seasons;
    public $episodes;
    public $last_year;
    public function __construct($_name, $_year,$_seasons, $_episodes, $_last_year){

        $this->seasons = $_seasons;
        $this->episodes = $_episodes;
        $this->last_year = $_last_year;
        
        parent::__construct($_name, $_year);
    }
    
}

