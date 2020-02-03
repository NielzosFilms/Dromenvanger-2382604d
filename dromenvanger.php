<?php

    echo("Hoeveel vrienden zal ik vragen om hun droom?".PHP_EOL);
    $count = readline();
    if(!is_numeric($count)){
        exit($count . " is geen nummer!");
    }
    $dromen = array();
    for($i=0;$i<$count;$i++){
        echo("Wat is jouw naam?".PHP_EOL);
        $naam = readline();
        echo("Hoeveel dromen ga je opgeven?".PHP_EOL);
        $count2 = readline();
        $temp_dromen = array();
        for($j = 0;$j<$count2;$j++){
            echo("Wat is jouw droom?".PHP_EOL);
            $droom = readline();
            array_push($temp_dromen, $droom);
        }
        $dromen[$naam] = $temp_dromen;
    }
    foreach($dromen as $key => $val){
        foreach($val as $droom){
            echo($key. " Heeft als droom: ".$droom.PHP_EOL);
        }
    }

?>