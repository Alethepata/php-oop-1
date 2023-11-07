<?php
class Movie{
    public $name;
    public $discount = 0;
    public $yearReleased = 0;

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

$ilGiganteDiFerro = new Movie('Il gigante di ferro');
$ilGiganteDiFerro->setYearReleased(1989);

$RalphSpaccatutto = new Movie('Ralph Spaccatutto');
$RalphSpaccatutto->setYearReleased(2012);

$movie = [
    $barbie,
    $batman,
    $ilGiganteDiFerro,
    $RalphSpaccatutto
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>php-oop-1</title>
</head>
<body>
    <div class="container mt-5 d-flex">
        <?php 
        foreach($movie as $item):
        ?>
        <div class="card w-25 px-3">
            <h1 class="text-center my-3"><?php echo $item-> name ?></h1>
            <h4>Anno :</h4>
            <p><?php echo $item-> yearReleased ?></p>
            <h4>Sconto :</h4>
            <p><?php echo $item-> discount ?> %</p>
        </div>
        <?php 
        endforeach;
        ?>
    </div>
</body>
</html>