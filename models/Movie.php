<?php
require_once("Model.php");
// 
class Movie extends Model{

    private ?int $id=null; 
    private string $title; 
    private string $description; 
    private string $image; 
    private string $trailer; 
    
    protected static string $table = "movies";

    public function __construct(array $data){
       if (isset($data["id"])) {
            $this->id = $data["id"];
        }
        $this->title = $data["title"];
        $this->description = $data["description"];
        $this->image = $data["image"];
        $this->trailer = $data["trailer"];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }
    public function getImage(): string {
        return $this->image;
    }
    public function getTrailer(): string {
        return $this->trailer;
    }


    public function getDescription(): string {
        return $this->description;
    }

    public function setTitle(string $title){
    $this->title = $title;
    }
    public function setImage(string $image){
    $this->image = $image;
}

public function setTrailer(string $trailer){
    $this->trailer = $trailer;
}

    public function setDescription(string $description){
    $this->description = $description;
    }
    
function insertMovie($mysqli) {
    $imageData = file_get_contents($this->image);

    $query = "INSERT INTO movies (title, description, image, trailer) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ssss", $this->title, $this->description, $imageData, $this->trailer);
    $stmt->send_long_data(2, $imageData);
    
    $stmt->execute();
    echo "Inserted: $this->title\n";
}
    public function toArray(){
        return [$this->id, $this->title,  $this->description,$this->image,$this->trailer];
    }
    public function toArrayJson(){
        return [  
        "id" => $this->id,
        "title" => $this->title,
        "image" => base64_encode($this->image),
        "trailer" => $this->trailer,
        "description" => $this->description];
    }
    
}
