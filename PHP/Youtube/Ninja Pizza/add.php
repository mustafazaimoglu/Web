<?php
	include("./config/db_connect.php");

	// the htmlspecialchars is protecting us from the xss attacks
	$title = $email = $ingredients = "";
	$errors = array("email"=>"", "title"=>"", "ingredients"=>""); 
	if(isset($_POST["submit"]))
	{
		if (empty($_POST["email"]))
		{
			$errors["email"] = "An email is required! <br>";
		}
		else
		{
			$email = $_POST["email"];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$errors["email"] = "email must be a valid email address! <br>";
			}
		}

		if (empty($_POST["title"]))
		{
			$errors["title"] = "A title is required! <br>";
		}
		else
		{
			$title = $_POST["title"];
			if(!preg_match("/^[a-zA-Z\s]+$/", $title))
			{
				$errors["title"] = "Title must be letters and space only! <br>";
			}
		}

		if (empty($_POST["ingredients"]))
		{
			$errors["ingredients"] = "At least one ingredient is required! <br>";
		}
		else
		{
			$ingredients = $_POST["ingredients"];
			if(!preg_match("/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/", $ingredients))
			{
				$errors["ingredients"] = "Ingredients should be seperated by commas and shouldn't contain special chars! <br>";
			}
		}

		if(array_filter($errors)) // dizideki değerler dolu true döner hata var demek
		{
			// echo "Error Var";
		}
		else
		{
			$result_email = mysqli_real_escape_string($conn, $_POST["email"]); // SQL injectiondan korunmak için 
			$result_title = mysqli_real_escape_string($conn, $_POST["title"]);
			$result_ingredients = mysqli_real_escape_string($conn, $_POST["ingredients"]);

			$sql = "INSERT INTO pizzas (title,email,ingredients) VALUES ('$result_title','$result_email','$result_ingredients')";

			if(mysqli_query($conn, $sql))
			{
				//Success
				header("Location:index.php");
			}
			else
			{
				// Error
				echo "Query error : " . mysqli_error($conn);
			}
			// echo "Error Yok";
		}

	} // end of the post check
	
?>

<!DOCTYPE html>
<html lang="en">
    <?php include("./Templates/header.php") ?>

    <div class="container">
		<h2 style="text-align : center">Add a Pizza</h2>
    	<form action="add.php" method="post">
			<div class="form-group mt-2 p-2" style="text-align: center; border-radius: .3rem; background-color:#8f8f8f">
			<label>E-mail</label>
    		<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>" class="form-control">
			<div class="text-warning"><?php echo $errors["email"] ?></div>
    		<label>Pizza Title</label>
    		<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>" class="form-control">
			<div class="text-warning"><?php echo $errors["title"] ?></div>
    		<label>Ingredients (comma seperated)</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>" class="form-control">
			<div class="text-warning"><?php echo $errors["ingredients"] ?></div>
			<input type="submit" value="Submit" name="submit" class="btn btn-warning my-2">
			</div>
    		
    		
    	</form>
    
	</div>

    <?php include("./Templates/footer.php") ?>
</html>