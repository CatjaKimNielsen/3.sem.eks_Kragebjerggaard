<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> Shop | Kragebjerggaard </title>
    <meta name="description" content="...">
    <meta name="robots" content="All">
    <meta name="author" content="...">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content=" Kragebjerggaard | Shop ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="...">
    <meta property="og:image" content="...">
    <meta property="og:description" content="...">
    <meta property="og:locale" content="da.DK">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">


    <style> body{background-color: rgb(236, 236, 236);} </style>
    <style> a{color: rgb(150, 118, 107);}  a:link{color: rgb(150, 118, 107);}  a:hover{color: rgb(150, 118, 107);}</style>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Tangerine&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/57d07bd12e.js" crossorigin="anonymous"></script>


</head>

<body>


    <?php include "includes/navigation.php"; ?>


    <div class="container-fluid">
        <div class="row">
            <div class="Banner col-12 mt-5 mb-5">
                <h1 class="tangerine text-center" style="font-size: 3.5rem">Økologiske varer direkte til din dør!</h1>
                <p class="montserrat text-center"> Bestil i dag og få leveret i morgen</p>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="produkter">
            <div class="filter p-5">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <h4 class="pt-3">Produkt navn </h4>
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

    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module">
        import Produkter from "./js/produkter.js"

        const produkter = new Produkter();
        produkter.init();
    </script>



</body>

</html>