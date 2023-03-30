<?php


  try {

    require("connect_db.php");
                  
                $dbName = "hoodify";
                $user_code = $_SESSION['user_code'];

                $record_code = $_POST['record_code'];


                $query = "DELETE FROM user_item WHERE user_item_code = $record_code AND user_code = $user_code";

                $stmt = $conn->prepare($query);
                if($stmt->execute()){
                
                    echo "success";

                }
                else{
                    echo "fail";
                }
                
               


  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>