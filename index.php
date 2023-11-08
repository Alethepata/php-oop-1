<?php

require_once __DIR__ . '/Traits/Published.php';
require_once __DIR__ . '/model/Production.php';
require_once __DIR__ . '/model/Movie.php';
require_once __DIR__ . '/model/SerieTv.php';
require_once __DIR__ . '/db/db.php';

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
    <div class="container mt-5 d-flex flex-wrap">
        <?php 
        foreach($productions as $production):
        ?>
        <div class="card w-25 px-3">
            <div class="card-text">

                <h1 class="text-center my-3"><?php echo $production-> name ?></h1>

                <h4>Anno :</h4>
                <p><?php echo $production->getDate() ?></p>

                <?php if(isset($production-> seasons)): ?>
                    <h4>Stagioni:</h4>
                    <p><?php echo $production-> seasons ?></p>
                <?php endif;?>

                <?php if(isset($production-> episodes)): ?>
                    <h4>Episodi:</h4>
                    <p><?php echo $production-> episodes ?></p>
                <?php endif;?>

                <?php if(isset($production-> last_year)): ?>
                    <h4>Terminato:</h4>
                    <p><?php echo $production-> last_year ?></p>
                <?php endif;?>

                <?php if(isset($production-> time)): ?>
                    <h4>Durata:</h4>
                    <p><?php echo $production-> time ?></p>
                <?php endif;?>

            </div>
            
        </div>
        <?php 
        endforeach;
        ?>
    </div>
</body>
</html>