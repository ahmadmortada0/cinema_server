<?php
require_once("Model.php");

class User extends Model{

    private ?int $id=null; 
    private string $name; 
    private string $email; 
    private string $password; 
    
    protected static string $table = "users";

    public function __construct(array $data){
               if (isset($data["id"])) {
            $this->id = $data["id"];
        }
        $this->name = $data["name"];
        $this->email = $data["email"];
        $this->password = $data["password"];
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function setPassword(string $password){
        $this->password = $password;
    }

  public function toArray() {
    return [
        "id" => $this->id,
        "name" => $this->name,
        "email" => $this->email,
        "password" => $this->password
    ];
}
}