<?php
require_once("Model.php");

class SnackImg extends Model {

    private int $id;
    private int $snackId;
    private string $image;


    protected static string $table = "snacks_images";

    public function __construct(array $data) {
        if(isset($this->id)){
        $this->id = $data["id"];
    }
    $this->snackId = $data["snackId"];
    $this->image = $data["image"];



    }

    public function getId(): int {
        return $this->id;
    }

    public function getImage(): string {
        return $this->Image;
    }

    public function getsnackID(): int {
        return $this->snackID;
    }

    public function setImage(string $image) {
        $this->image = $image;
    }

    public function setSnackID(int $snackID) {
        $this->snackID = $snackID;
    }
    
   public function getImg(mysqli $mysqli,int $snackId) {

    $query = $mysqli->prepare("SELECT * FROM `snacks_images` WHERE snacksId= $snackId");
        $query->bind_param("i", $id);
        $query->execute();
}

    public function toArrayJson() {
        return [

          "id" => $this->id,
           "image" => $this->image,
           "snackId"=> $this->snackID,
        
        ];
    }
}