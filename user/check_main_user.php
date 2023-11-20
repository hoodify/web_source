<?php

    require("../connect_db.php");
    session_start();

    if (isset($_SESSION['user_code']) == false){

        echo "no user";

    }


    else{

        echo "user on";

    }

    


?>