<?php
    include("./config/DBOperations.php");

    if(isset($_GET["id"]) && isset($_GET["category"]))
    {
        $id = mysqli_real_escape_string($conn, $_GET["id"]);
        $category = mysqli_real_escape_string($conn, $_GET["category"]);

        $data = $dboperations::gimmeJustOneTopic($category,$id);

    }
  
?>

<!DOCTYPE html>
<html lang="en">
    <?php include("./Templates/header.php") ?>

    <div class="container text-center">
        <div class="m-3 border">
            <h3> <?php echo htmlspecialchars($data["title"]) ?> </h3>
            <h4>Ingredients :</h4>
            <p>
                <?php echo htmlspecialchars($data["ingredients"]) ?>
            </p>
            <p>Created By <?php echo htmlspecialchars($data["email"]) ?></p>
            <p>Created At <?php echo htmlspecialchars($data["created_at"]) ?></p>
        </div>
    </div>

    <?php include("./Templates/footer.php") ?>
</html>