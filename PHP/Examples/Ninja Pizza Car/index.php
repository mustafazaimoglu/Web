<?php
    // echo $_SERVER[""];
    // $file_name = "MKZ";
    // mkdir($file_name);

    include("./config/DBOperations.php");

    $types = $dboperations->gimmeTheTypes();

    $contents = array();
    $i = 0;

    foreach ($types as $t)
    {
        $table = $t["type_name"];
        $contentsql = "SELECT id,title FROM $table";

        $result = mysqli_query($conn, $contentsql);

        $contents[$i] = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);

        $i++;
    }
    // echo var_dump($contents[0][0]["id"]);
    // echo "   *******   ";
    // echo $contents[1][2]["title"];

?>

<!DOCTYPE html>
<html lang="tr">
    <?php include "./Templates/header.php"?>

    <section class="container">
        <div class="row my-2">
            <?php $i = 0; foreach($types as $t): ?>
            <div class="col-6">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h3> <?php echo htmlspecialchars($t["type_name"]) ?> </h3>
                        </div>
                        <div class="card-tex">
                            <ul>
                            <?php foreach($contents[$i] as $c): ?>
                                <li>
                                    <a href="./details.php?category=<?php echo htmlspecialchars($t["type_name"]); ?>&id=<?php echo htmlspecialchars($c["id"]) ?>"><?php echo htmlspecialchars($c["title"]); ?></a>
                                </li>
                            <?php endforeach; ?>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; endforeach; ?>
        </div>
    </section>

    <?php include "./Templates/footer.php"?>
</html>