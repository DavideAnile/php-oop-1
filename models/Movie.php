<?php

class Movie {

    public $name;
    public $year;
    public $genres;
    public $mainActors;
    public $adultOnly;

    function __construct(string $name, int $year, array $genres, Actors $mainActors, bool $adultOnly){

        $this->name = $name;
        $this->year = $year;
        $this->genres = $genres;
        $this->mainActors = $mainActors;
        $this->adultOnly = $adultOnly;




    }

    public function GetInfoAdultString(){
        if($this->adultOnly == true){
            return  'Visione consigliata solo ai Maggiorenni';
            
        } else {
             return  'Visione consigliata a tutti';
           
        }
    }

    public function getGenres (){

        $array_stringa = implode(',',$this->genres);
        return $array_stringa;
    }

    


}