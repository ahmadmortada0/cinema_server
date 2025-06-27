<?php
require_once("Model.php");

class invite extends Model{

    private int $id; 
    private int $userId; 
    private int $userinvitedId; 
 
    
    protected static string $table = "users";

    public function __construct(array $data){
        $this->id = $data["id"];
        $this->userID = $data["userId"];
        $this->userinvitedId = $data["userinvitedId"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getUserId(): int {
        return $this->name;
    }
    public function getUserinvitedId(): int {
        return $this->name;
    }



    public function setUserId(int $userId){
        $this->userId = $userID;
    }

    public function setUserinvitedId(int $userinvitedId){
        $this->userinvitedId = $userinvitedId;
    }

    
    public function toArray(){
        return [$this->id, $this->userId, $this->getUserinvitedId];
    }
    
}
