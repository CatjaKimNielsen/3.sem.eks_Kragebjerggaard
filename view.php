<?php
require "settings/init.php";
$id = $_GET["id"];
$produkter = $db->sql("SELECT * FROM produkter WHERE prodId = :prodId", [":prodId"=>$id]);

?>


<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Kragebjerggaard - onlineshop</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/57d07bd12e.js" crossorigin="anonymous"></script>
</head>

<body>

<?php include "includes/navigation.php"; ?>
<?php

foreach ($produkter as $produkt){
?>

<div class="row mt-3">
    <div class="col-12 col-md-6">
        <h3>
            <?php
            echo $produkt->prodNavn;
            ?>
        </h3>
    </div>

    <div class="col-12 col-md-6">
        <h5>
            <?php
            echo $produkt->prodBeskrivelse;
            ?>
        </h5>
    </div>

    <div class="row mt-5">
        <div class="col-12 col-md-2">
            <h5>
                <?php
                echo number_format($produkt->prodPris, 2, ",", "." );
                ?>
            </h5>
        </div>
        <div class="col-12 col-md-2">
            <h5>
                <?php
                echo $produkt->prodUcategory;
                ?>
            </h5>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 col-md-4">
            <img src="images/<?php
            echo $produkt->prodBillede;
            ?>">
        </div>
        <div class="col-12 col-md-4">
            <h5>
                <?php
                echo $produkt->prodBeskrivelse;
                ?>
            </h5>
        </div>
    <?php
    }
    ?>

        <?php include "includes/footer.php"; ?>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
