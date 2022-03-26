<?php
include "./config/operations.php";
$toSearch = $message = "";
$showTable = "none";
$alignment = "35vh";

if(isset($_GET["toSearch"]))
{
    $toSearch = $_GET["toSearch"];  
    $toSearch = trim($toSearch); 

    if (!empty($toSearch))
    {
        $result = getTheResult($toSearch);

        if(empty($result[0]))
        {
            $message = "Herhangi Bir Sonuç Bulunamadı!";
        }
        else
        {
            $showTable = "block";
            $alignment = "5vh";
            $header = $result[0];
            $header = array_keys($header); // sadece keyleri aldık
            array_shift($header); // Array in ilk elementini sildik (product name e ihtiyacımız yok key olarak)
        }
    }
    else
    {
        $message = "Lütfen Aranacak Kelimeyi Giriniz!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joseph</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" media="(max-width:762px)" href="./css/mobile.css">
</head>

<body>
    <section>
        <div class="container my-4">
            <div class="searching" style="margin-top:<?php echo $alignment ?>">
                <form action="index.php" method="GET">
                    <input id="searchArea" type="text" name="toSearch" id="toSearch" value="<?php echo htmlspecialchars($toSearch);?>">
                    <div>
                        <button id="submitButton" class="btn" type="submit">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                            Ara
                        </button>

                    </div>

                </form>

            </div>

            <div class="message my-3 text-center text-danger">
                <?php echo htmlspecialchars($message)?>
            </div>

            <div class="showing my-4" style="display:<?php echo $showTable?>">
                <table class="table table-light table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ürün Adı</th>
                            <?php for ($i = 0; $i < count($header); $i++){ ?>
                                <th scope="col"> <?php echo htmlspecialchars($header[$i]) ?> </th>
                            <?php } ?> 
                        </tr>
                            
                    </thead>
                    <tbody>                    
                        <?php $i = 1; foreach($result as $tr):?>
                            <tr>
                                <td><?php echo $i ?></td>
                            <?php foreach($tr as $td): ?>
                                <td><?php echo $td?></td>
                            <?php endforeach; ?>
                            </tr>    
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    <span style="position: fixed; bottom: 0; right: 1px; color: yellow; font-size: 8px;">By MKZ</span>
</body>

</html>