<?php
require(__DIR__."/BaseController.php");
require(__DIR__ . "/../models/snack.php");
class SnackController{
    public function getsnack(){
        try{
            global $mysqli;
            if(!isset($_GET["id"])){
                $snack = Snack::all($mysqli); 
                $snack_array=SnackService::snackToArray($snack);
                echo ResponseService::success_response($snack_array);
                return;
            }
    

            $id = $_GET["id"];
            $snack = Snack::find($mysqli, $id)->toArray();
            echo ResponseService::success_response($snack);

            return;
    }catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    }


    public function insertSnack(){
        global $mysqli ;
        try{
            $data=json_decode(file_get_contents("PHP://input"),true);
            echo($data["name"]);
            $snack=new nack([
                "id"=>0,
                "name" => $data["name"],
                "price" => $data["price"]
            ]);
            $snack->insertSnack($mysqli,$snack->getName(),$snack->getPrice());
            echo "the new snack inserted";
            return;
    }catch(Exception $e){
        echo "caught exception :" ,$e->getMessage();
    }
    }


    public function getSnackImg(){
        try{
            global $mysqli;
            $snacksId = $_GET["snacksId"];
            $snackImg = SnackImg::getImg($mysqli,$snacksId)->toArray();
            echo ResponseService::success_response($snackImg);
            echo("hello");
    
                return;}
                catch(Exception $e){
                    echo "caught exception :" ,$e->getMessage();
    }
    }


    public function setSnackImg(){
        try{
            global $mysqli;
            $data = json_decode(file_get_contents("php://input"), true);
            $snackImage = new SnackImg([
            "snacksId" => $data["snacksId"],
            "image" => $data["image"]]);
            $snackImage->insertSnackImage($mysqli);
        }catch(Exception $e){
                echo "caught exception :" ,$e->getMessage();
    }
    }
    public function deleteSnack(){
        global $mysqli;
        try{
            if(!isset($_GET["id"])){
                $snack=Snack::deleteAll($mysqli);
                echo ResponseService::success_response($snack);
                return;
            }
            $id=$_GET["id"];
            $snack=Snack::delete($mysqli,$id);
            echo ResponseService::success_response($snack);
            return;
        }
    catch(Execption $e){
        echo "caught exception" ,$e->getMessage();
    }
}
}