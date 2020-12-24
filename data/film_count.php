<?php

header('Set-Cookie: SameSite=Strict;Content-Type: application/json;charset=utf-8');

require_once './config/db.php';

// query


$getCountquery = "SELECT COUNT(filmler.Ad) AS Film_Sayisi,turler.Ad FROM filmler
INNER JOIN film_tur ON filmler.Film_ID = film_tur.Film_ID
INNER JOIN turler ON turler.Tur_ID = film_tur.Tur_ID
GROUP BY turler.Ad";

// Existing films count grouped by film category

// get results

// function getAll($conn,$getAllquery) {

//     $results = mysqli_query($conn,$getAllquery);

//     $getAllData = [];

//     foreach ($results as $row) {
//         $getAllData[] = $row;
//     }

//     mysqli_close($conn);

//     echo json_encode($getAllData);

// }

function getCount($conn,$getCountquery) {


    $results = mysqli_query($conn,$getCountquery);

    $Counts = [];

    foreach ($results as $row) {
        $Counts[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($Counts, JSON_UNESCAPED_UNICODE);


}

//getAll($conn,$getAllquery);
getCount($conn,$getCountquery);

?>