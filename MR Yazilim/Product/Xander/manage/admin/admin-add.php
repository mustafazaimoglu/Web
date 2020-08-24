<?php
include "control.php";
include "./config/dboperations.php";
$categories = $dboperations->getCategories();
$examples_categories = $dboperations->getExamplesCategories();
$errMessage = "";
$err = false;

if (isset($_POST["ekle"])) {
    $category = mysqli_real_escape_string($conn, $_POST["category"]);

    if ($category === "new") {
        if (empty($_POST["newCategory"])) {
            $err = true;
        }
    }

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

        if ($category === "new") {
            $category = mysqli_real_escape_string($conn, $_POST["newCategory"]);

            $dboperations->createNewTable($category);
        }
        
        $url = $dboperations->createUrl($result_title);

        $dboperations->insertNewTopic($category, $url, $result_title, $result_editor);

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
                <h3>Konu Ekle</h3>
                <form action="admin-add.php" method="post">
                    <p>Lütfen Kategori Seçiniz</p>
                    <select name="category" id="category" class="form-control">
                        <option value="algoritma">Algoritma</option>
                        <option value="ne_nedir">Ne Nedir?</option>
                        <?php foreach ($categories as $c): ?>
                            <option value="<?php echo htmlspecialchars($c["category_name"]) ?>"> <?php echo htmlspecialchars($c["category_name"]) ?> </option>
                        <?php endforeach;?>
                        <?php foreach ($examples_categories as $c): ?>
                            <option value="<?php echo htmlspecialchars($c["example_category_name"]) ?>"> <?php echo htmlspecialchars($c["example_category_name"]) ?> </option>
                        <?php endforeach;?>
                        <option value="new">Yeni Konu</option>
                    </select>
                    <input type="text" id="newCategory" name="newCategory" class="form-control my-2" placeholder="Lutfen Yeni Konuyu Giriniz..(Başharfinin Büyük Olmasına Dikkat Ediniz)" style="display: none;">
                    <hr>
                    <input type="text" name="title" class="form-control my-2" placeholder="Konu Başlığını Girin.. (Side bar ve url için kısaltılabilir.) NOKTALAMA İŞARETİ KULLANMAYINIZ!">

                    <textarea name="editor" id="editor"></textarea>

                    <input type="hidden" id="imagesJson" name="imagesJson">
                    <div style="color:red;" class="err mt-2">
                            <?php echo htmlspecialchars($errMessage); ?>
                    </div>
                    <input type="submit" name="ekle" value="Ekle" class="btn btn-success my-4 px-4">
                </form>

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