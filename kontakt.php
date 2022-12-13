<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> Kontakt | Kragebjerggaard </title>
    <meta name="description" content="...">
    <meta name="robots" content="All">
    <meta name="author" content="...">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content=" Kragebjerggaard | Kontakt ">
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
                <h1 class="tangerine text-center" style="font-size: 3.5rem"> Kontakt os </h1>
                <p class="montserrat text-center"> Vi bestræer os på, at svare indenfor 24 timer.</p>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row mt-3 mb-5">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 col-md-9 mb-3">
                        <input type="email" class="form-control montserrat" id="exampleFormControlInput1" placeholder="Navn">
                    </div>
                    <div class="col-12 col-md-9 mb-3">
                        <input type="email" class="form-control montserrat" id="exampleFormControlInput1" placeholder="navn@eksempel.dk">
                    </div>
                    <div class="col-12 mb-3">
                        <textarea class="form-control montserrat" id="exampleFormControlTextarea1" rows="8" placeholder="Skriv din tekst her"></textarea>
                    </div>
                    <div class="col-12 mt-3 mb-3 d-flex justify-content-end">
                        <a type="button" class="btn btn-mørkebrun montserrat text-white" data-bs-toggle="button" style="width: 200px" href="shop.php"> Send </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="images/gaardbutik.jpg" id="billede" alt="Gårdbutik og ejere">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 text-center">
                <h2 class="montserrat ms-5 mt-5 me-5" style="font-size: 1.5rem"> LÆS MERE OM KRAGEBJERGGAARD </h2>
            </div>
            <div class="col-12 col-md-4 text-center mt-5 mb-5">
                <img src="images/Gården.jpg" alt="Gård">
                <a type="button" class="btn btn-mørkebrun montserrat ms-5 mt-3 me-5 mb-5 text-white" data-bs-toggle="button" style="width: 200px" href="om_os.php"> Om gården </a>
            </div>
            <div class="col-12 col-md-4 text-center mt-5 mb-5">
                <img src="images/mark3.jpeg" alt="Gård">
                <a type="button" class="btn btn-mørkebrun montserrat ms-5 mt-3 me-5 mb-5 text-white" data-bs-toggle="button" style="width: 200px" href="shop.php"> Shop online </a>
            </div>
            <div class="col-12 col-md-4 text-center mt-5 mb-5">
                <img src="images/farmmand.jpeg" alt="Gård">
                <a type="button" class="btn btn-mørkebrun montserrat ms-5 mt-3 me-5 mb-5 text-white" data-bs-toggle="button" style="width: 200px" href="gaardbutikken.php"> Gårdbutikken </a>
            </div>
        </div>
    </div>


    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>