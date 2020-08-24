<?php
include "./Xander/manage/admin/config/dboperations.php";
$categories = $dboperations->getCategories();
$clrs = array("success","info","warning","primary","danger");
?>

<!DOCTYPE html>
<html lang="tr">
<?php include "./templates/header.php" ?>     
    <section>
        <div class="container">
            <div class="row mt-2">
                <div class="col-12 mb-3 ads"></div>
                <div class="col-12">
                    <div id="home">
                        <div class="algoritma mt-1">
                            <div>
                                <img src="./images/algoritma.png" alt="ne-nedir" width="380" class="rounded" >
                            </div>
                            <div class="info">
                                <h2>Algoritma</h2>
                                <p>
                                Bu Bölüm'de size Algoritma Nedir, ne işe yarar, nerelerde kullanırız, akış diagramları, algoritma çeşitleri ve algoritmaları kurmamızı sağlayan temel yapıları anlatmaya çalışacağız.
                                </p>
                                <a class="btn btn-dark m-2 mb-3" href="content.php?category=Algoritma">Bölüme Ulaşmak İçin</a>
                            </div>
                        </div>

                        <h2 class="text-center mt-3">Programlama</h2>
                        <div class="programming">
                            <div class="row justify-content-around">
                            <?php $i = 0; foreach($categories as $c): ?>

                                <div class="homeCard col-md-3">
                                    <div class="title">
                                        <h4 class="mt-2 text-center">
                                            <?php echo htmlspecialchars($c["category_name"])?>
                                        </h4>
                                    </div>
                                    
                                    <div class="button text-center">
                                    <a class="btn btn-<?php echo $clrs[$i]; ?> my-3" href="content.php?category=<?php echo htmlspecialchars($c["category_name"])?>">Beni Oraya Götür</a>
                                    </div>
                                </div>     

                            <?php $i == 4 ? $i = 0 : $i++; endforeach; ?>   
                            </div>                   
                        </div>

                        <div class="ne-nedir my-3">
                            <div>
                                <img src="./images/ne-nedir.jpg" alt="ne-nedir" width="380" class="rounded" >
                            </div>
                            <div class="info">
                                <h2>Ne Nedir?</h2>
                                <p>
                                    Ne Nedir de edindiğimiz kişisel deneyimlerimizden yaptığımız çıkarımlar doğrultusunda öğrendiğimiz sizden daha önce karşılaşığtımız "Ya bu ne demek ?" sorularını
                                    cevaplandırdığımız bir bölüm oluşturmak istedik...
                                </p>
                                <a class="btn btn-dark m-2 mb-3" href="content.php?category=Ne_nedir">Bölüme Ulaşmak İçin</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 ads"></div>
            </div>
        </div>
    </section>

<?php include "./templates/footer.php" ?>
</html>