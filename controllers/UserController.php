<?php
require(__DIR__."/BaseController.php");
require(__DIR__ . "/../models/User.php");
class UserController{
    public function getUser(){
        try{
            global $mysqli;
            if(!isset($_GET["id"])){
            $user = User::all($mysqli); 
            $user_array=UserService::userToArray($user);
            echo ResponseService::success_response($user_array);
            return;
    }
    

    $id = $_GET["id"];
    $user = User::find($mysqli, $id)->toArray();
    echo ResponseService::success_response($user);

    return;
    }catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    }
    public function insertUser(){
        global $mysqli ;
        try{
            $data=json_decode(file_get_contents("PHP://input"),true);
            echo($data["name"]);
            $user=new User([
                "id"=>0,
                "name" => $data["name"],
                "email" => $data["email"],
                "password" => $data["password"]
            ]);
            $User->insertUser($mysqli,$User->getName(),$User->getEmail(),$User->getPassword());
            echo "the new User inserted";
            return;
    }catch(Exception $e){
        echo "caught exception :" ,$e->getMessage();
    }
    }
    public function getuserByEmail(){
        try{
            global $mysqli;
            if(isset( $_GET["email"])){
                $email = $_GET["email"];
                $user = User::findbyemail($mysqli,$email);
                $user = User::find($mysqli, $id)->toArray();
                echo ResponseService::success_response($user);      
                return;}
                        }catch(Exception $e){
                            echo "caught exception :" ,$e->getMessage();
    }
}
public function deleteUser(){
    try{
        global $mysqli;
        if (!isset($_GET["id"])){
            $user=User::deleteAll($mysqli);
            echo ResponseService::success_response($user);      
            return;
        }
        if($_GET["id"]){
            $id=($_GET["id"]);
            $user=User::delete($mysqli,$id);
            echo ResponseService::success_response($user);      
            return;
        }
    }catch(Exception $e){
                            echo "caught exception :" ,$e->getMessage();
    }
}
    }
