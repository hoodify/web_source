<?php

  try {

                require("connect_db.php");
                
                $user_code = $_SESSION['user_code'];
                $nickname = $_POST['nickname'];


                $query = "UPDATE user SET nickname = '$nickname' WHERE user_code = $user_code";

                $stmt = $conn->prepare($query);
               
                if($stmt->execute()){

                  echo "success";

                }




  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
