<?php
include "Database.php";

$database = new Database();
$conn = $database->connection();

class DBOperations
{
    public $conn;

    public function __construct()
    {
        $this->conn = $GLOBALS["conn"];
    }

    public function getCategories()
    {
        $sql = "SELECT * FROM category";

        $result = mysqli_query($this->conn, $sql);

        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);

        return $data;
    }

    public function getExamplesCategories()
    {
        $sql = "SELECT * FROM examples_category";

        $result = mysqli_query($this->conn, $sql);

        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);

        return $data;
    }

    public function getExamplesTableRowCount($tableName)
    {
        $sql = "SELECT * FROM $tableName LIMIT 1";

        $result = mysqli_query($this->conn, $sql);

        if($result !== false)
        {
            $data = mysqli_num_rows($result);

            if($data > 0)
            {
                return $data;    
            }
        }
    }

    public function createNewTable($tableName)
    {
        $sql = "CREATE TABLE `$tableName` ( `id` INT NOT NULL AUTO_INCREMENT , `url` TEXT NOT NULL , `title` TEXT NOT NULL , `content` TEXT NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`))";

        if (!mysqli_query($this->conn, $sql)) {
            echo "Error creating table: " . mysqli_error($this->conn);
        }

        $sql = "INSERT INTO category (category_name) VALUES ('$tableName')";

        if (!mysqli_query($this->conn, $sql)) {
            echo "Error adding table to category: " . mysqli_error($this->conn);
        }

        $tableNameExample = $tableName . "_Example";

        $sql = "CREATE TABLE `$tableNameExample` ( `id` INT NOT NULL AUTO_INCREMENT , `url` TEXT NOT NULL , `title` TEXT NOT NULL , `content` TEXT NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`))";

        if (!mysqli_query($this->conn, $sql)) {
            echo "Error creating table: " . mysqli_error($this->conn);
        }

        $sql = "INSERT INTO examples_category (example_category_name) VALUES ('$tableNameExample')";

        if (!mysqli_query($this->conn, $sql)) {
            echo "Error adding table to examples_category: " . mysqli_error($this->conn);
        }
    }

    public function insertNewTopic($category, $url, $title, $content)
    {
        $sql = "INSERT INTO $category (url,title,content) VALUES ('$url','$title','$content')";

        if (mysqli_query($this->conn, $sql)) {
            header("Location:admin.php");
        } else {
            echo "Query Error : " . mysqli_error($this->conn);
        }
    }

    public function getTheContentUrls($category)
    {
        $sql = "SELECT (url) FROM $category";

        $result = mysqli_query($this->conn, $sql);

        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);

        return $data;
    }

    public function getTheContentUrlsAndTitles($category)
    {
        $sql = "SELECT url,title FROM $category";

        $result = mysqli_query($this->conn, $sql);

        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);

        return $data;
    }

    public function getOneTopic($category, $url)
    {

        $sql = "SELECT title,content,url FROM $category WHERE url = '$url'";

        $result = mysqli_query($this->conn, $sql);

        $data = mysqli_fetch_assoc($result);

        mysqli_free_result($result);

        return $data;
    }

    public function deleteTopic($category,$url)
    {
        $sql = "DELETE FROM $category WHERE url = '$url'";

        if(mysqli_query($this->conn, $sql))
        {
            header("Location:admin.php");
        }
        else
        {
            echo "Deleting Error " . mysqli_error($this->conn);
        }
    }

    public function updateTopic($category,$newUrl,$title,$content,$oldUrl)
    {
        $sql = "UPDATE $category SET url='$newUrl',title='$title',content='$content' WHERE url='$oldUrl'";

        if(mysqli_query($this->conn, $sql))
        {
            header("Location:admin.php");
        }
        else
        {
            echo "Updating Error : " . mysqli_error($this->conn);
        }
    }

    public function getFirstTopic($category)
    {
        $sql = "SELECT title,content FROM $category LIMIT 1";

        $result = mysqli_query($this->conn, $sql);

        $data = mysqli_fetch_assoc($result);

        return $data;
    }

    public function changeTheHeaderTags($data)
    {
        $data = str_replace("<h2>", "<h1>", $data);
        $data = str_replace("</h2>", "</h1>", $data);
        $data = str_replace("<h3>", "<h2>", $data);
        $data = str_replace("</h3>", "</h2>", $data);
        $data = str_replace("<h4>", "<h3>", $data);
        $data = str_replace("</h4>", "</h3>", $data);

        return $data;
    } 

    public function createUrl($data)
    {
        $data = str_replace(array('.','-','~','#','!','(',')','+',',','@'), '', $data);
        $data = str_replace(" ", "-", $data);
        $data = str_replace("ğ", "g", $data);
        $data = str_replace("ç", "c", $data);
        $data = str_replace("ı", "i", $data);
        $data = str_replace("ü", "u", $data);
        $data = str_replace("ş", "s", $data);
        $data = str_replace("ö", "o", $data);
        $data = str_replace("Ö", "O", $data);
        $data = str_replace("Ş", "S", $data);
        $data = str_replace("Ü", "U", $data);
        $data = str_replace("İ", "I", $data);
        $data = str_replace("Ç", "C", $data);
        $data = str_replace("Ğ", "G", $data);
        $data = strtolower($data);
        
        return $data;
    }
}

// Coded By MKZ

$dboperations = new DBOperations();
