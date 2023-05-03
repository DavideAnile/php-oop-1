<?php

class Movie {

    public $name;
    public $year;
    public $genres;
    public $mainActor;
    public $adultOnly;

    function __construct(string $name, int $year, Genres $genres, string $MainActor, bool $adultOnly){

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