<?php

header('Set-Cookie: SameSite=Strict;Content-Type: application/json;charset=utf-8');

require_once '../../config/db.php';

// query

$getWeekly = "SELECT * FROM beylikduzu ORDER BY id DESC LIMIT 7;";


function getCount($conn,$getWeekly) {


    $results = mysqli_query($conn,$getWeekly);

    $Weekly = [];

    foreach ($results as $row) {
        $Weekly[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($Weekly, JSON_UNESCAPED_UNICODE);


}

//getAll($conn,$getAllquery);
getCount($conn,$getWeekly);

?>