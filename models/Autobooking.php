<?php
require_once("Model.php");

class Autobooking extends Model{

    private int $id; 
    
    protected static string $table = "autobookings";

    public function __construct(array $data){
        $this->id = $data["id"];
       
    }

    public function getId(): int {
        return $this->id;
    }

    public function toArray(){
        return [$this->id];
    }
    
}
