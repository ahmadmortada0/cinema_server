<?php
require_once("Model.php");

class Admin extends Model{

    private int $id; 
    private string $email; 
    private string $password; 
    
    protected static string $table = "admins";

    public function __construct(array $data){
        $this->id = $data["id"];
        $this->email = $data["email"];
        $this->password = $data["password"];
    }

    public function getId(): int {
        return $this->id;
    }


    public function getemail(): string {
        return $this->email;
    }

    public function getpassword(): string {
        return $this->password;
    }


    public function setemail(string $email){
        $this->email = $email;
    }

    public function setpassword(string $password){
        $this->password = $password;
    }

    public function toArray(){
        return [$this->id, $this->email, $this->password];
    }///
    
}
