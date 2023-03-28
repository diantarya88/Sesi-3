<?php
    //Model 1
    //$age = array("Peter"=>"35","Ben"=>"37", "Joe"=>"43");

    //Model 2
    $age["AGUS"] = "18";
    $age["TARI"] = "19";
    $age["ARYA"] = "20";
    $age["DITA"] = "20";
    $age["SASTRA"] = "19";

    header("Content-Type: application/json");
    echo json_encode($age);