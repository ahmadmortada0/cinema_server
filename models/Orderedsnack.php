<?php
require_once("Model.php");

class OrderedSnack extends Model {

    private int $id;
    private int $seatsId;

    protected static string $table = "orderedsnacks";

    public function __construct(array $data) {
        $this->id = $data["id"];
        $this->seatsId = $data["seatsId"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getSeatsId(): int {
        return $this->seatsId;
    }

    public function setSeatsId(int $seatsId): void {
        $this->seatsId = $seatsId;
    }

    public function toArray(): array {
        return ["id" => $this->id,"seatsId" => $this->seatsId];
    }
}
