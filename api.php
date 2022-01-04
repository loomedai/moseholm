<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

/*
 * password: skal udfyldes og være KickPHP
 * mainSearch: Valgfri
 *
$header = "HTTP/1.1 400 Bad Request"; // Sending malformed data results in a 400 Bad Request response.
$header = "HTTP/1.1 401 Unauthorized"; // Trying to access to the API without authentication results in a 401 Unauthorized response.
$header = "HTTP/1.1 404 Not Found"; // Not found.
$header = "HTTP/1.1 405 Method Not Allowed"; // Trying to use a method on a route for which it is not implemented results in a 405 Method Not Allowed.
$header = "HTTP/1.1 422 Unprocessable Entity"; // Sending invalid data results in 422 Unprocessable Entity response.

$header = "HTTP/1.1 200 OK"; //  Getting a resource or a collection resource or a collection resources results in a 200 OK response.
$header = "HTTP/1.1 201 Created"; // Creating a resource results in a 201 Created response.
$header = "HTTP/1.1 204 No Content"; // Updating or deleting a resource results in a 204 No Content response.
 */
header('Content-Type: application/json; charset=utf-8');

$data["password"] = "Ghibli";
$data["nameYear"] = '2002';


if($data["password"] == "Ghibli") {
    $sql = "SELECT * FROM ghiblifilm WHERE 1=1";
    $bind = [];

    if(!empty($data["nameSearch"])){
        $sql .= " AND prodTitel LIKE CONCAT('%', :prodTitel, '%') ";
        $bind[":prodTitel"] = $data["nameSearch"];
    }

    if(!empty($data["nameYear"])){
        $sql .= " AND prodYear < :prodYear";
        $bind[":prodYear"] = $data["nameYear"];
    }

    $sql .= " ORDER BY prodTitel ASC";

    $ghiblifilm = $db->sql( $sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($ghiblifilm);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Dit kodeord var forkert";
    echo json_encode($error);
}
?>


