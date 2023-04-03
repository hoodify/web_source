<?php

    require("connect_db.php");
    if (isset($_SESSION['user_code']) == false){

        echo "no user";

    }

    else{

        echo "user on";

    }


?>