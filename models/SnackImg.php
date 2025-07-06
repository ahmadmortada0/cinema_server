<?php
require_once("Model.php");

class SnackImg extends Model {

    private ?int $id = null;
    private int $snacksId;
    private string $image;


    protected static string $table = "snacks_images";

    public function __construct(array $data) {
        if(isset($this->id)){
        $this->id = $data["id"];
    }
    $this->snacksId = $data["snacksId"];
    $this->image = $data["image"];



    }

    public function getId(): int {
        return $this->id;
    }

    public function getImage(): string {
        return $this->Image;
    }

    public function getsnacksId(): int {
        return $this->snacksId;
    }

    public function setImage(string $image) {
        $this->image = $image;
    }

    public function snacksId(int $snacksId) {
        $this->snacksId = $snacksId;
    }
    
//    public  static function getImg(mysqli $mysqli,int $snackId) {

//     $query = $mysqli->prepare("SELECT * FROM `snacks_images` WHERE snackId= $snackId");
//         $query->bind_param("i", $snackId);
//         $query->execute();
// }

function insertSnackImage($mysqli) {
    $imageData = file_get_contents($this->image);

    $query = "INSERT INTO snacks_images (snacksID , image ) VALUES (?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("is", $this->snacksId ,$imageData);
    $stmt->send_long_data(2, $imageData);
    
    $stmt->execute();
}

    public function toArrayImageJson() {
        return [

          "id" => $this->id,
          "snacksId"=> $this->snacksId,
           "image" =>base64_encode($this->image),
        
        ];
    }
      public  static function getImg(mysqli $mysqli,int $snacksId) {
        $query = $mysqli->prepare("SELECT * FROM snacks_images WHERE `snacksId`= ?");
        $query->bind_param("i", $snacksId);
        $query->execute();
        $data = $query->get_result()->fetch_assoc();
        return $data ? new static($data) : null;;

    }
        // return $data ? new static($data) : null;       


     public function toArray() {
        return [$this->id, $this->snacksId, base64_encode($this->image)];
    }
}