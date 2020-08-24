<?php
include "./Xander/manage/admin/config/dboperations.php";
$categories = $dboperations->getCategories();
?>

<!DOCTYPE html>
<html lang="tr">
<?php include "./templates/header.php" ?>
    <div class="container">
        <div class="title text-center">
            <h2 class="pt-3 pb-1">Hakkımızda</h2>
            <hr>
        </div>
        <div class="row my-4">
            <div class="col-md-6 text-center mb-4">
                <img class="rounded-circle border border-dark" src="./system/images/mkz.jpg" alt="Mustafa ZAİMOĞLU" width="350">
                <h4 class="pt-3 pb-2">
                    Mustafa ZAİMOĞLU
                </h4>
                <p>Co-Founder of MR Yazılım</p>
                <p>Builder - Editor</p>
                <a href="https://www.linkedin.com/in/mustafa-zaimo%C4%9Flu-80b513196/" class="btn btn-dark" target="_blank">
                    <i>LinkedIn'e Git</i>
                </a>
            </div>
            <div class="col-md-6 text-center mb-3">
                <img class="rounded-circle border border-dark" src="./system/images/ege.jpg" alt="Ramazan Kahraman" width="350">
                <h4 class="pt-3 pb-2">
                    Ramazan KAHRAMAN
                </h4>
                <p>Co-Founder of MR Yazılım</p>
                <p>Editor-in-Chief</p>
                <a href="https://www.linkedin.com/in/ramazan-kahraman-10a584185/" class="btn btn-dark" target="_blank">
                    <i>LinkedIn'e Git</i>
                </a>
            </div>
            
        </div>
    </div>

<?php include "./templates/footer.php" ?>
</html>