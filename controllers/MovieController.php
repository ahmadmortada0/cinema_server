<?php
require(__DIR__."/BaseController.php");
require(__DIR__ . "/../models/Movie.php");
require(__DIR__ . "/../services/MovieService.php");
class MovieController{
    public function getMovie(){
        try{
            global $mysqli;
            if(!isset($_GET["id"])){
            $movie = Movie::all($mysqli); 
            $movie_array=MovieService::movieToArray($movie);
            echo ResponseService::success_response($movie_array);
            return;
    }
    

    $id = $_GET["id"];
    $movie = Movie::find($mysqli, $id)->toArray();
    echo ResponseService::success_response($movie);

    return;
    }catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    }
    public function InsertMovie(){
        try{
            global $mysqli;
            $data = json_decode(file_get_contents("php://input"), true);
            $movie = new Movie([
                "title" => $data["title"],
                "description" => $data["description"],
                "image" => $data["image"],
                "trailer"=>$data["trailer"]]);



    // $columns = ["title", "description", "image","trailer"];
    // $values = [$movie->getTitle(), $movie->getDescription(), $movie->getImage(),$movie->getTrailer()];
    echo ("vahello");

    $movie->insertMovie($mysqli); 
    echo ResponseService::success_response($movie);
    return;
        }catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    public function deleteMovie(){
        global $mysqli;
        try{
            if (isset($_GET["id"])){
                $movie=Movie::deleteAll($mysqli);
                 echo ResponseService::success_response($snack);
                 return;
        }
            $id=$_GET["id"];
            $movie=Movie::delete($mysqli,$id);
            echo ResponseService::success_response($snack);
            return;
    }catch(Exception $e){
        echo"caught exception", $e->getMessage();
    }   
    }
}