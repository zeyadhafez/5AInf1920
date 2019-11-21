<?php
session_start();
echo $_SESSION["idUtente"] = $_SESSION["idUtente"] + 1;
?>