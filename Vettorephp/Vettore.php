<?php
    $jeans = array('skinny', 'denim', 'slim fit', 'loose');
    for($i=0;$i<4;$i++){
        echo $jeans[i];
    }

    $jeans1 = ['skinny', 'denim', 'slim fit', 'loose'];
    for($i=0;$i<4;$i++){
        echo $jeans1[i];
    }

    $jeans2 = array(
      0 => "skinny",
      1 => "denim",
      2 => "slim fit",
      3 => "loose"
    );
    for($i=0;$i<4;$i++){
        echo $jeans2[i];
    }

    $jeans3 = array(
        "Sk" => "skinny",
        "Dn" => "denim",
        "Sf" => "slim fit",
        "Ls" => "loose"
    );
    echo $jeans3["Sk"];
    echo $jeans3["Dn"];
    echo $jeans3["Sf"];
    echo $jeans3["Ls"];
?>