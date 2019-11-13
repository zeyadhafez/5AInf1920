<?php
/**
 * Created by PhpStorm.
 * User: inf.hafezz0105
 * Date: 13/11/2019
 * Time: 09:23
 */

    $cognome = $_REQUEST["cognome"];
  
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    $localita = $_REQUEST["localita"];
    $popolazione = $_REQUEST["popolazione"];
    $attivita = $_REQUEST["attivita"];

    $debug=1;

    if($debug){
        echo "nome: ".$nome. "</br>";
        echo "cognome: ".$cognome. "</br>";
        echo "email: ".$email. "</br>";
        echo "password: ".$password. "</br>";
        echo "localita: ".$localita. "</br>";
        echo "popolazione: ".$popolazione. "</br>";

        echo "attivita: ";

        foreach($attivita as $att){
            echo  $att. ", ";
        }
    }
?>