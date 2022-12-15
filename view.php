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


<div style="padding-top: 150px">


<div class="row mt-3 montserrat p-5">



    <div class=" col-12 col-md-6">

            <img src="images/<?php
            echo $produkt->prodBillede;?>">

    </div>
    <div class="col-12 col-md-6">
        <div class="col-12 py-5 order-1">
            <h3>
                <?php
                echo $produkt->prodNavn;
                ?>
            </h3>
        </div>
        <div class="col-12 order-3 order-md-2">
            <h5>
                <?php
                echo $produkt->prodUcategory;
                ?>
            </h5>
        </div>
        <div class="col-12 py-5 order-4 order-md-3">
            <h5>
                <?php
                echo $produkt->prodBeskrivelse;
                ?>
            </h5>
        </div>
        <div class="col-12 text-center py-5 order-2 order-md-4">
            <h5>
                <?php
                echo number_format($produkt->prodPris, 2, ",", "." ). " Kr";
                ?>
            </h5>
        </div>

        <div class="col-12 items text-center order-5">
            <button style="background-color: #96766B;" class="text-white border-light px-5 py-1 rounded"> Tilføj til kurv </button>
        </div>
        <?php
        }
        ?>
    </div>


    </div>











    <div class="container">

        <div class="produkter">
            <div class="filter p-5">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <h4 class="pt-3">Produkt Havn </h4>
                        <input type="search" class="form-control nameSearch" placeholder="Søg">
                        <h4 class="pt-3">Produkt pris</h4>
                        <input type="search" class="form-control priceSearch" placeholder="Søg">
                        <h4 class="pt-3">Produkt kategory</h4>
                        <input type="search" class="form-control categorySearch" placeholder="Søg">
                    </div>
                </div>
            </div>

            <div class="items">

            </div>
        </div>
    </div>




    </div>
        <?php include "includes/footer.php"; ?>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module">
    import Produkter from "./js/produkter.js"

    const produkter = new Produkter();
    produkter.init();
</script>
</body>
</html>
