<!DOCTYPE html>
<html lang="da">


    <?php
    require "settings/init.php";
    $id = $_GET["id"];
    $produkter = $db->sql("SELECT * FROM produkter WHERE prodId=:prodId", [":prodId"=>$id]);
    ?>

    <?php
    foreach ($produkter as $produkt){
    ?>


<head>

    <meta charset="utf-8">

    <title> Kragebjerggaard | <?php echo $produkt->prodNavn; ?> </title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="keywords" content="Kragebjerggård, økologisk, økologiske grøntsager, levering til døren, økologisk mælk">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style> body{background-color: rgb(236, 236, 236);} </style>
    <style> a{color: rgb(150, 118, 107);}  a:link{color: rgb(150, 118, 107);}  a:hover{color: rgb(150, 118, 107);}</style>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Tangerine&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/57d07bd12e.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/coclologo.png" type="image/x-icon">

</head>


<body>


    <?php include "includes/navigation.php"; ?>


    <nav class="container" style="padding-top: 130px">
        <div class="row">
            <div class="col-12">
                <p class="montserrat"> < <a href="shop.php">Tilbage til shop</a> </p>
            </div>
        </div>
    </nav>


    <section class="container">
        <div class="row mt-3 p-5">
            <div class="col-12 col-md-6 mb-5">
                <img src="images/<?php echo $produkt->prodBillede;?>">
            </div>
            <div class="col-12 col-md-6 ps-5 pe-5 mb-5">
                <div class="row">
                    <div class="col-12 pb-4 order-1">
                        <h1 class="montserrat" style="font-size: 1.5rem">
                            <?php
                            echo $produkt->prodNavn;
                            ?>
                        </h1>
                    </div>
                    <div class="col-12 order-2 order-md-2">
                        <h2 class="montserrat" style="font-size: 1rem">
                            <?php
                            echo $produkt->prodUcategory;
                            ?>
                        </h2>
                    </div>
                    <div class="col-12 py-5 order-3 order-md-3">
                        <p class="montserrat">
                            <?php
                            echo $produkt->prodBeskrivelse;
                            ?>
                        </p>
                    </div>
                    <div class="col-12 text-end pt-5 pb-4 order-4 order-md-4">
                        <p class="montserrat">
                            <?php
                            echo number_format($produkt->prodPris, 2, ",", "." ). " kr.";
                            ?>
                        </p>
                    </div>
                    <div class="col-12 order-5 d-flex justify-content-end mb-5">
                        <a type="button" class="btn btn-mørkebrun montserrat text-white" data-bs-toggle="button" style="width: 200px" href="#"> Tilføj til kurv </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    }
    ?>

    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


    <script type="module">
        import Produkter from "./js/produkter.js"
        const produkter = new Produkter();
        produkter.init();
    </script>


</body>
</html>
