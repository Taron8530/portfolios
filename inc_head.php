<?php

session_start();
    if(isset($_SESSION['username'])){
        $logincheck = TRUE;
    }

    ?>