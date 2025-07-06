<?php 

class SnackService {

    public static function SnackToArray($snack_db){
        $results = [];

        foreach($snack_db as $a){
             $results[] = $a->toArray(); //hence, we decided to iterate again on the articles array and now to store the result of the toArray() which is an array. 
        } 

        return $results;
    }

}