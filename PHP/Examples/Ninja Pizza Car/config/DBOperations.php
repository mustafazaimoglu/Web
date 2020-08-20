<?php
include "Database.php";

$database = new Database();
$conn = $database->connection(); //$GLOBALS

class DBOperations
{
    public function creatNewTableForContent($tableName)
    {
        $createSql = "CREATE TABLE `$tableName` ( `id` INT NOT NULL AUTO_INCREMENT , `title` TEXT NOT NULL , `email` TEXT NOT NULL , `ingredients` TEXT NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`))";

        if (!mysqli_query($GLOBALS["conn"], $createSql)) {
            echo "Error creating table: " . mysqli_error($conn);
        }

        $addTypeSql = "INSERT INTO types (type_name) VALUES ('$tableName')";

        if (!mysqli_query($GLOBALS["conn"], $addTypeSql)) {
            echo "Error adding type: " . mysqli_error($conn);
        }
    }

    public function gimmeTheTypes()
    {
        $sql = "SELECT * FROM types";

        $result = mysqli_query($GLOBALS["conn"], $sql);

        $types = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);

        return $types;
    }

    public function insertNewTopic($table,$title,$email,$ingredients)
    {
        $sql = "INSERT INTO $table (title,email,ingredients) VALUES ('$title','$email','$ingredients')";

        if (mysqli_query($GLOBALS["conn"], $sql))
        {
            header("Location:index.php");
        }
        else
        {
            echo "Query Error : " . mysqli_error($conn);
        }
    }

    public function gimmeJustOneTopic($category, $id)
    {
        $sql = "SELECT * FROM $category WHERE id = $id";

        $result = mysqli_query($GLOBALS["conn"], $sql);

        $data = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($GLOBALS["conn"]);

        return $data;
    }

    public function gimmeTheHeaders($category) 
    {
        $sql = "SELECT (id) FROM $category";

        $result = mysqli_query($GLOBALS["conn"], $sql);

        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);
        mysqli_close($GLOBALS["conn"]);

        return $data;

    }

    public function updateTheTopic($cat,$id,$title,$email,$ingredients)
    {
        $sql = "UPDATE $cat SET title='$title',email='$email',ingredients='$ingredients' WHERE id='$id'";

        if (mysqli_query($GLOBALS["conn"], $sql))
        {
            header("Location:index.php");
        }
        else
        {
            echo "Updating Error : " . mysqli_error($conn);
        }
    }
}

$dboperations = new DBOperations();
