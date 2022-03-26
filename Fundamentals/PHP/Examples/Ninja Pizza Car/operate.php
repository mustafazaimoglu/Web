<?php
include "./config/DBOperations.php";

//Bring The Types
$types = $dboperations->gimmeTheTypes();
$visibility = "none";
$data = array("email"=>"","title"=>"","ingredients"=>"");
$category = $index = "";

if (isset($_POST["bringContent"])) {
    $visibility = "block";
    $topicType = mysqli_real_escape_string($conn,$_POST["type"]);

    $topicTypeTopic = $dboperations->gimmeTheHeaders($topicType);
}

if (isset($_POST["bringContentAll"])) {
    $visibility = "block";

    $category = mysqli_real_escape_string($conn,$_POST["category"]);
    $index = mysqli_real_escape_string($conn,$_POST["id"]);

    $data = $dboperations->gimmeJustOneTopic($category,$index);
}

// the htmlspecialchars is protecting us from the xss attacks
$title = $email = $ingredients = $type = $newType = "";
$errors = array("email" => "", "title" => "", "ingredients" => "");
if (isset($_POST["submit"])) {
    // $type = $_POST["type"];

    if (empty($_POST["email"])) {
        $errors["email"] = "An email is required! <br>";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "email must be a valid email address! <br>";
        }
    }

    if (empty($_POST["title"])) {
        $errors["title"] = "A title is required! <br>";
    } else {
        $title = $_POST["title"];
        if (!preg_match("/^[a-zA-Z\s]+$/", $title)) {
            $errors["title"] = "Title must be letters and space only! <br>";
        }
    }

    if (empty($_POST["ingredients"])) {
        $errors["ingredients"] = "At least one ingredient is required! <br>";
    } else {
        $ingredients = $_POST["ingredients"];
        if (!preg_match("/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/", $ingredients)) {
            $errors["ingredients"] = "Ingredients should be seperated by commas and shouldn't contain special chars! <br>";
        }
    }

    if (array_filter($errors)) // dizideki değerler dolu true döner hata var demek
    {
        echo "Check All inputs Twice!";
        // echo "Error Var";
    } else {
        $result_title = mysqli_real_escape_string($conn, $_POST["title"]);
        $result_email = mysqli_real_escape_string($conn, $_POST["email"]);
        $result_ingredients = mysqli_real_escape_string($conn, $_POST["ingredients"]);
        $result_id = mysqli_real_escape_string($conn, $_POST["id"]);
        $result_category = mysqli_real_escape_string($conn, $_POST["category"]);

        $dboperations->updateTheTopic($result_category,$result_id,$result_title,$result_email,$result_ingredients);
    }

} // end of the post check

?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./Templates/header.php"?>

    <div class="container">
		<h2 style="text-align : center">Operating Page</h2>
        <div class="text-center border">
            <h4>Choose The Topic</h4>
            <form action="operate.php" method="POST">
                <select name="type" id="type" class="form-control">
                    <?php foreach ($types as $t): ?>
                        <option value="<?php echo htmlspecialchars($t["type_name"]);?>"> <?php echo htmlspecialchars($t["type_name"]); ?> </option>
                    <?php endforeach;?>
                </select>
                <input type="submit" name="bringContent" class="btn btn-success m-1">
            </form>

            <div style="display:<?php echo htmlspecialchars($visibility) ?>;">
                <form action="operate.php" method="post">
                    <select name="id" id="id" class="form-control">
                    <?php foreach ($topicTypeTopic as $t): ?>
                    <option value="<?php echo htmlspecialchars($t["id"]) ?>"> <?php echo htmlspecialchars($t["id"]) ?> </option>
                    <?php endforeach;?>
                    </select>
                    <input type="hidden" name="category" value="<?php echo htmlspecialchars($topicType)?>">
                    <input type="submit" name="bringContentAll" class="btn btn-success m-1">
                </form>
            </div>
        </div>
    </div>

    	<form action="operate.php" method="post">
            <input type="hidden" name="category" value="<?php echo htmlspecialchars($category) ?>">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($index) ?>">
			<div class="form-group mt-2 p-2" style="text-align: center; border-radius: .3rem; background-color:#8f8f8f">
			<label>E-mail</label>
    		<input type="text" name="email" value="<?php echo htmlspecialchars($data["email"]) ?>" class="form-control">
			<div class="text-warning"><?php echo $errors["email"] ?></div>
    		<label>Title</label>
    		<input type="text" name="title" value="<?php echo htmlspecialchars($data["title"]) ?>" class="form-control">
			<div class="text-warning"><?php echo $errors["title"] ?></div>
    		<label>Ingredients (comma seperated)</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($data["ingredients"]) ?>" class="form-control">
			<div class="text-warning"><?php echo $errors["ingredients"] ?></div>
			<input type="submit" value="Edit" name="submit" class="btn btn-warning my-2">
			</div>
    	</form>

	</div>
    <?php include "./Templates/footer.php"?>
</html>