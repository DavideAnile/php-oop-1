<?php 

require_once './models/Movie.php';
require_once './models/Actors.php';
require_once 'db.php';




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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
   
<?php 

include './Partials/navbar.php'

?>


<h1>LISTA FILM</h1>


<div class='container my-4 '>

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
                <td><?= $singleMovie->getGenres() ?></td>
                <td><?= $singleMovie->mainActors->getActors() ?></td>
                <td><?= $singleMovie->GetInfoAdultString() ?></td>
                
                
            </tr>
            <?php
        }
        
        ?>

        
        
      </tbody>
    </table>
</div>

    <?php 
        
        include './Partials/footer.php'
        
        ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>