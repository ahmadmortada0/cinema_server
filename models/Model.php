<?php 
abstract class Model{

    protected static string $table;
    protected static string $primary_key = "id";

    public static function find(mysqli $mysqli, int $id){
        $sql = sprintf("Select * from %s WHERE %s = ?", 
                        static::$table, 
                        static::$primary_key);
        
        $query = $mysqli->prepare($sql);
        $query->bind_param("i", $id);
        $query->execute();

        $data = $query->get_result()->fetch_assoc();

        return $data ? new static($data) : null;
    }

    public static function all(mysqli $mysqli){
        $sql = sprintf("Select * from %s", static::$table);
        
        $query = $mysqli->prepare($sql);
        $query->execute();

        $data = $query->get_result();

        $objects = [];
        while($row = $data->fetch_assoc()){
            $objects[] = new static($row); //creating an object of type "static" / "parent" and adding the object to the array
        }

        return $objects; //we are returning an array of objects!!!!!!!!
    }
   public static function add(mysqli $mysqli, array $columns, array $values): bool {
       // Return early if columns and values don't match
    if (count($columns) !== count($values) || empty($columns)) {
        return false;
    }

    // Wrap column names in backticks (`name`, `email`, etc.)
    $escapedColumns = array_map(fn($col) => "`$col`", $columns);
    $columnsStr = implode(", ", $escapedColumns);

    // Create ?, ?, ? placeholders
    $placeholders = implode(", ", array_fill(0, count($values), "?"));

    // Final SQL query
    $sql = sprintf("INSERT INTO `%s` (%s) VALUES (%s)", static::$table, $columnsStr, $placeholders);

    $stmt = $mysqli->prepare($sql);
    if (!$stmt) return false;

    // Assume all values are strings — if not, adjust this line
    // Return early if columns and values don't match
    if (count($columns) !== count($values) || empty($columns)) {
        return false;
    }

    // Wrap column names in backticks (`name`, `email`, etc.)
    $escapedColumns = array_map(fn($col) => "`$col`", $columns);
    $columnsStr = implode(", ", $escapedColumns);

    // Create ?, ?, ? placeholders
    $placeholders = implode(", ", array_fill(0, count($values), "?"));

    // Final SQL query
    $sql = sprintf("INSERT INTO `%s` (%s) VALUES (%s)", static::$table, $columnsStr, $placeholders);

    $stmt = $mysqli->prepare($sql);
    if (!$stmt) return false;

    // Assume all values are strings — if not, adjust this line
    $types = str_repeat("s", count($values));
    $stmt->bind_param($types, ...$values);

    return $stmt->execute();
}




}