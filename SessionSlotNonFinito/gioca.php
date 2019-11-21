<?php
    session_start();
    $frutta = ["R", "G", "B"];

    $estrazione = [];
    $valoriEstratti = [];

    for($cntEstrazione = 0; $cntEstrazione < 3; $cntEstrazione++){
        $estrazione[$cntEstrazione] = rand(0,2);
        $valoriEstratti[$cntEstrazione] = $frutta[$estrazione[$cntEstrazione]];
    }

    $risultato = $valoriEstratti[0] . "," . $valoriEstratti[1] . "," . $valoriEstratti[2];
    echo $risultato;

    calculateHandlePoint($estrazione);

    echo "punteggio";

    function calculateHandlePoint($estrazione){

        if($estrazione[0] == $estrazione[1] && $estrazione[1] == $estrazione[2]){
            $_SESSION["punteggio"] = $_SESSION["punteggio"] + 3;
        }

        if($estrazione[0] == $estrazione[1] || $estrazione[1] == $estrazione[2] || $estrazione[0] == $estrazione[2]){
            $_SESSION["punteggio"] = $_SESSION["punteggio"] + 2;
        }
    }
?>