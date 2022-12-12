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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Tangerine&display=swap" rel="stylesheet">


</head>

<body>


    <?php include "includes/navigation.php"; ?>


    <div class="row p-sm-3 p-md-5">
        <div class="col-sm-12 col-md-6">
            <div class="mb-3">
                <h2 class="my-5 montserrat">Kontaktformular</h2>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Navn" style="width: 75%">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="navn@eksempel.dk" style="width: 75%">
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Skriv din tekst her"></textarea>
            </div>
            <button type="button" class="btn btn-mørkebrun btn-lg montserrat" data-bs-toggle="button" style="color: white" href="#">Send Email</button>
        </div>

        <div class="col-sm-12 col-md-6 ml-2 mt-5">
            <img src="images/gaardbutik.jpg" id="billede" alt="Gårdbutik og ejere">
        </div>

    </div>


    <div class="row">
        <div class="col-12 text-center">
            <h2 class="montserrat">Læs også:</h2>
        </div>
    </div>

    <div class="row p-sm-3 p-md-5">
        <div class="col-sm-6 col-md-4 text-center">
            <img src="images/Gården.jpg" id="Gård" alt="Gård" class="mt-4">
            <button type="button" class="btn btn-mørkebrun btn-lg m-4 montserrat" style="color: white" href="#">Læs om historien</button>
        </div>

        <div class="col-sm-6 col-md-4 text-center">
            <img src="images/koer.jpeg" id="Koer" alt="Køer" class="mt-4">
            <button type="button" class="btn btn-mørkebrun btn-lg m-4 montserrat" style="color: white" href="#">Læs om køerne</button>
        </div>

        <div class="col-sm-6 col-md-4 text-center">
            <img src="images/Gården.jpg" id="Gård" alt="Gård" class="mt-4">
            <button type="button" class="btn btn-mørkebrun btn-lg m-4 montserrat" style="color: white" href="#">Læs om gården</button>
        </div>

    </div>


    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>