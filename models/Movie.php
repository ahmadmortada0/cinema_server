<?php
require_once("Model.php");

class Ticket extends Model{

    private int $id; 
    private string $title; 
    private string $description; 
    
    protected static string $table = "tickets";

    public function __construct(array $data){
        $this->id = $data["id"];
        $this->title = $data["title"];
        $this->description = $data["description"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function gettitle(): string {
        return $this->title;
    }


    public function getdescription(): string {
        return $this->description;
    }

    public function settitle(string $title){
    $this->title = $title;
    }
    public function setdescription(string $description){
    $this->description = $description;
    }
    

    public function toArray(){
        return [$this->id, $this->title,  $this->description];
    }
    
}
