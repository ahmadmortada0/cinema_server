<?php
require_once("Model.php");
// 
class Movie extends Model{

    private int $id; 
    private string $title; 
    private string $description; 
    
    protected static string $table = "movies";

    public function __construct(array $data){
        $this->id = $data["id"];
        $this->title = $data["title"];
        $this->description = $data["description"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }


    public function getDescription(): string {
        return $this->description;
    }

    public function setTitle(string $title){
    $this->title = $title;
    }
    public function setDescription(string $description){
    $this->description = $description;
    }
    

    public function toArray(){
        return [$this->id, $this->title,  $this->description];
    }
    
}
