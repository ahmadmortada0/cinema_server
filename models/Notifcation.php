<?php
require_once("Model.php");

class Notfication extends Model{

    private int $id;     
    private string $mess; 
    private int $userId; 
   
    
    protected static string $table = "notfications";

    public function __construct(array $data){
        $this->id = $data["id"];
        $this->mess = $data["mess"];
        $this->userId = $data["userId"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getMess(): string {
        return $this->mess;
    }

    public function getUserId(): int {
        return $this->userId;
    }


    public function setmess(string $mess){
        $this->mess = $mess;
    }

    public function setUserId(int $userId){
        $this->userId = $userId;
    }


    public function toArray(){
        return [$this->id, $this->mess, $this->userid];
    }
    
}
