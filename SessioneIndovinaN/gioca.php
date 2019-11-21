<?php 
    session_start();
    $_SESSION["nTentativi"] = $_SESSION["nTentativi"] +1;
    $numeroInserito = $_REQUEST["numero"];
    if($numeroInserito == $_SESSION["nRandom"]){
        echo "INDOVINATO!!" . "<br>";
        $_SESSION["vincita"]=1;
    }
    if($numeroInserito < $_SESSION["nRandom"]){
        echo "ERRATO!! E' maggiore di ". $numeroInserito. "<br>";
    }
    if($numeroInserito > $_SESSION["nRandom"]){
        echo "ERRATO!! E' minore di ". $numeroInserito. "<br>";
    }
    if($_SESSION["nTentativi"]>=4 && $_SESSION["vincita"]=0){
        echo "FINITO I TENTATIVI! <br> IL NUMERO ERA ". $_SESSION["nRandom"];
    }else{
        if($_SESSION["vincita"]==0){
            require 'gioco.html';
        }else{
            echo "GIOCO FINITO";
        }
       
    }
    
    

?>