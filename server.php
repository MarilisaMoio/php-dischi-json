<?php 
    $discsInJson = file_get_contents('dischi.json');
    $discs = json_decode($discsInJson, true);

    $response = $discs;

    if(isset($_GET["discIndex"])){
        $discIndex = intVal($_GET["discIndex"]);
        $response = $discs[$discIndex];
    };

    header('Content-Type: application/json');
    echo json_encode($response);
?>