<?php


  try {


                
                require("connect_db.php");

                $identity_code = $_POST['identity_code'];

           
                $query = "SELECT * FROM user_activity INNER JOIN user ON user_activity.user_code = user.user_code INNER JOIN activity ON user_activity.activity_code = activity.activity_code WHERE user_activity.identity_code = $identity_code AND user_activity.public = 1";
                

                $stmt = $conn->prepare($query);
                
                if($stmt->execute()){

                  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  $jsonResult = json_encode($row);
                  echo $jsonResult;
                }
                else{
                    echo "fail";
                }
                



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>