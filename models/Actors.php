<?php 

class Actors{

    public $actor1;
    public $actor2;

    function __construct(string $actor1, string $actor2){
        $this->actor1 = $actor1;
        $this->actor2 = $actor2;
    }


    public function getActors(){
        return "{$this->actor1} , {$this->actor2}";
    }
}


?>