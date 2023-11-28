<?php

  try {

                require("../../connect_db.php");
                
                $nickname = $_POST['nickname'];



                $query = "SELECT * FROM user WHERE nickname = :nickname";

                $stmt = $conn->prepare($query);
                $stmt->bindParam(':nickname',$nickname);
                $stmt->execute(); 

                  if($stmt->rowCount() > 0){

                    echo "exist";

                  }
                  else{

                    echo "possible";
                  }




  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
