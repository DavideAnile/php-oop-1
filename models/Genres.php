<?php 

class Genres{

    public $genere1;
    public $genere2;

    function __construct(string $genere1, string $genere2){
        $this->genere1 = $genere1;
        $this->genere2 = $genere2;
    }


    public function getGenres(){
        return "{$this->genere1}, {$this->genere2}";
    }
}


?>