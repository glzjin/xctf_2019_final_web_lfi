<?php
    $flag = "flag_here";

    if(stripos($_SERVER['SCRIPT_NAME'], "flag.php") !== false){
        die("<!-- flag.php successfully loaded. -->");
    }
?>
