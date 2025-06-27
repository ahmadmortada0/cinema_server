<?php
require_once("Model.php");

class Snack extends Model{

    private int $id; 
    private int $price; 
    private string $name; 
    
    protected static string $table = "snacks";

    public function __construct(array $data){
        $this->id = $data["id"];
        $this->price = $data["price"];
        $this->name = $data["name"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getprice(): int {
        return $this->price;
    }


    public function getname(): string {
        return $this->name;
    }

    public function setprice(int $price){
        $this->price = $price;
    }
    public function name(string $name){
        $this->name = $name;
    }


    public function toArray(){
        return [$this->id, $this->price,  $this->name];
    }
    
}
