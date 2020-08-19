<?php
include "./config/db_connect.php";

// Sorguyu Yaz
$sql = "SELECT id, title, ingredients FROM pizzas";

// Sorguyu Yap
$result = mysqli_query($conn, $sql);

// Dönen Sonucu İlişkisel Array Yap
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Result ı Boşalt Ramdan Tasarruf
mysqli_free_result($result);

// Baglantıyı Kapat
mysqli_close($conn);

// print_r($pizzas);

// print_r(explode(",",$pizzas[0]["ingredients"]));
?>

<!DOCTYPE html>
<html lang="tr">
    <?php include "./Templates/header.php"?>

    <h2 class="text-center mt-2">Pizzas!</h2>

    <div class="container">
            <div class="row">
                <?php foreach ($pizzas as $p): ?>
                <div class="col-md-6 my-2">
                    <div class="card mt-5">
                        <img src="./img/pizza.svg" alt="pizza" class="pizza">
                        <div class="card-body text-center">
                            <h5 class="card-title text-center">
                                <?php echo htmlspecialchars($p["title"]) ?>
                            </h5>
                            <!-- <div class="card-text">
                                <?php echo htmlspecialchars($p["ingredients"]) ?>
                            </div> -->
                            <ul class="list-group">
                                <?php foreach (explode(",", $p["ingredients"]) as $ing): ?>
                                <li class="list-group-item"><?php echo htmlspecialchars($ing) ?></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                            <div class="card-body text-right">
                                <hr>
                                <a href="details.php?id=<?php echo $p["id"] ?>" class="card-link text-right" style="font-size:1.2rem">Learn More</a>
                            </div>

                    </div>
                </div>
                <?php endforeach;?>
            </div>


            <!-- <?php if (count($pizzas) > 3): ?> // Kolay Okunabilirlik için uyglandı!
            <p>There is more than 3 pizzas</p>
            <?php else: ?>
            <p>There is less than 3 pizzas</p>
            <?php endif;?> -->
    </div>


    <?php include "./Templates/footer.php"?>
</html>