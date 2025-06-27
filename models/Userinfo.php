<?php
require_once("Model.php");

class UsersInfo extends Model {

    private int $id;
    private string $img;
    private string $age;
    private int $userId;

    protected static string $table = "usersinfos";

    public function __construct(array $data) {
        $this->id = $data["id"];
        $this->img = $data["img"];
        $this->age = $data["age"];
        $this->userId = $data["userId"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getImg(): string {
        return $this->img;
    }

    public function getAge(): string {
        return $this->age;
    }

    public function getUserId(): int {
        return $this->userId;
    }

    public function setImg(string $img) {
        $this->img = $img;
    }

    public function setAge(string $age) {
        $this->age = $age;
    }

    public function setUserId(int $userId) {
        $this->userId = $userId;
    }

    public function toArray() {
        return [$this->id, $this->img, $this->age, $this->userId];
    }
}
