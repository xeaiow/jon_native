<?php
    session_start();

    if(!session_destroy()) {

        echo "not destory sessions";
    }

    header("Location: index.php");
