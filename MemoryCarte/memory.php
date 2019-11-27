<?php
    session_start();
    $r = $_REQUEST["r"];
    $c = $_REQUEST["c"];


    $_SESSION["selezionate"] = $_SESSION["selezionate"]+1;
    
   
    if($_SESSION["selezionate"]==1){

            $_SESSION["r1"]=$r;
            $_SESSION["c1"]=$c;
            require 'memory.html';
    }

    if($_SESSION["selezionate"]==2){
            $_SESSION["r2"]=$r;
            $_SESSION["c2"]=$c;
            
            require 'gioca.php';
    }
        
     
            
        
    
    

?>