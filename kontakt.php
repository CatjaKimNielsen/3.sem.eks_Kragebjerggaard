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
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Tangerine:wght@700&display=swap" rel="stylesheet">


</head>

<body>


    <?php include "includes/navigation.php"; ?>


    <div class="row p-sm-3 p-md-5">
        <div class="col-sm-12 col-md-6">
            <div class="mb-3">
                <h2>Kontaktformular</h2>
                <label for="exampleFormControlInput1" class="form-label">Navn</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Navn">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="navn@eksempel.dk">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tekst</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-mørkebrun btn-lg" data-bs-toggle="button" style="color: white">Send Email</button>
        </div>

        <div class="col-sm-12 col-md-6">
            <img src="images/gaardbutik.jpg" id="gaardbutik" alt="Gårdbutik og ejere">
        </div>

    </div>

    <div class="row">
        <h2>Læs også:</h2>
    </div>

    <div class="row p-sm-3 p-md-5">
        <div class="col-sm-6 col-md-4">
            <img src="images/Gården.jpg" id="Gård" alt="Gård">
            <button type="button" class="btn btn-mørkebrun" style="color: white">Læs om historien</button>
        </div>

        <div class="col-sm-6 col-md-4">
            <img src="images/koer.jpeg" id="Koer" alt="Køer">
            <button type="button" class="btn btn-mørkebrun" style="color: white">Læs om køerne</button>
        </div>

        <div class="col-sm-6 col-md-4">
            <img src="images/Gården.jpg" id="Gård" alt="Gård">
            <button type="button" class="btn btn-mørkebrun" style="color: white">Læs om gården</button>
        </div>

    </div>


    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>