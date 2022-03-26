<?php
    include("./config/db_connect.php");

    if(isset($_POST["delete"]))
    {
        $id_to_delete = mysqli_real_escape_string($conn, $_POST["id_to_delete"]);

        $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

        if(mysqli_query($conn, $sql))
        {
            //success
            header("Location:index.php");
        }
        else
        {
            echo "Query Error " . mysqli_error($conn);
            //fail
        }
    }

    if(isset($_GET["id"]))
    {
        // for malicious code
        $id = mysqli_real_escape_string($conn, $_GET["id"]);

        // creating the query
        $sql = "SELECT * FROM pizzas WHERE id = $id";

        // making the query
        $result = mysqli_query($conn, $sql);

        // converting to array
        $pizza = mysqli_fetch_assoc($result);

        // free ram and closing the connection
        mysqli_free_result($result);
        mysqli_close($conn);
    }

?>

<!DOCTYPE html>
<html lang="en">
    <?php include("./Templates/header.php") ?>

    <div class="container text-center mt-2 bg-primary border rounded py-3">
        <?php if($pizza): ?>
            <h4 class="mt-2"><?php echo htmlspecialchars($pizza["title"]); ?></h4>
            <p>Created By : <?php echo htmlspecialchars($pizza["email"]); ?></p>
            <p><?php echo date($pizza["created at"]); ?></p>
            <h5>Ingredients :</h5>
            <p><?php echo htmlspecialchars($pizza["ingredients"]); ?></p>

        <?php else : ?>
            
            <h5>No such pizza exists!</h5>

        <?php endif; ?>

        <form action="details.php" method="post">
            <input type="hidden" name="id_to_delete" value="<?php echo htmlspecialchars($pizza["id"]) ?>">
            <input type="submit" name="delete" class="btn btn-warning" value="Delete">
        </form>

    </div>


    <?php include("./Templates/footer.php") ?>
</html>