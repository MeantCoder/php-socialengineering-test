<?php
    $_pass = $_POST['pass'];
    if(isset($_pass)) {
        echo "[GATEWAY] => Working, Data collected : " . $_pass;
        echo "[Security] => Collected data encryption : " . base64_encode($_pass) . " :: " . rand(0, 900);
    } else {
        echo "[GATEWAY] => Not working try again :(";
    }
?>