<?php 

require_once './models/Movie.php';
require_once './models/Genres.php';




$sinister = new Movie ('sinister', 2012, new Genres('Horror', 'Thriller'), 'Ethan Hawke', true);
$avengers2 = new Movie ('Avengers : Age of Ultron', 2015, new Genres ('Fantasy', 'Action'), 'Robert Downey Jr', false );
$spiderman = new Movie ('Spiderman', 2002, new Genres ('Action', 'Adventure'), 'Tobey Maguire', false);
$insidious = new Movie ('Insidious', 2010 , new Genres('Horror', 'Splatter'), 'Patrick Wilson', true);

$movies = [

    $sinister,
    $avengers2,
    $spiderman,
    $insidious,
];




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
   

<div class='container '>

    <table class="table">
      <thead>
        <tr>
          
          <th scope="col">Nome</th>
          <th scope="col">Anno di pubblicazione</th>
          <th scope="col">Generi</th>
          <th scope="col">Attore protagonista</th>
          <th scope="col">18 +</th>
        </tr>
      </thead>
      <tbody>
        
        <?php 
        foreach($movies as $singleMovie){


            ?>

            <tr>
                <td><?= $singleMovie->name ?></td>
                <td><?= $singleMovie->year ?></td>
                <td><?= $singleMovie->genres->getGenres() ?></td>
                <td><?= $singleMovie->mainActor ?></td>
                <td><?= $singleMovie->setAdult() ?></td>
                
                
            </tr>
            <?php
        }
        
        ?>
        
      </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>