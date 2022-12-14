<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

/*
 * password: Skal udfyldes og være KickPHP
 * nameSearch: Valgfri
 */

/*
 * $header = "HTTP/1.1 400 Bad Request"; // Sending malformed data results in a 400 Bad Request response.
 * $header = "HTTP/1.1 401 Unathorized"; // Trying to access to the API without authentication results in a 401 Unauthorized response
 * $header = "HTTP/1.1 404 Not Found"; // Not Found
 * $header = "HTTP/1.1 405 Method Not Allowed"; // Trying to use a method on a route for which it is not implemented results in a 405 Method Not Allowed
 * $header = "HTTP/1.1 422 Unprocessable Entity"; // Sending invalid data results in a 422 Unprocessable Entity response
 *
 * $header = "HTTP/1.1 200 OK"; // Getting af resource or collection resources results in a 200 OK response.
 * $header = "HTTP/1.1 201 Created"; // Creating a resource results in a 201 Created response.
 * $header = "HTTP/1.1 204 Content"; // Updating og deleting a resource results in a 204 Content response.
 */

header('Content-Type: application/json; charset=utf-8');

if(isset($data["password"]) && $data["password"] == "KickPHP"){
    $sql = "SELECT * FROM produkter WHERE 1=1";
    $bind = [];


    if(!empty($data["nameSearch"])){
        $sql .= " AND prodNavn LIKE CONCAT('%', :prodNavn, '%') ";
        $bind[":prodNavn"] = $data["nameSearch"];
    }

    if(!empty($data["priceSearch"])){
        $sql .= " AND prodPris = :prodPris";
        $bind[":prodPris"] = $data["priceSearch"];
    }


    if(!empty($data["categorySearch"])){
        $sql .= " AND prodCategory Like CONCAT('%', :prodCategory, '%') ";
        $bind[":prodCategory"] = $data["categorySearch"];
    }


    if(!empty($data["minPrice"])){
        $sql .= " AND prodPris >= :prodPris ";
        $bind[":prodPris"] = $data["minPrice"];
    }

    if(!empty($data["maxPrice"])){
        $sql .= " AND prodPris <= :prodPris ";
        $bind[":prodPris"] = $data["maxPrice"];
    }

    $produkter = $db -> sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($produkter);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Dit kodekord var forkert";
    echo json_encode('$error');

}
?>
