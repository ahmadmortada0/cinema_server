<?php
require_once("Model.php");

class Showtime extends Model {

    private int $id;
    private string $time;
    private string $date;
    private int $moviesId;

    protected static string $table = "showtimes";

    public function __construct(array $data) {
        $this->id = $data["id"];
        $this->time = $data["time"];
        $this->date = $data["date"];
        $this->moviesId = $data["moviesId"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTime(): string {
        return $this->time;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function getMoviesId(): int {
        return $this->moviesId;
    }

    public function setTime(string $time) {
        $this->time = $time;
    }

    public function setDate(string $date) {
        $this->date = $date;
    }

    public function setMoviesId(int $moviesId) {
        $this->moviesId = $moviesId;
    }

    public function toArray() {
        return [$this->id, $this->time, $this->date, $this->moviesId];
    }
}
