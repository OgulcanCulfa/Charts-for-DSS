<?php

header('Set-Cookie: SameSite=Strict;Content-Type: application/json;charset=utf-8');

require_once '../../config/db.php';

// query

$getDaily = "SELECT * FROM buyukcekmece ORDER BY id DESC LIMIT 7;";


function getCount($conn,$getDaily) {


    $results = mysqli_query($conn,$getDaily);

    $Daily = [];

    foreach ($results as $row) {
        $Daily[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($Daily, JSON_UNESCAPED_UNICODE);


}

//getAll($conn,$getAllquery);
getCount($conn,$getDaily);

?>