<?php
require_once("Model.php");

class Ticket extends Model{

    private int $id; 
    private int $price; 
    private int $showtimesId; 
    
    protected static string $table = "tickets";

    public function __construct(array $data){
        $this->id = $data["id"];
        $this->price = $data["price"];
        $this->email = $data["email"];
        $this->showtimesId = $data["showtimesId"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getprice(): int {
        return $this->price;
    }


    public function getshowtimesId(): int {
        return $this->showtimesId;
    }

    public function setprice(int $price){
        $this->price = $price;
    }


    public function toArray(){
        return [$this->id, $this->price,  $this->showtimesId];
    }
    
}
