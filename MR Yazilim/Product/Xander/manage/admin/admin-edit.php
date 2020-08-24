<?php
include "control.php";
include "./config/dboperations.php";
$categories = $dboperations->getCategories();
$examples_categories = $dboperations->getExamplesCategories();
$visibility = "none";
$content = array("title" => "", "content" => "");
$err = false;
$errMessage = "";

if (isset($_POST["bringTopics"])) {
    $visibility = "block";
    $category = mysqli_real_escape_string($conn, $_POST["category"]);
    $_SESSION["category"] = $category;
    $_SESSION["topicUrls"] = $dboperations->getTheContentUrls($category);
}

if (isset($_POST["bringContent"])) {
    $visibility = "block";
    $url = mysqli_real_escape_string($conn, $_POST["url"]);
    $_SESSION["url"] = $url;
    $content = $dboperations->getOneTopic($_SESSION["category"], $url);
}

if(isset($_POST["guncelle"]))
{
    echo $_SESSION["url"];

    if (empty($_POST["title"])) {
        $err = true;
    }

    if (empty($_POST["editor"])) {
        $err = true;
    }

    if (!$err) {
        $result_title = mysqli_real_escape_string($conn, $_POST["title"]);
        $result_editor = mysqli_real_escape_string($conn, $_POST["editor"]);
        $result_title = trim($result_title);
        $result_editor = trim($result_editor);

        if (!empty($_POST["imagesJson"])) {
            $JSON = json_decode($_POST["imagesJson"]);
            foreach ($JSON as $j) {
                $result_editor = str_replace($j->code, $j->tag, $result_editor);
            }
        }

        $result_editor = $dboperations->changeTheHeaderTags($result_editor);

        $url = $dboperations->createUrl($result_title);

        $dboperations->updateTopic($_SESSION["category"],$url,$result_title,$result_editor,$_SESSION["url"]);
        $_SESSION["url"] = $_SESSION["category"] = $_SESSION["topicUrls"] = "";

    } else {
        $errMessage = "Lütfen Gerekli Alanları Doldurunuz!";
    }


}


?>

<!DOCTYPE html>
<html lang="tr">
<?php include "./templates/header.php";?>

    <div class="container">
        <div class="row my-3">
            <div class="col-md-9 text-center">
                <h3 class="mb-2">Konu Düzenle</h3>
                <div class="bring">
                    <form action="admin-edit.php" method="POST">
                        <div class="d-flex justify-content-center mb-3">
                            <span style="min-width: 350px;">
                                <select name="category" id="Category" class="form-control">
                                    <option value="algoritma">Algoritma</option>
                                    <option value="ne_nedir">Ne Nedir?</option>
                                    <?php foreach ($categories as $c): ?>
                                        <option value="<?php echo htmlspecialchars($c["category_name"]) ?>"> <?php echo htmlspecialchars($c["category_name"]) ?> </option>
                                    <?php endforeach;?>
                                    <?php foreach ($examples_categories as $c): ?>
                                        <option value="<?php echo htmlspecialchars($c["example_category_name"]) ?>"> <?php echo htmlspecialchars($c["example_category_name"]) ?> </option>
                                    <?php endforeach;?>
                                </select>
                            </span>
                            <input type="submit" class="btn btn-warning mx-2" name="bringTopics" value="Konuları Getir">
                        </div>

                    </form>
                    <div class="topic" style="display:<?php echo htmlspecialchars($visibility) ?>">
                        <form action="#" method="POST">
                            <h5 class="my-2"><span class="bg-warning"><?php echo htmlspecialchars($_SESSION["category"]); ?></span> Konu Seç</h5>
                            <select name="url" id="url" class="form-control">
                            <?php foreach ($_SESSION["topicUrls"] as $u): ?>
                                        <option value="<?php echo htmlspecialchars($u["url"]) ?>"> <?php echo htmlspecialchars($u["url"]) ?> </option>
                                    <?php endforeach;?>
                            </select>

                            <input type="submit" class="btn btn-primary my-2 px-4" name="bringContent" value="Getir">
                        </form>
                    </div>


                </div>
                <hr>
                <div class="editing">
                    <form action="admin-edit.php" method="post">
                        <input type="text" name="title" class="form-control my-2" value="<?php echo htmlspecialchars($content["title"]) ?>">

                        <textarea name="editor" id="editor">
                            <?php echo htmlspecialchars($content["content"]) ?>
                        </textarea>

                        <input type="hidden" id="imagesJson" name="imagesJson">
                        <div style="color:red;" class="err mt-2">
                            <?php echo htmlspecialchars($errMessage); ?>
                        </div>
                        <input type="submit" name="guncelle" value="Güncelle" class="btn btn-success my-4 px-4">
                    </form>
                </div>


            </div>

            <div class="col-md-3">
                <div id="imageSection">
                <form action="#">
                    <div class="text-right ">
                        <p class="text-center">Resim Ekle</p>
                        <input type="text" name="source" id="source" placeholder="Source" class="form-control my-2">
                        <input type="text" name="alt" id="alt" placeholder="Alt" class="form-control my-2">

                        <button name="createNewImageCode" id="createNewImageCode" class="btn btn-primary">Resim Kodu Ver</button>

                        <input type="text" class="form-control my-2" name="imgcode" id="imgcode" readonly>
                    </div>
                </form>


                <form class="my-4">
                    <ul class="list-group" id="addedImages">
                    </ul>
                </form>
                </div>
            </div>
        </div>
    </div>




<?php include "./templates/footer.php";?>
</html>