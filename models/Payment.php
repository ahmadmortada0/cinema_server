<?php
require_once("Model.php");

class Payment extends Model {

    private int $id;
    private string $typename;
    private int $userId;

    protected static string $table = "payments";

    public function __construct(array $data) {
        $this->id = $data["id"];
        $this->typename = $data["typename"];
        $this->userId = $data["userId"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTypename(): string {
        return $this->typename;
    }

    public function getUserId(): int {
        return $this->userId;
    }

    public function setTypename(string $typename): void {
        $this->typename = $typename;
    }

    public function setUserId(int $userId): void {
        $this->userId = $userId;
    }

    public function toArray(): array {
        return ["id" => $this->id,"typename" => $this->typename,"userId" => $this->userId];
    }
}
