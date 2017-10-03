<?php
    $_pass = $_POST['pass'];
    if(isset($_pass)) {
        echo "[GATEWAY] => Working, Data collected : " $_pass;
    } else {
        echo "[GATEWAY] => Not working try again :(";
    }
?>