<?php
class Movie{
    public $name;

    function __construct($_name){
        $this->name = $_name;
    }
}

$barbie = new Movie('Barbie');
$batman = new Movie('Batman');

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