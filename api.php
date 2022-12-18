<?php

require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);


header('Content-Type: application/json; charset=utf-8');


if(isset($data["password"]) && $data["password"] == "KickPHP"){
    $sql = "SELECT * FROM produkter WHERE 1=1";
    $bind = [];


    if(!empty($data["search"])){
        $sql .= " AND (prodNavn LIKE CONCAT('%', :search, '%') 
        OR prodPris LIKE CONCAT('%', :search, '%') 
        OR prodCategory LIKE CONCAT('%', :search, '%'))";
        $bind[":search"] = $data["search"];
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
    $error["errorMessage"] = "Dit kodeord var forkert. Prøv igen.";
    echo json_encode('$error');

}
?>
