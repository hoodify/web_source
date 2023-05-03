<?php



  try {


    require("connect_db.php");

                $user_code = $_SESSION['user_code'];
                $identity_code = $_POST['identity_code'];


                $query = "UPDATE user_identity SET active = 0, sequence_val = 99 WHERE user_code = $user_code AND identity_code = $identity_code";
               
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