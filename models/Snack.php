<?php
require_once("Model.php");

class Snack extends Model {

    private ?int $id = null;
    private string $name;
    private int $price;

    protected static string $table = "snacks";

    public function __construct(array $data) {
        if (isset($data["id"])) {
            $this->id = $data["id"];
        }
        $this->name = $data["name"];
        $this->price = $data["price"];
    }

    public function getId(): ?int {
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

    public function insertSnack(mysqli $mysqli): bool {
    $stmt = $mysqli->prepare("INSERT INTO snacks (name, price) VALUES (?, ?)");
    if (!$stmt) return false;

    $stmt->bind_param("si", $this->name, $this->price);
    return $stmt->execute();
}


    public function toArray() {
        return [$this->id, $this->name, $this->price];
    }
}

