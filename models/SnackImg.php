<?php
require_once("Model.php");

class SnackImg extends Model {

    private int $id;
    private string $name;
    private int $price;


    protected static string $table = "snacks_images";

    public function __construct(array $data) {
        $this->id = $data["id"];
        $this->name = $data["name"];
        $this->price = $data["price"];

    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setPrice(int $price) {
        $this->price = $price;
    }
    
   public function getImg(mysqli $mysqli,int $snackId): bool {

    $stmt  = $mysqli->prepare("SELECT * FROM `snacks_images` WHERE snacksId= $snackId");
      $query = $mysqli->prepare($stmt);
        $query->bind_param("i", $id);
        $query->execute();
}

    public function toArray() {
        return [
            $this->id,
            $this->name,
            $this->price,
        ];
    }
}