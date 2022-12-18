<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> Shop | Kragebjerggaard </title>
    <meta name="description" content="Hos Kragebjerggaard giver vi dig muligheden for, at bestille vores økologiske grøntsager,
    økologiske mælk og økologiske mælkeprodukter i vores online gårdbutik med levering direkte til din dør derhjemme.">
    <meta name="robots" content="All">
    <meta name="author" content="Catja, Katarina, Helene, Aisha og Safaa">
    <meta name="copyright" content="Information om copyright">
    <meta name="keywords" content="Kragebjerggård, økologiske grøntsager, økologisk mælk, online gårdbutik, gårdbutik">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content=" Kragebjerggaard | Shop ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="...">
    <meta property="og:image" content="...">
    <meta property="og:description" content="Hos Kragebjerggaard giver vi dig muligheden for, at bestille vores økologiske grøntsager,
    økologiske mælke og økologiske mælkeprodukter i vores online gårdbutik med levering direkte til din dør derhjemme.">
    <meta property="og:locale" content="da.DK">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">


    <style> body{background-color: rgb(236, 236, 236);} </style>
    <style> a{color: rgb(150, 118, 107);}  a:link{color: rgb(150, 118, 107);}  a:hover{color: rgb(150, 118, 107);}</style>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Tangerine&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/57d07bd12e.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/coclologo.png" type="image/x-icon">

</head>

<body>


    <?php include "includes/navigation.php"; ?>


    <div class="container-fluid">
        <div class="row">
            <div class="Banner col-12 mt-5 mb-3">
                <h1 class="tangerine text-center" style="font-size: 3.5rem">Økologiske varer direkte til din dør!</h1>
                <p class="montserrat text-center"> Bestil i dag og få leveret i morgen</p>
            </div>
        </div>
    </div>


    <div class="container mb-5">
        <div class="produkter">
            <div class="filter p-5 mb-3">
                <div class="col-12 col-md-5">
                    <h2 class="pt-3 mb-2 montserrat" style="font-size: 1rem">Søg navn, pris eller kategori</h2>
                    <input type="search" class="search form-control montserrat" placeholder="...">
                </div>
            </div>
            <div class="items"></div>
        </div>
    </div>


    <div class="row mx-5 p-5">
        <div class="col-lg-6 col-sm-12 ">
            <img src="images/milktrail.png" id="shop" alt="Mælkens vej">
        </div>
        <div class="col-lg-6 col-sm-12 montserrat pb-5" id="shoptekst">
            <h2 class="montserrat me-5" style="font-size: 1.5rem"> LEVERING TIL DØREN </h2>
            <p class="montserrat mt-3 me-5 mb-4"> Hos Kravebjerggaard leverer vi dine mejeriprodukter direkte til døren, så du kan få
                fornøjelsen af at opleve det naturlige gårdliv hjemme i din stue! Vores produkter er økologiske og vi garanterer
                at den er så frisk at du kan mærke vinden i hårdet. Vi har friskhedsgaranti på vores mælk, og kan garanterer at
                den mælk du modtager derhjemme ikke er mere end 24 timer fra at være blevet malket. Vi leverer til alle bydele og
                alle etager, så du kan roligt bestille.
            <p class="text-center" style=" font-weight: bold"> Man skal ikke græde over spildt mælk... <br>
                Medmindre det er Kragebjerggaard mælk. </p>
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