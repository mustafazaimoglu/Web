<?php
include "./Xander/manage/admin/config/dboperations.php";
$categories = $dboperations->getCategories();

if(isset($_GET["category"]) && isset($_GET["url"]))
{
    $category = mysqli_real_escape_string($conn, $_GET["category"]);
    $url = mysqli_real_escape_string($conn, $_GET["url"]);
    $examples_category = $category . "_Example";

    $exRowCount = $dboperations->getExamplesTableRowCount($examples_category);

    $content = $dboperations->getOneTopic($category, $url);
    $forSidebar = $dboperations->getTheContentUrlsAndTitles($category);
}
else if (isset($_GET["category"]))
{
    $category = mysqli_real_escape_string($conn, $_GET["category"]);
    $examples_category = $category . "_Example";

    $exRowCount = $dboperations->getExamplesTableRowCount($examples_category);

    $content = $dboperations->getFirstTopic($category);
    $forSidebar = $dboperations->getTheContentUrlsAndTitles($category);
}
else
{
    header("Location:index.php");
}

?>


<!DOCTYPE html>
<html lang="tr">
<?php include "./templates/header.php" ?>
    <section>
        <div class="container">
            <div class="row mt-2">
                <div class="col-12 mb-3 ads"></div>
                <div class="col-12">
                    <div class="navigationBar">
                        <p>
                            <?php echo htmlspecialchars(str_replace("_"," ",$category)) ?> / <?php echo htmlspecialchars($content["title"]) ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-9">
                    <div id="contentArea">
                        <?php echo $content["content"]?>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="problemNavigation" style="display:<?php echo isset($exRowCount) ? htmlspecialchars("") : htmlspecialchars("none");?>">
                        <a href="content.php?category=<?php echo htmlspecialchars($examples_category) ?>">
                            <h5>Bölüm Örnekleri</h5>
                        </a>
                    </div>

                    <div id="sidebar">
                        <div class="sidebar-header">
                            <h3>Konular</h3>
                        </div>
                        
                        <?php foreach ($forSidebar as $f): ?>
                            <a href="content.php?category=<?php echo htmlspecialchars($category)?>&url=<?php echo htmlspecialchars($f["url"])?>" style="<?php echo $f["title"] == $content["title"] ? htmlspecialchars("color: #fff;") : htmlspecialchars("")?>">
                                <div class="sidebar-list-item" style="<?php echo $f["title"] == $content["title"] ? htmlspecialchars("background: #2395c5;") : htmlspecialchars("")?>">
                                    <?php echo htmlspecialchars($f["title"])?>
                                </div>
                            </a>
                            
                        <?php endforeach;?>

                    </div>

                    <div class="mt-3 ads"></div>
                </div>
                <div class="col-md-9 ads"></div>
            </div>
        </div>
    </section>

<?php include "./templates/footer.php" ?>
</html>