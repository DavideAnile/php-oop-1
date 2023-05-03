<?php 
class Movie {

    public $name;
    public $year;
    public $genres;
    public $mainActor;
    public $adultOnly;

    function __construct(string $name, int $year, string $genres, string $MainActor, bool $adultOnly){

        $this->name = $name;
        $this->year = $year;
        $this->genres = $genres;
        $this->mainActor = $MainActor;
        $this->adultOnly = $adultOnly;




    }
    public function setAdult(){
        if($this->adultOnly == true){
            return  'Visione consigliata solo ai Maggiorenni';
            
        } else {
             return  'Visione consigliata a tutti';
           
        }
    }


}

$sinister = new Movie ('sinister', 2012 , 'Horror', 'Ethan Hawke', true);
$avengers2 = new Movie ('Avengers : Age of Ultron', 2015, 'Fantasy', 'Robert Downey Jr', false );
$spiderman = new Movie ('Spiderman', 2002, 'Azione', 'Tobey Maguire', false);
$insidious = new Movie ('Insidious', 2010 , 'Horror', 'Patrick Wilson', true);

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
                <td><?= $singleMovie->genres ?></td>
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