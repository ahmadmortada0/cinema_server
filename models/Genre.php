<?php
require_once("Model.php");

class Genre extends Model{

    private int $id; 
    private string $genretype; 

    
    protected static string $table ="genres";

    public function __construct(array $data){
        $this->id = $data["id"];
        $this->genretype = $data["genretype"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getGenretype(): string {
        return $this->genretype;
    }

   
    public function setgenretype(string $genretype){
        $this->genretype = $genretype;
    }


    public function toArray(){
        return [$this->id, $this->genretype];
    }
    
}
