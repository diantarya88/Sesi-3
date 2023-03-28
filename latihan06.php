<?php
    $mhs = array(
        array("Tary" , "2201012345" , "Tegallang"),
        array("Intari", "2201023456" , "Kintamani"),
        array("Nita" , "2201034567" , "Payangan"),
        array("Filda" , "2201045678" , "Jawa Barat"),
    );
    header("Content-Type: application/json");
    echo json_encode($mhs);