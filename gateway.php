<?php
    $_key = rand(900, 66565);
    $_pass = $_POST['pass'];
    if(isset($_pass)) {
        echo "[GATEWAY] => Working, Data collected : " . $_pass;
        echo "\n [Security] => Collected data encryption : " . base64_encode($_pass) . ":" . $_key;
    } else {
        echo "[GATEWAY] => Not working try again :(";
    }
?>