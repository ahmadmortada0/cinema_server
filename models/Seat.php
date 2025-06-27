<?php
require_once("Model.php");

class Seat extends Model {

    private int $id;
    private int $seat;
    private int $showtimesId;

    protected static string $table = "seats";

    public function __construct(array $data) {
        $this->id = $data["id"];
        $this->seat = $data["seat"];
        $this->showtimesId = $data["showtimesId"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getSeat(): int {
        return $this->seat;
    }

    public function getShowtimesId(): int {
        return $this->showtimesId;
    }

    public function setSeat(int $seat){
        $this->seat = $seat;
    }

    public function setShowtimesId(int $showtimesId){
        $this->showtimesId = $showtimesId;
    }

    public function toArray(): array {
        return [$this->id, $this->seat,$this->showtimesId ];
    }
}

