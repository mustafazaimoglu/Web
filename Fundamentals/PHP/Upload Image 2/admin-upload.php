<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed))
        {
            echo ("Error: Bu Format Desteklenmiyor");
        }
        
        
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize)
        {
            echo  ("Error: Dosya 5MB yi Aşmamalı");

        }
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("images/" . $filename)){
                echo $filename . " Bu Dosya Zaten Var.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . $filename);
                echo "Başarı İle Yüklendi";
            } 
        } else{
            echo "Error: Bir Hata Oluştu Lütfen Tekrar Deneyin!."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
        
     <div class="container text-center">
        <h2>Resim Yükle</h2>
        <form action="admin-upload.php" method="post" enctype="multipart/form-data">
            <p></p>
            <input type="file" class="btn btn-success my-2" name="photo" id="fileSelect">
            <p></p>
            <input type="submit" class="btn btn-danger my-2" name="submit" value="Yükle">
            <p><strong>Lütfen Dosya Adına Dikkat Ederek Yükleyiniz!</strong></p>
            <p><strong>./images/ Klasörüne Yüklenecektir</strong></p>
            <p><strong>Not:</strong> .jpg, .jpeg, .gif, .png Formatları Desteklenmektedir. Maximum Boyut 5MB dir.</p>
        </form>

     </div>   
    
</body>
</html><!DOCTYPE html>