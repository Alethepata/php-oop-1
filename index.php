<?php
class Movie{
    public $name;
    public $discount = 0;
    private $yearReleased = 0;

    function __construct($_name){
        $this->name = $_name;
    }
    
    public function setYearReleased($_years){
        $this->yearReleased = $_years;
        if($_years < 2000){
            $this->discount = 60;
        }else{
            $this->discount = 10;
        }
    }
}

$barbie = new Movie('Barbie');
$barbie->setYearReleased(2023);

$batman = new Movie('Batman');
$batman->setYearReleased(1989);

var_dump($barbie);
var_dump($batman);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    
</body>
</html>